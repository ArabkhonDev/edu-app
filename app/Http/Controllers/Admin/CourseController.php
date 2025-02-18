<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Course;
use App\Models\Language;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('admin.course.index')->with([
            'courses'=> Course::all(),
        ]);
    }

    public function create()
    {
        return view('admin.course.create');
    }

    public function store(Request $request)
    {
        $course = Course::create([
            'name' => $request->name,
            'duration'=>$request->duration,
            'price' => $request->price,
            'knowladge' => $request->knowladge,
        ]);

        return to_route('admin.course.index');
    }

    public function show(Course $course)
    {
        return view('admin.course.show')->with([
            'course'=> $course
        ]);
    }

    public function edit(Course $course)
    {
        return view('admin.courses.edit')->with(['course' => $course]);
    }

    public function update(Request $request, Course $course)
    {
        $course->update([
            'name' => $request->name,
            'duration'=>$request->duration,
            'price' => $request->price,
            'knowladge' => $request->knowladge,
        ]);

        return redirect()->route('admin.courses.show', ['post' => $course->id]);

    }

    public function destroy(Course $course)
    {
        $course->delete();
        return back();
    }
}
