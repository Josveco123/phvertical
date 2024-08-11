<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create(
            [
            'name' => 'admin',
            'email' => 'phvertical@laboratoriodelcaribe.com',
            'password' => bcrypt('Phpassword79$'),
            'role' => 'master'
        ]);
        User::factory()->create(
            [
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
            'role' => 'normal'
        ]);
        User::factory()->create(
            [
            'name' => 'Jhon',
            'email' => 'jhon@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'normal'
        ]);
        User::factory()->create(
            [
            'name' => 'Alfonzo pacheco',
            'email' => 'alfonso@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'normal'
        ]);
    }
}
