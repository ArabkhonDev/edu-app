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
        //
    }

    public function show(Teacher $teacher)
    {
        return $teacher;
    }

    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return "deleted teacher";
    }
}
