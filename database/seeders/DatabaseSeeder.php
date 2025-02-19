<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            PaymentSeeder::class,
            UserSeeder::class,
            CourseSeeder::class,
            RoomSeeder::class,
            GroupSeeder::class,
        ]);
      
    }
}
