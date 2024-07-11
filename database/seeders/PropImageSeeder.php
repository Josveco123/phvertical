<?php

namespace Database\Seeders;

use App\Models\Prop\PropImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datosId = [1, 1, 1, 2, 2, 2, 3, 3, 3, 4, 4, 5, 5, 5];
        $datosi = [
            '168864343644.jpg', '16886434368.jpg', '16886434372.jpg',
            '16886478631.jpg', '168864786335.jpg', '168864786348.jpg',
            '168864829129.jpg', '16886482913.jpg', '168864829248.jpg',
            '172066667431.jpg', '172066668713.jpg',
            '172065583621.jpg', '172065584623.jpg','172065585637.jpg'
        ];

        for ($i = 0; $i < count($datosId); $i++) {
            PropImage::create([
                'image' => $datosi[$i],
                'prop_id' => $datosId[$i],
            ]);
        }
    }
}
