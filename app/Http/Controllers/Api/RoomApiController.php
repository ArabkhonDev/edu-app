<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomApiController extends Controller
{

    public function index()
    {
        return Course::all();
    }


    public function store(Request $request)
    {
        $course= Course::create([
            'name'=>$request->name,
            'duration'=>$request->duration,
            'price'=>$request->price,
            'knowladge'=>$request->knowladge
        ]);
        return back();
    }

    public function show(Course $course)
    {
        return $course;
    }

    public function update(Request $request, Course $course)
    {
        $course->update([
            'name'=>$request->name,
            'duration'=>$request->duration,
            'price'=>$request->price,
            'knowladge'=>$request->knowladge
        ]);
        return back();
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return to_route('course.index');
    }
}
