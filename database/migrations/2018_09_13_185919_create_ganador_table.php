<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGanadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ganador', function (Blueprint $table) {
            $table->increments('id_ganador')->unsigned();
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->integer('id_premio')->unsigned();
            $table->foreign('id_premio')->references('id_premio')->on('premio')->onDelete('cascade');
            $table->integer('id_semana')->unsigned();
            $table->foreign('id_semana')->references('id_semana')->on('semanas')->onDelete('cascade');
            $table->string('dia');
            $table->string('num_tickets');
            $table->string('monto_total');
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
        Schema::dropIfExists('ganador');
    }
}
