<?php

namespace Database\Seeders;

use App\Http\Controllers\Admins\AdminsController;
use App\Models\Admin\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'admin.uno',
            'email' => 'admin.uno@gmail.com',
            'password' => bcrypt('password'),
        ]);
        Admin::create([
            'name' => 'admin.dos',
            'email' => 'admin.dos@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
