<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CargoDocente extends Migration
{
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('cargo_docente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->integer('id_docente');
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
        Schema::drop('cargo_docente');
    }
}
