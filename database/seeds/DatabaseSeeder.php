<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call(UsersExample::class);
         $this->call(EstablecimientoExample::class);
         $this->call(PremioExample::class);

         $this->call(ticketExample::class);
         $this->call(ganadorExample::class);

         $this->call(seccionExample::class);
         $this->call(textoExample::class);

         $this->call(direccionExample::class);

    }
}
