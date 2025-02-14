<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staj extends Model
{
    protected $fillable = [
        'firma_name',
        'title',
        'duration',
        'stack',
        'desc'
    ];

    public function teachers(){
        return $this->hasMany(Teacher::class);
    }
}
