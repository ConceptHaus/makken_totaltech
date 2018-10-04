<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id_ticket')->unsigned();
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->string('no_ticket')->unique();
            $table->string('monto');
            $table->integer('id_establecimiento')->unsigned();
            $table->foreign('id_establecimiento')->references('id_establecimiento')->on('establecimiento')->onDelete('cascade');
            $table->string('otro_establecimiento')->nullable();
            $table->string('url');
            $table->boolean('registro_admin');
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
        Schema::dropIfExists('tickets');
    }
}
