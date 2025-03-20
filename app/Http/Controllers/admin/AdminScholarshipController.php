<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Scholarship;
use App\Models\University;
use Illuminate\Http\Request;

class AdminScholarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $scholarships = Scholarship::query()->paginate(20);
        return view("admin.scholarships.index", compact("scholarships"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $universities = University::all();
        return view("admin.scholarships.create", compact("universities"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "name" => "string:required",
            "description" => "required|string",
            "amount" => "required:numeric",
            "eligibility_criteria" => "required|string",
            "application_deadline" => "required:date",
            "university_id" => "required|string",
        ]);

        $data = $request->all();
        Scholarship::create($data);
        return redirect()->route("admin.scholarships.index")->with("success", "scholarship created successfuly");
    }

    /**
     * Display the specified resource.
     */
    public function show(Scholarship $scholarship)
    {
        //
        return view("admin.scholarships.show", compact("scholarship"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Scholarship $scholarship)
    {
        //
        $universities = University::all();
        return view("admin.scholarships.edit", compact("scholarship", "universities"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Scholarship $scholarship)
    {
        //
        $request->validate([
            "name" => "string:required",
            "description" => "required|string",
            "amount" => "required:numeric",
            "eligibility_criteria" => "required|string",
            "application_deadline" => "required:date",
            "university_id" => "required|string",
        ]);
        $data = $request->all();
        $scholarship->update($data);
        return redirect()->route("admin.scholarships.show", $scholarship);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Scholarship $scholarship)
    {
        //
        $scholarship->delete();
        return redirect()->route("admin.scholarships.index")->with("success", "Scholarship deleted successfully");
    }
}
