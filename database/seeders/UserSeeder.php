<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'role_id' => 1,
            'email' => 'teacher@gmail.uz',
            'password' => Hash::make('admin123'),
            'username' => 'teacher',
            'lastname'=>"meliboyev",
            'phone'=> 999113133,
            'address'=>'Fargona sanat saroy 13-a uy',
            'professional'=> "matematika o'qtuvchi",
            'old_jobs'=>'Backend deloper at Right Solution Hub',
        ]);

        for($i= 0; $i<50; $i++){
            User::create([
                'role_id' => 2,
                'email' => fake()->firstName(). "@gmail.com",
                'password' => Hash::make('admin123'),
                'username' => fake()->firstName(),
                'lastname'=>fake()->lastName(),
                'phone'=> '99894'. rand(1000000, 9999999),
                'address'=>fake()->word(8, true),
                'professional'=> fake()->word(3, true),
                'old_jobs'=>fake()->word(5, true),
            ]);
        }
        for($i= 0; $i<50; $i++){
            User::create([
                'role_id' => 3,
                'email' => fake()->firstName(). "@gmail.com",
                'password' => Hash::make('admin123'),
                'username' => fake()->firstName(),
                'lastname'=>fake()->lastName(),
                'phone'=> '99894'. rand(1000000, 9999999),
                'address'=>fake()->word(8, true),
            ]);
        }
    }
}
