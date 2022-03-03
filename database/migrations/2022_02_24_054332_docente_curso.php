<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class DocenteCurso extends Migration
{
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('docente_curso', function (Blueprint $table) {
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
        Schema::drop('docente_curso');
    }
}
