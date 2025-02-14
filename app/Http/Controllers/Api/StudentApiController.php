<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentApiController extends Controller
{

    public function index()
    {
        return Student::limit(10)->get();
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Student $student)
    {
        return $student;
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return "deleted student";
    }
}
