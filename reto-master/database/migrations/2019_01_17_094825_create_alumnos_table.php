<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('idAlumno');
            $table->string('nombreapellidos');
            $table->string('dni');
            $table->string('email');
            $table->string('password');
            $table->boolean('baja')->default(false);
            $table->string('foto');
            $table->integer('idCurriculum')->unsigned();
            $table->foreign('idCurriculum')->references('idCurriculum')->on('curriculums');
            $table->integer('idCurso')->unsigned();
            $table->foreign('idCurso')->references('idCurso')->on('cursos');
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
        Schema::dropIfExists('alumnos');
    }
}
