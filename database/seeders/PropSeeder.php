<?php

namespace Database\Seeders;

use App\Models\Prop\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Property::create([
            'title' => 'FLORENCIA ST NORTE ',
            'price' => '200,000,000',
            'image' => 'hero_bg_1.jpg',
            'beds' => '2',
            'baths' => '3',
            'sq_ft' => '7,000',
            'home_type' => 'Condominio',
            'year_built' => '2020',
            'price_sqft' => '520',
            'more_info' => 'Monotonectally revolutionize open-source core competencies and market-driven resources. Dramatically myocardinate client-centered human capital and highly efficient total linkage. Efficiently re-engineer just in time markets and user friendly \r\n\r\nMonotonectally revolutionize open-source core competencies and market-driven resources. Dramatically myocardinate client-centered human capital and highly efficient total linkage. Efficiently re-engineer just in time markets and user friendly',
            'location' => ' Calle pricipal Casa 1010\n',
            'agent_name' => 'Alcira Perez',
            'type' => 'Comprar',
            'city' => 'Sincelejo',
        ]);
        Property::create([
            'title' => 'LOS ALAMOS SUR 127 ',
            'price' => '245,000,000',
            'image' => 'hero_bg_2.jpg',
            'beds' => '3',
            'baths' => '3',
            'sq_ft' => '7,000',
            'home_type' => 'Condominio',
            'year_built' => '2018',
            'price_sqft' => '530',
            'more_info' => 'Professionally formulate leveraged vortals without alternative expertise. Enthusiastically deploy interdependent results whereas front-end web services. Intrinsicly fabricate intermandated source\r\n\r\nProfessionally formulate leveraged vortals without alternative expertise. Enthusiastically deploy interdependent results whereas front-end web services. Intrinsicly fabricate intermandated source',
            'location' => 'Clle 76 Sur entre Karreras 7 y 8 Altamar\n',
            'agent_name' => 'Luis rodriguez',
            'type' => 'Comprar',
            'city' => 'Sincelejo',
        ]);
        Property::create([
            'title' => 'VENECIA ENTRADA FLORENCIA ',
            'price' => '1,000,000,000',
            'image' => 'hero_bg_3.jpg',
            'beds' => '3',
            'baths' => '5',
            'sq_ft' => '9,340',
            'home_type' => 'Comercial',
            'year_built' => '2019',
            'price_sqft' => '500',
            'more_info' => 'Dramatically emDramatically empower inexpensive human capital before excellent services. Objectively leverage existing interactive e-services with optimal Dramatically empower inexpensive human capital before excellent services. Objectively leverage existing interactive e-services with optimal power inexpensive human capital before excellent services. Objectively leverage existing interactive e-services with optimal',
            'location' => 'Avenida las acacias Norte\n',
            'agent_name' => 'Luis rodriguez',
            'type' => 'Rentar',
            'city' => 'Sincelejo',
        ]);
        Property::create([
            'title' => 'LAS PRIMAVERAS DE PALMIRA ',
            'price' => '1,000,000,000',
            'image' => 'hero_bg_4.jpg',
            'beds' => '0',
            'baths' => '0',
            'sq_ft' => '10,000',
            'home_type' => 'Terrenos',
            'year_built' => '0000',
            'price_sqft' => '200',
            'more_info' => 'Capital before excellent services. Objectively leverage existing interactive e-services with optimal power inexpensive human capital before excellent services. Objectively leverage existing interactive e-services with optimal',
            'location' => 'Salida la pamira las Flores\n',
            'agent_name' => 'Luis Salazar',
            'type' => 'Comprar',
            'city' => 'Sincelejo',
        ]);
        Property::create([
            'title' => 'VEREDA SAN MIGUEL 1',
            'price' => '20,000,000',
            'image' => 'hero_bg_5.jpg',
            'beds' => '6',
            'baths' => '6',
            'sq_ft' => '2,000',
            'home_type' => 'Condominio',
            'year_built' => '2010',
            'price_sqft' => '20000',
            'more_info' => 'Esta residencia cuenta con todos los servisios publicos, ademas de disponer de garaje dobre, asi como piscina y cancha de tenir, ademas esta apta para adecuacion de varias divisiones en el primer piso que le servirian para crear mas oficinas',
            'location' => 'Segunda calle barrio for frente al parque\n',
            'agent_name' => 'Alfonzo pacheco',
            'type' => 'Rentar',
            'city' => 'Sincelejo',
        ]);
    }
}
