<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
  
    public function run(): void
    {
        for($i = 0; $i<5; $i++){
            Course::create([
                'name'=>fake()->name,
                'duration'=>rand(9, 12) . " month",
                'price'=> rand(150, 5000),
                'knowladge'=>fake()->word(8, true),
            ]);
        }
    }
}
