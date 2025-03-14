<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Continent;
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
        $destinations = Destination::query()->paginate(20);
        return view("admin.destinations.index", compact("destinations"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $continents = Continent::all();
        return view("admin.destinations.create", compact("continents"));
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
            'currency' => 'sometimes|string',
            'continent_id' => "required|string",
            'cost_of_living' => 'sometimes|integer|min:1',
            'is_popuar' => 'sometimes|boolean'
        ]);
        $data = $request->except(['image', "flag"]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . $image->getClientOriginalExtension();

            // Store file in storage
            Storage::disk('public')->put('images/destinations/' . $imageName, file_get_contents($image));
            $data['image_url'] = $imageName;
        }
        if ($request->hasFile('flag')) {
            $flag = $request->file('flag');
            $flagName = time() . $flag->getClientOriginalExtension();

            // Store file in storage
            Storage::disk('public')->put('images/flags/' . $flagName, file_get_contents($flag));
            $data['flag_url'] = $flagName;
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
        $continents = Continent::all();
        return view("admin.destinations.edit", compact("destination", "continents"));
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
            'currency' => 'sometimes|string',
            'continent_id' => "required|string",
            'cost_of_living' => 'sometimes|integer|min:1',
            'is_popuar' => 'sometimes|boolean'
        ]);
        $data = $request->except('image', 'flag');

        if ($request->hasFile('image')) {
            // Delete old image
            if ($destination->image_url) {
                Storage::delete($destination->image_url);
            }
            // Store New Image
            $image = $request->file('image');
            $imageName = 'images/destinations/' . time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->put($imageName, file_get_contents($image));
            $data['image_url'] = $imageName;
        };
        if ($request->hasFile('flag')) {
            // Delete old flag
            if ($destination->flag_url) {
                Storage::delete($destination->flag_url);
            }
            // Store New Image
            $flag = $request->file('flag');
            $flagName = 'images/flags/' . time() . '.' . $flag->getClientOriginalExtension();
            Storage::disk('public')->put($flagName, file_get_contents($flag));
            $data['flag_url'] = $flagName;
        };
        // Update slug if it has changed
        if ($request->name !== $destination->name) {
            $data['slug'] = Str::slug($request->name) . '-' . time();
        }
        // Set popular status
        $data['is_popular'] = $request->has('is_popolar');

        $destination->update($data);
        return redirect()->route('admin.destinations.index')
            ->with('success', 'Destination updated successfully.');
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
