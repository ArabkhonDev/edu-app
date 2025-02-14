<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{

    public function run(): void
    {
        for($i = 0; $i<10; $i++){

            Room::create([
                'name'=>fake()->name,
            ]);
        }
    }
}
