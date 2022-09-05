<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PuebloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pueblos')->insert([
        	[
	        	'nombre'=>'zoquitlan',
                        'completo'=>'San Pablo Zoquitlan',
                        'descripcion'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Unde, mollitia! Alias maxime iure necessitatibus soluta minima neque quisquam molestiae
                         perspiciatis. Optio adipisci, rem veniam nemo quos quae eius odio vitae?',
                        'fiesta'=>'29/06/2022-15/06/2022',
                        'latitud'=>'18.335522',
                        'longitud'=>'-97.017216',
                        'clima'=>'calido humedo',
                        'img'=>'zoq.jpg',
                        'historia'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Unde, mollitia! Alias maxime',
                        'ubicacionText'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde, mollitia! Alias maxime',
                        'poblacion'=>'4500',

        	],
                [
	        	'nombre'=>'coyomeapan',
                        'completo'=>'santa maria coyomeapan',
                        'descripcion'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Unde, mollitia! Alias maxime iure necessitatibus soluta minima neque quisquam molestiae
                         perspiciatis. Optio adipisci, rem veniam nemo quos quae eius odio vitae?',
                        'fiesta'=>'29/06/2022-15/06/2022',
                        'latitud'=>'18.335522',
                        'longitud'=>'-97.017216',
                        'clima'=>'calido humedo',
                        'img'=>'zoq.jpg',
                        'historia'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Unde, mollitia! Alias maxime',
                        'ubicacionText'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit.Unde, mollitia! Alias maxime',
                        'poblacion'=>'4500',

        	],
                [
	        	'nombre'=>'chilac',
                        'completo'=>'santa gabriel chilac',
                        'descripcion'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Unde, mollitia! Alias maxime iure necessitatibus soluta minima neque quisquam molestiae
                         perspiciatis. Optio adipisci, rem veniam nemo quos quae eius odio vitae?',
                        'fiesta'=>'29/06/2022-15/06/2022',
                        'latitud'=>'18.335522',
                        'longitud'=>'-97.017216',
                        'clima'=>'calido humedo',
                        'img'=>'zoq.jpg',
                        'historia'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Unde, mollitia! Alias maxime',
                        'ubicacionText'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit.Unde, mollitia! Alias maxime',
                        'poblacion'=>'4500',

        	],

        ]);
    }
}
