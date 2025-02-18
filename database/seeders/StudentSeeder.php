<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'role_id' => 3,
            'email' => 'student@gmail.uz',
            'password' => Hash::make('admin123'),
            'username' => 'teacher',
            'lastname' => "meliboyev",
            'phone' => 949113133,
            'address' => 'Fargona sanat saroy 13-a uy',

        ]); {
                for ($j = 0; $j < 25; $j++) {
                    Student::create([
                        'role_id' => 3,
                        'email' => fake()->firstName . "@gmail.com",
                        'username' => fake()->firstName,
                        'lastname' => fake()->lastName,
                        'address' => fake()->paragraph,
                        'password' => Hash::make('admin1234'),
                        'phone' => 99894 . rand(1000000, 9999999),
                    ]);
            }
        }
    }
}
