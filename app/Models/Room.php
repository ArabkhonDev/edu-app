<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'group_id',
        'name'
    ];

    public function groups(){
        return $this->hasMany(Group::class);
    }
}
