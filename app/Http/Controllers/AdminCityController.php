<?php

namespace App\Http\Controllers;

use App\Models\City;
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
        return view("admin.cities.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "name" => "required:string",
            "destination_id" => "required:string",
            "state" => "sometimes:string",
            "timezone" => "required:string",
            "population" => "sometimes:numeric",
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
        return view("admin.cities.edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        //
        $request->validate([
            "name" => "required:string",
            "destination_id" => "required:string",
            "state" => "sometimes:string",
            "timezone" => "required:string",
            "population" => "sometimes:numeric",
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
