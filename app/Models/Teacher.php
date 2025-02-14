<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'role_id',
        'email',
        'password',
        'username',
        'lastname',
        'phone',
        'address',
        'professional'
    ];

    public function groups(){
        return $this->hasMany(Group::class);
    }

    public function stajes(){
        return $this->hasMany(Staj::class);
    }
}
