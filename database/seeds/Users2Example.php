<?php

use Illuminate\Database\Seeder;
use App\Book; use Faker\Factory as Faker;

class Users2Example extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
      $faker = Faker::create();
      for ($i=0; $i < 10; $i++) {
         \DB::table('users')->insert(array(
          'nombre' => $faker->name,
          'apellido' => $faker->name,
          'correo' => $faker->unique()->safeEmail,
          'password' => str_random(10),
          'telefono' => 5567907639,
          'isAdmin' => 0,
          'remember_token' => str_random(10),
          'created_at'=>date('Y-m-d H:i:s'),
          'updated_at'=>date('Y-m-d H:i:s')
        ));
      }

    }
}
