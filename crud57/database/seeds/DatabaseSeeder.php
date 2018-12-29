<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         DB::table('books')->insert([
               'title' => 'De la Tierra a la Luna',
               'descripcion' => 'Un intrépido proyecto aviva los corazones de los miembros del Gun-Club. Se trata de enviar a la Luna un proyectil que, auxiliado por el monstruoso cañón Columbiad, hará la función de una auténtica nave espacial para hacer realidad en el siglo XIX un viejo sueño: atravesar el espacio y descubrir un mundo lunar hasta entonces en penumbras.',
               'created_at' => now(),
               'updated_at' => now()
         ]);

         DB::table('books')->insert([
               'title' => 'Don Quijote de la Mancha',
               'descripcion' => 'Don Quijote de la Manchaa​ es una novela escrita por el español Miguel de Cervantes Saavedra. Publicada su primera parte con el título de El ingenioso hidalgo don Quijote de la Mancha a comienzos de 1605, es la obra más destacada de la literatura española y una de las principales de la literatura universal.1​2​ En 1615 apareció su continuación con el título de Segunda parte del ingenioso caballero don Quijote de la Mancha. ',
               'created_at' => now(),
               'updated_at' => now()
         ]);

         DB::table('books')->insert([
               'title' => 'Cien años de soledad',
               'descripcion' => 'El libro se compone de 20 capítulos no titulados, en los cuales se narra una historia con una estructura cíclica temporal, puesto que los acontecimientos del pueblo y de la familia Buendía, así como los nombres de los personajes, se repiten una y otra vez, fusionando la fantasía con la realidad. En los tres primeros capítulos se narra el éxodo de un grupo de familias y el establecimiento del pueblo de Macondo, desde el capítulo 4 hasta el 16 se trata el desarrollo económico, político y social del pueblo y los últimos cuatro capítulos narran su decadencia.',
               'created_at' => now(),
               'updated_at' => now()
         ]);

         DB::table('books')->insert([
               'title' => 'Las aventuras de Tom Sawyer',
               'descripcion' => 'Las aventuras de Tom Sawyer es una novela del autor estadounidense Mark Twain publicada en 1876,1​2​ actualmente considerada una obra maestra de la literatura. Relata las aventuras de la infancia de Tom Sawyer, un niño que crece durante el antebellum de la Guerra de Secesión en «St. Petersburg», una población de la costa del río Mississipi inspirada en Hannibal, donde creció el autor.',
               'created_at' => now(),
               'updated_at' => now()
         ]);

         DB::table('books')->insert([
               'title' => 'El jugador',
               'descripcion' => 'La narración se desarrolla en primera persona desde el punto de vista de Alekséi Ivánovich, el tutor de una familia rusa que vive en una suite de un hotel de la ciudad de Roulettenbourg, situada en Alemania. El patriarca de la familia, el General, está en deuda con el francés De Grieux y ha hipotecado sus propiedades en Rusia, lo cual le alcanza para pagar sólo una pequeña cantidad del total de su deuda. Al enterarse de la enfermedad de su rica y anciana tía Antonida Vasílevna, a quien llama "la Abuela", el General envía toda una serie de telegramas a Moscú, esperando con ansia la noticia de su fallecimiento. Con la herencia de la anciana el General espera pagar sus deudas y conseguir la mano de Madamoiselle Blanche De Cominges.',
               'created_at' => now(),
               'updated_at' => now()
         ]);

         DB::table('books')->insert([
               'title' => 'La metamorfosis',
               'descripcion' => 'Gregorio es el protagonista de la historia, tiene unos 23 años. Trabaja como viajante de comercio para mantener a su hermana y a sus padres. Se despierta una mañana como un monstruoso insecto. Tras la metamorfosis, Gregorio se encuentra incapacitado para trabajar, y esto obligará a su padre, a su madre y a su hermana, a trabajar para sustentarse. Pasa la mayor parte del tiempo en su habitación y es testigo del abandono y el desdén de parte de su familia, que crece poco a poco. A veces sale de su habitación para recorrer la casa en secreto.',
               'created_at' => now(),
               'updated_at' => now()
         ]);

         DB::table('books')->insert([
               'title' => 'La Divina comedia',
               'descripcion' => 'Este poema se ordena en función del simbolismo del número tres, que evoca la Trinidad Sagrada, el Padre, el Hijo y Espíritu Santo, el equilibrio y la estabilidad, y el triángulo, las tres proposiciones que componen el silogismo, se sumaba al cuatro, que representaba los cuatro elementos: Tierra, aire, fuego y agua, dando como resultado el número siete, como siete son los pecados capitales. Finalmente, el Infierno está dividido en nueve círculos, el Purgatorio en siete y el Paraíso queda formado por nueve esferas que giran como los planetas en torno al sol.',
               'created_at' => now(),
               'updated_at' => now()
         ]);






        
         
    }
}
