<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class CholloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chollos')->insert([
            'titulo' => 'Teléfono móvil + tablet',
            'descripcion' => 'Xiaomi 14 (12gb 512gb) + Xiaomi pad 6',
            'url' => 'https://www.chollometro.com/ofertas/xiaomi-14-12gb-512gb-xiaomi-pad-6-1243914',
            'categoria' => 'Electrónica',
            'puntuacion' => 296,
            'precio' => 1449,
            'precio_descuento' => 844.99,
            'disponible' => true
        ]);
        DB::table('chollos')->insert([
            'titulo' => 'Aspirador sin cables',
            'descripcion' => 'Aspirador Dyson v15 Detect Absolute',
            'url' => 'https://www.chollometro.com/ofertas/aspirador-dyson-v15-detect-absolute-1243879',
            'categoria' => 'Hogar',
            'puntuacion' => 699,
            'precio' => 799,
            'precio_descuento' => 548,
            'disponible' => true
        ]);
        DB::table('chollos')->insert([
            'titulo' => 'Smart TV 4K',
            'descripcion' => 'TV QNED Mini LED 86" (218,44 cm) LG 86QNED866RE, 4K UHD, Smart TV',
            'url' => 'https://www.chollometro.com/ofertas/lg-qned-miniled-4k-86-1243753',
            'categoria' => 'Electrónica',
            'puntuacion' => 239,
            'precio' => 2900,
            'precio_descuento' => 1063,
            'disponible' => false
        ]);
        DB::table('chollos')->insert([
            'titulo' => 'Pijama de mujer',
            'descripcion' => 'Pijama camisero manga corta 100% algodón Harry Potter',
            'url' => 'https://www.chollometro.com/ofertas/pijama-camisero-manga-corta-100-algodon-harry-potter-xs-s-m-l-xl-xxl-1243764',
            'categoria' => 'Moda',
            'puntuacion' => 373,
            'precio' => 34.99,
            'precio_descuento' => 8.99,
            'disponible' => true
        ]);
        DB::table('chollos')->insert([
            'titulo' => 'Cortaviento de running de hombre',
            'descripcion' => 'Chaqueta cortaviento',
            'url' => 'https://www.chollometro.com/ofertas/cortaviento-de-running-de-hombre-s-m-l-xl-1243738',
            'categoria' => 'Moda',
            'puntuacion' => 313,
            'precio' => 45.99,
            'precio_descuento' => 18.39,
            'disponible' => true
        ]);
        DB::table('chollos')->insert([
            'titulo' => 'Juego de sartenes',
            'descripcion' => 'Monix Copper - Set Juego Sartenes Copper, 18, 22 y 26 cm, 3 Piezas Antiadherentes',
            'url' => 'https://www.chollometro.com/ofertas/monix-copper-set-juego-sartenes-copper-18-22-y-26-cm-3-piezas-antiadherentes-1243583',
            'categoria' => 'Hogar',
            'puntuacion' => 373,
            'precio' => 70.95,
            'precio_descuento' => 33.17,
            'disponible' => true
        ]);
    }
}
