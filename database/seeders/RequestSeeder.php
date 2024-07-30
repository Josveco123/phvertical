<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prop\AllRequest;

class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AllRequest::create([
            'prop_id'=> '2',
            'agent_name'=> 'Luis Carrascal',
            'user_id'=> '1',
            'name'=> 'Jhon',
            'email'=> 'jhon@gmail.com',
            'phone'=> '21212121',
           ]);
           AllRequest::create([
            'prop_id'=> '1',
            'agent_name'=> 'Alfonzo pacheco',
            'user_id'=> '1',
            'name'=> 'Jairo',
            'email'=> 'alfonso@gmail.com',
            'phone'=> '232323232',
           ]);
    }
}
