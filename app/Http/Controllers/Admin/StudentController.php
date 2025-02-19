<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        return view('admin.student.index')->with([
            'students'=> User::paginate(10),
        ]);
    }

    public function create()
    {
        return view('admin.student.create')->with([
            'groups'=> Group::all(),
        ]);
    }

    public function store(Request $request)
    {
        $student = User::create([
            'role_id' => 2,
            'email' => $request->email,
            'password' => $request->password,
            'username' => $request->username,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
    }

    public function show(User $student)
    {
        return view('admin.student.show')->with([
            'student'=>$student
        ]);
    }

    public function edit(Student $student)
    {
        return view('admin.student.edit')->with([
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
        return redirect()->route('student.show');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return back();
    }
}
