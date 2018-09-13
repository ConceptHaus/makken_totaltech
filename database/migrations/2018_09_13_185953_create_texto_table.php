<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('texto', function (Blueprint $table) {
            $table->increments('id_texto')->unsigned();
            $table->increments('id_seccion')->unsigned();
            $table->foreign('id_seccion')->references('id_seccion')->on('seccion')->onDelete('cascade');
            $table->string('contenido');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('texto');
    }
}
