<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(PropSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(hometypeSeeder::class);
        $this->call(RequestSeeder::class);
        $this->call(savedpropSeeder::class);
        $this->call(adminSeeder::class);
        $this->call(PropImageSeeder::class);
    }
}
