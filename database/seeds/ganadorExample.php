<?php

use Illuminate\Database\Seeder;
use App\Book; use Faker\Factory as Faker;

class ganadorExample extends Seeder
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
        $ticketid= DB::table('tickets')->pluck('id_ticket');
        $premioid= DB::table('premio')->pluck('id_premio');
        $semanaid= DB::table('semanas')->pluck('id_semana');

        for ($i=0; $i < 10; $i++) {
           \DB::table('ganador')->insert(array(
            'id_usuario' => $faker->randomElement($userid),
            'id_ticket' => $faker->randomElement($ticketid),
            'id_premio' => $faker->randomElement($premioid),
            'id_semana' => $faker->randomElement($semanaid),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
          ));
        }
    }
}
