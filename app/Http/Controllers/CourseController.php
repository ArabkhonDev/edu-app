<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Language;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('course.index')->with([
            'courses'=> Course::all(),
        ]);
    }

    public function create()
    {
        $languages = Language::all();
        return view('course.create')->with([
            'languages'=>$languages
        ]);
    }

    public function store(Request $request)
    {
        $course = Course::create([
            'name' => $request->name,
            'language_id'=> $request->lanuguage_id,
            'duration'=>$request->duration,
            'price' => $request->price,
            'knowladge' => $request->knowladge,
        ]);

        return to_route('course.index');
    }

    public function show(Course $course)
    {
        return view('course.show')->with([
            'course'=> $course
        ]);
    }

    public function edit(Course $course)
    {
        return view('courses.edit')->with(['course' => $course]);
    }

    public function update(Request $request, Course $course)
    {
        $course->update([
            'name' => $request->name,
            'language_id'=> $request->lanuguage_id,
            'duration'=>$request->duration,
            'price' => $request->price,
            'knowladge' => $request->knowladge,
        ]);

        return redirect()->route('courses.show', ['post' => $course->id]);

    }

    public function destroy(Course $course)
    {
        $course->delete();
        return back();
    }
}
