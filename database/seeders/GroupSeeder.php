<?php

namespace Database\Seeders;

use App\Models\Group;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
   
    public function run(): void
    {
        for($i = 0; $i<20; $i++){
            Group::create([
                'user_id'=>rand(1, 13),
                'course_id'=>rand(1, 5),
                "room_id" =>rand(1, 10),
                'start_time'=>Carbon::parse('12:30:00'),
                // 'start_time'=>Carbon::now()->format('H:i:s'),
                'end_time'=> Carbon::parse('17:30:00'),
                'name'=>fake()->name,
            ]);
        }
    }
}
