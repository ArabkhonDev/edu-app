<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseApiController extends Controller
{

    public function index()
    {
        return Course::all();
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Course $course)
    {
        return $course;
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return to_route('course.index');
    }
}
