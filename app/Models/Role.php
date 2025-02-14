<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];

    public function students(){
        return $this->hasMany(Student::class);
    }
    public function teachers(){
        return $this->hasMany(Teacher::class);
    }
    public function admin(){
        return $this->hasOne(Admin::class);
    }
}


