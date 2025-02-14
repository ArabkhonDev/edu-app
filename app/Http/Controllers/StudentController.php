<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        return view('student.index')->with([
            'students'=> Student::paginate(10),
        ]);
    }

    public function create()
    {
        return view('student.create')->with([
            'groups'=> Group::all(),
        ]);
    }

    public function store(Request $request)
    {
        $student = Student::create([
            'role_id' => 2,
            'email' => $request->email,
            'password' => $request->password,
            'username' => $request->username,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
    }

    public function show(Student $student)
    {
        return view('student.show')->with([
            'student'=>$student
        ]);
    }

    public function edit(Student $student)
    {
        return view('student.edit')->with([
            'student' => $student
        ]);
    }

    public function update(Request $request, Student $student)
    {
        $student->update([
            'role_id' => 2,
            'email' => $request->email,
            'password' => $request->password,
            'username' => $request->username,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return back();
    }
}
