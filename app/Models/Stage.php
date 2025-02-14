<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    protected $fillable = ['title'];

    public function groups(){
        return $this->hasMany(Group::class);
    }
}
