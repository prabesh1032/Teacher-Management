<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function teacher(request $request)
    {
        $teachers = Teacher::all();
        $subjects = Subject::all();
        return view('teacher', compact('teachers', 'subjects'));
    }
    public function subject(request $request)
    {
        $subjects = Subject::all();
        return view('subject', compact('subjects'));
    }
    public function teachersBySubject($id)
    {
        $subject = Subject::findOrFail($id);
        $teachers = Teacher::where('subject_id', $id)->get();

        return view('subjects-teachers', compact('subject', 'teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */

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
    public function show(string $id)
    {
        //
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
