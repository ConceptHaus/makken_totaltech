<?php

use Illuminate\Database\Seeder;
use App\Book; use Faker\Factory as Faker;

class textoExample extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        $seccionId= DB::table('seccion')->pluck('id_seccion');

        for ($i=0; $i < 10; $i++) {
           \DB::table('texto')->insert(array(
            'id_seccion' => $faker->randomElement($seccionId),
            'contenido' => 'contenido seccion',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
          ));
        }
    }
}
