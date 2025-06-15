<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Distribuidor;

class DistribuidorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $distribuidores = [
            [
                'nombre' => 'GLOBAL FARMACEUTICA',
                'telefono' => '232323232',
                'email' => 'drogas1@farmaceutica.com',
                'ciudad' => 'Barranquilla',
                'direccion' => 'avenida 14preubas san carlos',
                'web' => 'https://www.informacolombia.com/directorio-empresas/informacion-empresa/global-pharmaceutica-sa',
                'imagen' => 'global.png',
            ],
            [
                'nombre' => 'MULTIDROGAS',
                'telefono' => '232323232',
                'email' => 'drogas2@farmaceutica.com',
                'ciudad' => 'Barranquilla',
                'direccion' => 'avenida 14preubas san carlos',
                'web' => 'https://www.multidrogas.com/Pagina/',
                'imagen' => 'multidrogas.png',
            ],
            [
                'nombre' => 'MEDIMARCAS',
                'telefono' => '232323232',
                'email' => 'drogas3@farmaceutica.com',
                'ciudad' => 'Barranquilla',
                'direccion' => 'avenida 14preubas san carlos',
                'web' => 'https://www.facebook.com/MedimarcasSAS/',
                'imagen' => 'medimarcas.png',
            ],
            [
                'nombre' => 'ROMA',
                'telefono' => '232323232',
                'email' => 'drogas4@farmaceutica.com',
                'ciudad' => 'Barranquilla',
                'direccion' => 'avenida 14preubas san carlos',
                'web' => 'https://tingotango.com.co/5994484780383498885/',
                'imagen' => 'roma.png',
            ],
            [
                'nombre' => 'JN',
                'telefono' => '232323232',
                'email' => 'drogas5@farmaceutica.com',
                'ciudad' => 'Barranquilla',
                'direccion' => 'avenida 14preubas san carlos',
                'web' => 'https://www.laboratoriodelcaribe.com',
                'imagen' => 'jnfarmacia.png',
            ],
            [
                'nombre' => 'TORRES',
                'telefono' => '232323232',
                'email' => 'drogas6@farmaceutica.com',
                'ciudad' => 'Barranquilla',
                'direccion' => 'avenida 14preubas san carlos',
                'web' => 'https://www.farmaciatorres.com',
                'imagen' => 'torres.png',
            ],
            [
                'nombre' => 'ECONOMIA',
                'telefono' => '232323232',
                'email' => 'drogas7@farmaceutica.com',
                'ciudad' => 'Barranquilla',
                'direccion' => 'avenida 14preubas san carlos',
                'web' => 'https://www.droguerialaeconomia.com/empresa/sucursales',
                'imagen' => 'economia.png',
            ],
            [
                'nombre' => 'ETICOS',
                'telefono' => '232323232',
                'email' => 'drogas8@farmaceutica.com',
                'ciudad' => 'Barranquilla',
                'direccion' => 'avenida 14preubas san carlos',
                'web' => 'https://www.eticos.com/',
                'imagen' => 'eticos.png',
            ],
            [
                'nombre' => 'PARIS',
                'telefono' => '232323232',
                'email' => 'drogas9@farmaceutica.com',
                'ciudad' => 'Barranquilla',
                'direccion' => 'avenida 14preubas san carlos',
                'web' => 'https://www.drogueriasparis.com/index.php?view=contacto',
                'imagen' => 'paris.png',
            ],
            [
                'nombre' => 'FARMACOS',
                'telefono' => '232323232',
                'email' => 'drogas10@farmaceutica.com',
                'ciudad' => 'Barranquilla',
                'direccion' => 'avenida 14preubas san carlos',
                'web' => 'https://www.drogueriapharmaco.com/',
                'imagen' => 'farmacos.png',
            ],
            [
                'nombre' => 'ECOFARMA',
                'telefono' => '232323232',
                'email' => 'drogas11@farmaceutica.com',
                'ciudad' => 'Barranquilla',
                'direccion' => 'avenida 14preubas san carlos',
                'web' => 'https://www.laboratoriodelcaribe.com',
                'imagen' => 'ecofarma.png',
            ],
            [
                'nombre' => 'MASSALUD',
                'telefono' => '232323232',
                'email' => 'drogas12@farmaceutica.com',
                'ciudad' => 'Barranquilla',
                'direccion' => 'avenida 14preubas san carlos',
                'web' => 'https://directmap.org/sincelejo/10#google_vignette',
                'imagen' => 'massalud.png',
            ],
        ];

        foreach ($distribuidores as $distribuidor) {
            Distribuidor::updateOrCreate(
                ['email' => $distribuidor['email']], // Condición para encontrar el registro
                $distribuidor // Datos a insertar o actualizar
            );
        }
    }
}
