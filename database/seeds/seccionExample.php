<?php

use Illuminate\Database\Seeder;
use App\Book; use Faker\Factory as Faker;

class seccionExample extends Seeder
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

        for ($i=0; $i < 10; $i++) {
           \DB::table('seccion')->insert(array(
            'nombre' => 'titulo seccion',
            'clase' => 'clase seccion',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
          ));
        }
    }
}