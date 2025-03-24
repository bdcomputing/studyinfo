<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Destination;
use App\Models\University;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
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
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $data = $request->except(['logo', 'image']);


        if ($request->hasFile('image')) {
            $image = $request->file('image')->storeOnCloudinary('universities');
            $data['image_url'] = $image->getSecurePath();
            $data['image_public_id'] = $image->getPublicId();
        }

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo')->storeOnCloudinary('universities/logos');
            $data['logo_url'] = $logo->getSecurePath();
            $data['logo_public_id'] = $logo->getPublicId();
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
            'logo' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $data = $request->except(['logo', 'image']);

        if ($request->hasFile('image')) {
            if ($university->image_public_id) {
                Cloudinary::destroy($university->image_public_id);
            }
            $image = $request->file('image')->storeOnCloudinary('universities');

            $data['image_url'] = $image->getSecurePath();
            $data['image_public_id'] = $image->getPublicId();
        }

        if ($request->hasFile('logo')) {
            if ($university->logo_public_id) {
                Storage::disk('cloudinary')->delete($university->logo_public_id);
            }
            $logo = $request->file('logo')->storeOnCloudinary("universities/logos");
            $data['logo_url'] = $logo->getSecurePath();
            $data['logo_public_id'] = $image->getPublicId();
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
        if ($university->image_public_id) {
            Cloudinary::destroy($university->image_public_id);
        }
        if ($university->logo_public_id) {
            Cloudinary::destroy($university->logo_public_id);
        }
        $university->delete();
        return redirect()->route("admin.universities.index")->with("success", "University deleted successfully");
    }
}
