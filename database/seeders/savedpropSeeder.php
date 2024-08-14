<?php

namespace Database\Seeders;

use App\Models\Prop\SavedProp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class savedpropSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SavedProp::create([
            'prop_id'=> '1',
            'user_id'=> '1',
            'title'=> 'FLORENCIA ST NORTE',
            'image'=> 'hero_bg_2.jpg',
            'location'=> 'Calle pricipal Casa 1010\n',
            'price'=> '200,000,000',
            'type'=> 'Rentar',
           ]);
           SavedProp::create([
            'prop_id'=> '2',
            'user_id'=> '1',
            'title'=> 'LOS ALAMOS SUR 127 ',
            'image'=> 'hero_bg_3.jpg',
            'location'=> 'Clle 76 Sur entre Karreras 7 y 8 Altamar\n',
            'price'=> '245,000,000',
            'type'=> 'Vender',
           ]);
           SavedProp::create([
            'prop_id'=> '5',
            'user_id'=> '1',
            'title'=> 'VEREDA SAN MIGUEL 1',
            'image'=> 'hero_bg_5.jpg',
            'location'=> 'Vereda san miguel K2',
            'price'=> '20,000,000',
            'type'=> 'Rentar',
             ]);
    }
}
