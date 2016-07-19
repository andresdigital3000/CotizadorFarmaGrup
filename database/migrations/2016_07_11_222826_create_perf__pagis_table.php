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

            $table->boolean('cli_modfcar');
            $table->boolean('cli_elmnar');
            $table->boolean('cli_consltar');
            $table->boolean('prov_crear');
            $table->boolean('prov_modfcar');
            $table->boolean('prov_elmnar');
            $table->boolean('prov_consltar');
            $table->boolean('prodadm_crear');
            $table->boolean('prodadm_modfcar');
            $table->boolean('prodadm_elmnar');
            $table->boolean('prodadm_consltar');
            $table->boolean('prodcons_crear');
            $table->boolean('prodcons_modfcar');
            $table->boolean('prodcons_elmnar');
            $table->boolean('prodcons_consltar');

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
