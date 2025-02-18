<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Group;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function index()
    {
        return view('admin.teacher.index')->with([
            'teachers' => Teacher::all(),
        ]);
    }

    public function create()
    {
        return view('admin.teacher.create')->with([
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
        return view('admin.teacher.show')->with([
            'teacher' => $teacher,
        ]);
    }

    public function edit(Teacher $teacher)
    {
        return view('admin.teacher.edit')->with([
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
        return redirect()->route('teacher.show');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return back();
    }
}
