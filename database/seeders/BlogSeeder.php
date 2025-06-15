<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'imagen' => 'nomante.jpg',
            'titulo' => 'NOMANTE-MIEL DE ABEJAS',
            'descripcion' => 'La miel de abeja ha sido empleada durante miles de años por diferentes culturas, por su valor nutritivo y medicinal. Lo mismo se ha usado para conservar otros alimentos que como edulcorante, como origen de bebidas alcohólicas o con fines medicinales.1,2 Se entiende por miel la sustancia dulce natural producida por abejas Apis mellifera a partir del néctar de las plantas, o de secreciones vivas de estas, o de secreciones de insectos succionadores de plantas que quedan sobre sus partes vivas, y que las abejas recogen, transforman y combinan con sustancias específicas propias: depositan, deshidratan, almacenan y dejan en el panal para que madure y añeje.

            Las abejas productoras de miel aparecieron en la tierra desde hace 600 000 000 de años. Inicialmente, vivían en sus cuevas con la reproducción de condiciones favorables que proporcionó el hombre para optimizar la obtención de los productos de la colmena. La apicultura sufrió una gran transformación.',
            'bibliografia' => 'Ref. Bibliográfica:Ajibola A, Chamunorwa JP, Erlwanger KH. Nutraceutical values of natural honey and its contribution to human health and wealth. Nutr Metab (Lond). 2012 Jun 20;9:61. Citado en PubMed; PMID: 22716101. 157 Palabra 193 con Bibliografía.',
        ]);

        Blog::create([
            'imagen' => 'miel.png',
            'titulo' => 'ARTRIXIN-ALCANFOR',
            'descripcion' => 'El alcanfor es una sustancia semisólida cristalina y cerosa con un fuerte y penetrante olor acre. Es un terpenoide con la fórmula química C10H16O. Se encuentra en la madera del árbol Alcanforero Cinnamomum camphora, un enorme árbol perenne originario de Asia (particularmente de Borneo, de donde toma su nombre alterno "Árbol de Borneo"), y en algunos otros árboles de la familia de las lauraceae. Puede también ser sintetizado del aceite de trementina. Se usa como bálsamo y con otros propósitos medicinales.
            La palabra alcanfor probablemente derive de la latinización del vocablo árabe al-Kafur que toma a su vez del malayo Kapur Barus que significa "Gis de Barus". De hecho comerciantes malayos a quienes los hindues les compraban el alcanfor lo llamaban Kapur, "Gis" (por su color blanco). Barus era el puerto situado en la costa oeste de la isla indonesia de Sumatra, de donde los comerciantes lo traían. En el idioma sánscrito, la palabra Karpooram es usada para llamar el alcanfor.',
            'bibliografia' => 'Ref Bibliográfica: El contenido está disponible bajo los términos de la Licencia de GNU Free Documentation License.
            168 Palabras 178 con bibliografía',
        ]);

        Blog::create([
            'imagen' => 'aceite.jpg',
            'titulo' => 'ACEITE DE ALMENDRAS',
            'descripcion' => 'El árbol de Lecythis minor DC, se conoce en la costa norte de Colombia con los nombres comunes de olleto y olla de mono; crece en zonas tropicales, puede alcanzar hasta 25 m de altura, su corteza es de color gris cubierto de estrías, el fruto es leñoso con forma de urna unida a una tapa que suelta en la madurez, puede contener de 10 a 16 semillas por fruto, las cuales tienen forma ovoide y color marrón ubicadas en un cuerpo carnoso; el tronco presenta excelentes condiciones para la extracción de madera y es usado en construcciones pesadas; el aceite extraído de las semillas es considerado popularmente como un agente hemostático (López y Montero, 2005). Existen alrededor de 27 especies del gènero lecythis reseñadas desde Nicaragua hasta Brasil, las más comunes son: Lecythis ampla Mier, elliptica, minor, ollaria, pisonis, usitata, zabucajo, prancei, serrata, lanceolata, chartacea, mesophyla, tuyrana, corrugata, entre otras.',
            'bibliografia' => 'Ref. Bibliografia: Información Tecnológica Vol. 24(1), 59-68 (2013) doi: 10.4067/S0718-07642013000100008 Composición Química del Aceite de Almendras producidas por el Árbol Olleto Lafont 60 Información Tecnológica Vol. 24 Nº 1 2013
            175 palabras 205 con bibliografia',
        ]);
    }
}
