<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::create([
            'role_id' => 2,
            'email' => 'teacher@gmail.uz',
            'password' => Hash::make('admin123'),
            'username' => 'teacher',
            'lastname'=>"meliboyev",
            'phone'=> 999113133,
            'address'=>'Fargona sanat saroy 13-a uy',
            'professional'=> "matematika o'qtuvchi",
            'old_jobs'=>'Backend deloper at Right Solution Hub',

        ]);
        {
            for($i = 0; $i<12; $i++){
                Teacher::create([
                    'role_id'=> 2,
                    'email'=>fake()->firstName . "@gmail.com",
                    'username'=>fake()->firstName,
                    'lastname'=>fake()->lastName,
                    'address'=>fake()->paragraph,
                    'old_jobs'=>fake()->paragraph,
                    'password'=>Hash::make('admin1234'),
                    'phone'=> 99894 . rand(1000000, 9999999),
                    'professional'=> fake()->paragraph,
                ]);
            }            
        }
    }
}
