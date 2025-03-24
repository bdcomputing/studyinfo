<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\University;
use Illuminate\Http\Request;

class AdminProgramController extends Controller
{
    /**
     * Display a listing of the programs
     */
    public function index()
    {
        //
        $programs = Program::query()->paginate(20);
        return view("admin.programs.index", compact("programs"));
    }

    /**
     * Show the form for creating a new program
     */
    public function create()
    {
        //
        $universities = University::all("id", "name");
        return view("admin.programs.create", compact("universities"));
    }

    /**
     * Store a newly created program in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'university_id' => "required|string",
            'name' => "required",
            "level" => "required|string",
            'description' => "required|string",
            'duration' => "required|numeric|min:1",
            "intake_period" => "sometimes|string",
            "mode_of_study" => "required|string",
            "field_of_study" => "required|string",
            "language_of_instruction" => "required|string",
            'program_fee' => "required|numeric",
            'application_deadline' => "required|date",
            'is_popular' => "sometimes|boolean",
            'has_scholarship' => "sometimes|boolean",
        ]);
        $data = $request->all();
        Program::create($data);
        return redirect()->route("admin.programs.index")->with("success", "Program created successfully");
    }

    /**
     * Display the specified program
     */
    public function show(Program $program)
    {
        return view("admin.programs.show", compact('program'));
    }

    /**
     * Show the form for editing the specified program
     */
    public function edit(Program $program)
    {
        //
        $universities = University::all("id", "name");
        return view("admin.programs.edit", compact('universities', 'program'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Program $program)
    {
        //
        $request->validate([
            'university_id' => "required|string",
            'name' => "required",
            "level" => "required|string",
            'description' => "required|string",
            'duration' => "required|numeric|min:1",
            "intake_period" => "sometimes|string",
            "mode_of_study" => "required|string",
            "field_of_study" => "required|string",
            "language_of_instruction" => "required|string",
            'program_fee' => "required|numeric",
            'application_deadline' => "required|date",
            'is_popular' => "sometimes|boolean",
            'has_scholarship' => "sometimes|boolean",
        ]);

        $data = $request->all();
        $program->update($data);
        return redirect()->route("admin.programs.index")->with("success", "Program updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        //
        $program->delete();
        return redirect()->route("admin.programs.index")->with("success", "Program deleted successfully");
    }
}
