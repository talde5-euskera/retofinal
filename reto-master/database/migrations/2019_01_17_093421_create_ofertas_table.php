<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->increments('idOferta');
            $table->string('titulo');
            $table->string('empresa');
            $table->string('localizacion');
            $table->string('sector');
            $table->string('descripcion');
            $table->string('funciones');
            $table->string('requisitos');
            $table->integer('idProfesor')->unsigned();
            $table->foreign('idProfesor')->references('idProfesor')->on('profesores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ofertas');
    }
}
