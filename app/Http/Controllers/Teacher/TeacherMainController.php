<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class TeacherMainController extends Controller
{
    public function main(){
        return view('teacher.teacher');
    }

    public function students(){
        return view('teacher.student.index');
    }

    public function student_show(Student $student){
        return view('teacher.student.show')->with([
            'student'=>$student
        ]);
    }
}
