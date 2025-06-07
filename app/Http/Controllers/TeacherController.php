<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Eager load the related subject
        $teachers = Teacher::with('subject')->get();
        return view('teachers.index', compact('teachers'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subjects = Subject::orderBy('name')->get();
        return view('teachers.create', compact('subjects'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email',
            'subject_id' => 'required|exists:subjects,id',
            'photo' => 'required|image|',
        ]);

        // Handle photo upload
        $photoName = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('images/teachers'), $photoName);
        $data['photopath'] = $photoName;

        Teacher::create($data);

        return redirect()->route('teachers.index')->with('success', 'Teacher Created Successfully');
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
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        $subjects = Subject::orderBy('name')->get();
        return view('teachers.edit', compact('teacher', 'subjects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:teachers,email,{$teacher->id}",
            'subject_id' => 'required|exists:subjects,id',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            // Upload new photo
            $photoName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('images/teachers'), $photoName);
            $data['photopath'] = $photoName;

            // Delete old photo
            $oldPhoto = public_path('images/teachers/' . $teacher->photopath);
            if (file_exists($oldPhoto)) {
                unlink($oldPhoto);
            }
        }

        $teacher->update($data);

        return redirect()->route('teachers.index')->with('success', 'Teacher Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);

        // Delete photo
        $photo = public_path('images/teachers/' . $teacher->photopath);
        if (file_exists($photo)) {
            unlink($photo);
        }

        $teacher->delete();

        return redirect()->route('teachers.index')->with('success', 'Teacher Deleted Successfully');
    }
}
