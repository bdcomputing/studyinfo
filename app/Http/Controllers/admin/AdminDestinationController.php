<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Support\Str;

class AdminDestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $destinations = Destination::all();
        return view("admin.destinations.index", compact("destinations"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view("admin.destinations.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'country' => 'required|string',
            'study_cost' => 'required|integer|min:1',
            'is_popuar' => 'sometimes|boolean'
        ]);
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . $image->getClientOriginalExtension();

            // Store file in storage
            Storage::disk('public')->put('images/destinations/' . $imageName, file_get_contents($image));
            $data['image'] = $imageName;
        }
        $data['slug'] = Str::slug($request->name) . '-' . time();
        Destination::create($data);
        return redirect()->route('admin.destinations.index')->with("success", "Destination created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Destination $destination)
    {
        return view("admin.destinations.show", compact('destination'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destination $destination)
    {
        return view("admin.destinations.edit", compact("destination"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destination $destination)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'country' => 'required|string',
            'study_cost' => 'required|integer|min:1',
            'is_popuar' => 'sometimes|boolean'
        ]);
        $data = $request->except('image');

        if ($request->hasFile('image')) {
            // Delete old image
            if ($destination->image) {
                Storage::delete('images/blog/' . $destination->image);
            }
            // Store New Image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->put('images/destinations/' . $imageName, file_get_contents($image));
            $data['image'] = $imageName;

            // Update slug if it has changed
            if ($request->name !== $destination->name) {
                $data['slug'] = Str::slug($request->name) . '-' . time();
            }
            // Set popular status
            $data['is_popular'] = $request->has('is_popolar');

            $destination->update($data);
            return redirect()->route('admin.destinations.index')
                ->with('success', 'Destination updated successfully.');
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {

        // Delete image
        if ($destination->image) {
            Storage::disk('public')->delete('images/destinations/' . $destination->image);
        }

        $destination->delete();

        return redirect()->route('admin.destinations.index')
            ->with('success', 'Blog post deleted successfully.');
    }
}
