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
        'old_jobs',
        'address',
        'professional'
    ];

    public function groups(){
        return $this->hasMany(Group::class);
    }


}
