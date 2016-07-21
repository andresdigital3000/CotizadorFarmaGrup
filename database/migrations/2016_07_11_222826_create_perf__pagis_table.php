<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfPagisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perf__pagis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_perf')->unsigned();
            $table->foreign('cod_perf')->references('id')->on('perfiles');
            $table->integer('cod_pagina')->unsigned();
            $table->foreign('cod_pagina')->references('id')->on('paginas');

            $table->boolean('crear');
            $table->boolean('eliminar');
            $table->boolean('actualizar');

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
        Schema::drop('perf__pagis');
    }
}
