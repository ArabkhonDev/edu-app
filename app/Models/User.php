<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;
    protected $fillable = [
        'role_id',
        'email',
        'password',
        'username',
        'lastname',
        'phone',
        'address',
    ];

    protected $hidden = ['password','remember_token',];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function groups(){
        return $this->belongsToMany(Group::class);
    }
    
    public function payments(){
        return $this->belongsToMany(Payment::class);
    }

    public function rooms(){
        return $this->belongsToMany(Room::class);
    }
}
