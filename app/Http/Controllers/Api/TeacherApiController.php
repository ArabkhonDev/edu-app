<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherApiController extends Controller
{

    public function index()
    {
        return Teacher::all();
    }

    public function store(Request $request)
    {
        $course= Teacher::create([
            'name'=>$request->name,
            'duration'=>$request->duration,
            'price'=>$request->price,
            'knowladge'=>$request->knowladge
        ]);
        return back();
    }

    public function show(Teacher $teacher)
    {
        return $teacher;
    }

    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update([
            'name'=>$request->name,
            'duration'=>$request->duration,
            'price'=>$request->price,
            'knowladge'=>$request->knowladge
        ]);
        return back();
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return to_route('course.index');
    }
}
