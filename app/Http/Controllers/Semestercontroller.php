<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Semester;
use App\Models\Course;
use Illuminate\View\View;

class Semestercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $semesters = Semester ::all();
        return view ('semesters.index')->with('semesters',$semesters);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        $courses= Course::pluck('name','course_id');
        return view('semesters.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Semester::create($input);
        return redirect('semesters')->with('flash_message', 'Semester Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $semesters = Semester::find($id);
        return view('semesters.show')->with('semesters',$semesters);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $semesters = Semester::find($id);
        return view('semesters.edit')->with('semesters',$semesters);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $semesters = Semester:: find($id);
        $input = $request->all();
        $semesters->update($input);
        return redirect('semesters')->with('flash_message', 'semester Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Semester::destroy($id);
        return redirect('semesters')->with('flash_message','semester deleted!');
    }
}
