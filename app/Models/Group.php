<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'course_id',
        'teacher_id',
        'room_id',
        'start_time',
        'end_time',
        'name'
    ];

    public function students(){
        return $this->belongsToMany(Student::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
    
    public function room(){
        return $this->belongsTo(Room::class);
    }

}
