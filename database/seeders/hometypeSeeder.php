<?php

namespace Database\Seeders;

use App\Models\Prop\HomeType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class hometypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       HomeType::create([
        'hometypes'=> 'Condominio',
       ]);
       HomeType::create([
        'hometypes'=> 'Terreno',
       ]);
       HomeType::create([
        'hometypes'=> 'Comercial',
       ]);
    }
}
