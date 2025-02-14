<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function index()
    {
        return view('teacher.index')->with([
            'teachers' => Teacher::all(),
        ]);
    }

    public function create()
    {
        return view('teacher.create')->with([
            'groups' => Group::all(),
        ]);
    }

    public function store(Request $request)
    {
        $teacher = Teacher::create([
            'role_id' => 2,
            'email' => $request->email,
            'password' => $request->password,
            'username' => $request->username,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'old_jobs' => $request->old_jobs,
            'address' => $request->address,
            'professional' => $request->professional
        ]);
    }

    public function show(Teacher $teacher)
    {
        return view('teacher.show')->with([
            'teacher' => $teacher,
        ]);
    }

    public function edit(Teacher $teacher)
    {
        return view('teacher.edit')->with([
            'teacher' => $teacher
        ]);
    }

    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update([
            'role_id' => 2,
            'email' => $request->email,
            'password' => $request->password,
            'username' => $request->username,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'old_jobs' => $request->old_jobs,
            'address' => $request->address,
            'professional' => $request->professional
        ]);
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return back();
    }
}
