<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
            'role_id' => 3,
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

    public function edit(User $user)
    {
        return view('admin.student.edit')->with([
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $user->update([
            'role_id' => 3,
            'email' => $request->email,
            'password' => $request->password,
            'username' => $request->username,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        return redirect()->route('student.show');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}

