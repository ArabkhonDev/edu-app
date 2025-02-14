<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'language_id',
        'name',
        'duration',
        'price',
        'knowladge'
    ];

    public function laguage(){
        return $this->belongsTo(Language::class);
    }

    public function groups(){
        return $this->hasMany(Group::class);
    }
}
