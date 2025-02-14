<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'role_id',
        'name',
        'email',
        'password'
    ];

    public function role(){
        return $this->hasOne(Role::class);
    }
}
