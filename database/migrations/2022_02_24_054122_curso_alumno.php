<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CursoAlumno extends Migration
{
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('curso_alumno', function (Blueprint $table) {
            $table->integer('curso_id');
            $table->integer('alumno_id');
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->foreign('alumno_id')->references('id')->on('alumnos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('curso_alumno');
    }
}
