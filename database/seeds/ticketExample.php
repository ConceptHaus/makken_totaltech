<?php

use Illuminate\Database\Seeder;
use App\Book; use Faker\Factory as Faker;

class ticketExample extends Seeder
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
        $userid= DB::table('users')->pluck('id');
        $establecimientoid= DB::table('establecimiento')->pluck('id_establecimiento');
        for ($i=0; $i < 10; $i++) {
           \DB::table('tickets')->insert(array(
            'id_usuario' => $faker->randomElement($userid),
            'no_ticket' => str_random(10),
            'monto' => '10',
            'id_establecimiento' => $faker->randomElement($establecimientoid),
            'url' => str_random(5),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
          ));
        }
    }
}
