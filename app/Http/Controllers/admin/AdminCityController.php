<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\City;
use App\Models\Destination;
use Illuminate\Http\Request;

class AdminCityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cities = City::query()->paginate(20);
        return view("admin.cities.index", compact("cities"));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $countries  = Destination::all();
        return view("admin.cities.create", compact("countries"));
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

        ]);


        $data = $request->all();
        City::create($data);
        return redirect()->route("admin.cities.index")->with("success", "city created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        //
        return view("admin.cities.show", compact('city'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        //
        $countries  = Destination::all();
        return view("admin.cities.edit", compact("countries", "city"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        //
        $request->validate([
            "name" => "required|string|min:3",
            "destination_id" => "required|exists:destination_id",

        ]);

        $data = $request->all();
        $city->update($data);
        return redirect()->route("admin.cities.index")->with("success", "city created successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        //
        $city->delete();
        return redirect()->route("admin.cities.index")->with("success", "City deleted successfully");
    }
}
