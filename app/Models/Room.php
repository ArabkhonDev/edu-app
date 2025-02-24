<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'name'
    ];

    public function groups(){
        return $this->hasMany(Group::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
