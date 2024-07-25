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
            '000011.jpg', '000012.jpg', '000013.jpg',
            '000021.jpg', '000022.jpg', '000023.jpg',
            '000031.jpg', '000032.jpg', '000033.jpg',
            '000041.jpg', '000042.jpg',
            '000051.jpg', '000052.jpg','000053.jpg'
        ];

        for ($i = 0; $i < count($datosId); $i++) {
            PropImage::create([
                'image' => $datosi[$i],
                'prop_id' => $datosId[$i],
            ]);
        }
    }
}
