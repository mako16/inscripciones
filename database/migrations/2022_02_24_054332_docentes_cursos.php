<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DocentesCursos extends Migration
{
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('docentes_cursos', function (Blueprint $table) {
            $table->integer('id_curso');
            $table->integer('id_docente');
            $table->foreign('id_curso')->references('id')->on('cursos');
            $table->foreign('id_docente')->references('id')->on('docentes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('docentes_cursos');
    }
}
