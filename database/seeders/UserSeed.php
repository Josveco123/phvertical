<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     User::create([
        'name'=> 'Alcira',
        'email'=> 'alcira@alcira.com',
        'email_verified_at'=>now(),
        'razon_social'=>'Laboratorio del caribe sas',
        'whatsapp'=> '25252525',
        'ciudad'=> 'Sincelejo',
        'password'=>bcrypt('12345678'),
        'remember_token'=> Str::random(10),
     ])->assignRole('admin');

     User::create([
        'name'=> 'master',
        'email'=> 'master@master.com',
        'email_verified_at'=>now(),
        'razon_social'=>'Laboratorios del Caribe sas',
        'whatsapp'=> '25252525',
        'ciudad'=> 'Sincelejo',
        'password'=>bcrypt('12345678'),
        'remember_token'=> Str::random(10),
     ])->assignRole('master');

     User::create([
        'name'=> 'cliente',
        'email'=> 'cliente@cliente.com',
        'email_verified_at'=>now(),
        'razon_social'=>'mi empresa sas del cliente',
        'whatsapp'=> '5656565656',
        'ciudad'=> 'Monteria',
        'password'=>bcrypt('12345678'),
        'remember_token'=> Str::random(10),
     ])->assignRole('client');
    }
}
