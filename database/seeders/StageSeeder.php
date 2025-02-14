<?php

namespace Database\Seeders;

use App\Models\Stage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $stages = [
            'junior',
            'middle',
            'senior',
            'lead',
            'final'
        ];

        foreach ($stages as $stage) {
            Stage::create([
                'title' => $stage
            ]);
        };
    }
        
}
