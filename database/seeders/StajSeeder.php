<?php

namespace Database\Seeders;

use App\Models\Staj;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StajSeeder extends Seeder
{
    
    public function run(): void
    {
        for($i = 0; $i < 5; $i++){
            Staj::create([
                'firma_name'=> fake()->words(3, true),
                'title'=>fake()->words(2, true),
                'duration'=>rand(6, 12) . "month" . " - " . rand(0, 10) . "years",
                'stack'=>fake()->words(7, true),
                'desc'=>fake()->words(30, true),
            ]);
        }
    }
}
