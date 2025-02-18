<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'role_id',
        'email',
        'password',
        'username',
        'lastname',
        'phone',
        'address'
    ];

    public function groups(){
        return $this->belongsToMany(Group::class);
    }
    
    public function payments(){
        return $this->belongsToMany(Payment::class);
    }
}
