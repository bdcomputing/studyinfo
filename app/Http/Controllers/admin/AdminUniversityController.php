<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Destination;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminUniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $universities = University::query()->paginate(20);
        return view("admin.universities.index", compact('universities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $destinations = Destination::query()->get(['id', 'name']);
        $cities = City::all();
        return view("admin.universities.create", compact('destinations', "cities"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //
        $request->validate([
            "name" => "required|string",
            "destination_id" => "required|string",
            "city_id" => "required|string",
            "ranking" => "sometimes|numeric|min:1",
            "type" => "required|string",
            "description" => "required|string",
            "detail" => "sometimes|string",
            "website_url" => "required|string",
            "contact_email" => "required|email",
            "tuition_fee" => "required|integer|min:1",
            "is_popular" => "sometimes|boolean",
        ]);
        $data = $request->except(['logo', 'image']);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'images/universities/' . time() . "." . $image->getClientOriginalExtension();

            // store image in storage
            Storage::disk("public")->put($imageName, file_get_contents($image));
            $data['image_url'] = $imageName;
        }

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = "images/universities/logos/" . time() . "." . $logo->getClientOriginalExtension();

            // store Logo in storage
            Storage::disk('public')->put($logoName, file_get_contents($logo));
            $data['logo_url'] = $logoName;
        }
        $data["slug"] = Str::slug($request->name);
        University::create($data);
        return redirect()->route("admin.universities.index")->with("success", "University created succesfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(University $university)
    {
        //
        return view("admin.universities.show", compact("university"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(University $university)
    {
        // 
        $cities = City::all();
        $destinations = Destination::query()->get(['id', 'name']);
        return view("admin.universities.edit", compact("university", "destinations", "cities"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, University $university)
    {
        //
        $request->validate([
            "name" => "required|string",
            "destination_id" => "required|string",
            "city_id" => "required|string",
            "ranking" => "sometimes|numeric|min:1",
            "type" => "required|string",
            "description" => "required|string",
            "detail" => "sometimes|string",
            "website_url" => "required|string",
            "contact_email" => "required|email",
            "tuition_fee" => "required|integer|min:1",
            "is_popular" => "sometimes|boolean",
        ]);
        $data = $request->except(['logo', 'image']);

        if ($request->hasFile('image')) {
            if ($university->image_url) {
                Storage::disk('public')->delete($university->image_url);
            }
            $image = $request->file('image');
            $imageName = 'images/universities/' . time() . "." . $image->getClientOriginalExtension();

            // store image in storage
            Storage::disk("public")->put($imageName, file_get_contents($image));
            $data['image_url'] = $imageName;
        }

        if ($request->hasFile('logo')) {
            if ($university->logo_url) {
                Storage::disk('public')->delete($university->logo_url);
            }
            $logo = $request->file('logo');
            $logoName = "images/universities/logos/" . time() . "." . $logo->getClientOriginalExtension();

            // store Logo in storage
            Storage::disk('public')->put($logoName, file_get_contents($logo));
            $data['logo_url'] = $logoName;
        }
        if ($request->name !== $university->name) {

            $data["slug"] = Str::slug($request->name);
        }
        $university->update($data);
        return redirect()->route("admin.universities.index")->with("success", "University updated succesfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(University $university)
    {
        //
        if ($university->image_url) {
            Storage::disk('public')->delete($university->image_url);
        }
        if ($university->logo_url) {
            Storage::disk("public")->delete($university->logo_url);
        }
        $university->delete();
        return redirect()->route("admin.universities.index")->with("success", "University deleted successfully");
    }
}
