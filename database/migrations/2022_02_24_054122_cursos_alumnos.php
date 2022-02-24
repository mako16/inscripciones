<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CursosAlumnos extends Migration
{
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('cursos_alumnos', function (Blueprint $table) {
            $table->integer('id_curso');
            $table->integer('id_alumno');
            $table->foreign('id_alumno')->references('id')->on('alumnos');
            $table->foreign('id_curso')->references('id')->on('cursos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cursos_alumnos');
    }
}
