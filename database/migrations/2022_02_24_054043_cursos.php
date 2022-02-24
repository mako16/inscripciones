<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cursos extends Migration
{
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->dateTime('fecha_alta');
            $table->dateTime('fecha_baja');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cursos');
    }
}
