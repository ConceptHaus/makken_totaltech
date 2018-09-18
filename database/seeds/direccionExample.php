<?php

use Illuminate\Database\Seeder;
use App\Book; use Faker\Factory as Faker;

class direccionExample extends Seeder
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
        $usuarioId= DB::table('users')->pluck('id');

        for ($i=0; $i < 10; $i++) {
           \DB::table('direccion')->insert(array(
            'id_usuario' => $faker->randomElement($usuarioId),
            'cp' => '08090',
            'estado' => 'CDMX',
            'municipio' => 'Benito Juarez',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
          ));
        }
    }
}
