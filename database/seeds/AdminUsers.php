<?php

use Illuminate\Database\Seeder;

class AdminUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => '1',
                'nombre' => 'Nancy',
                'apellido' => 'Gomez',
                'correo' => 'nancy.gomez@makken.com.mx',
                'password' => bcrypt('makken2019'),
                'telefono' => '5555555555',
                'isAdmin' => '1',
            ],
            [
                'id' => '2',
                'nombre' => 'Mariana',
                'apellido' => 'Camacho',
                'correo' => 'mariana.camacho@makken.com.mx',
                'password' => bcrypt('makken2019'),
                'telefono' => '5555555555',
                'isAdmin' => '1',
            ],
        ]);
    }
}
