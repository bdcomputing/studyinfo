<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Program;
use App\Models\University;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $programs = Program::query()->filter($request->all())->paginate(20);
        $universities = University::all();
        // get all distict programstudy levels
        $studyLevels = Program::select('level')->distinct()->get();
        // get all destinations
        $destinations = Destination::all();
        // get distinct program language of instruction
        $languages = Program::select('language_of_instruction')->distinct()->get();
        // get distinct program field of study
        $fieldsOfStudy = Program::select('field_of_study')->distinct()->get();
        return view("web.programs.index", compact("programs", "universities", "studyLevels", "destinations", "languages", "fieldsOfStudy"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Program $program)
    {
        //
        return view("web.programs.show", compact("program"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
