<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatoBasicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dato__basicos', function (Blueprint $table) {
            $table->increments('cod_dato_basico');
            $table->integer('cod_tipo_dato')->unsigned();
            $table->foreign('cod_tipo_dato')->references('cod_tipo_dato')->on('tipo__datos');
            $table->integer('cod_catalogo');
            $table->string('dato_basico');
            $table->string('descripcion');

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
        Schema::drop('dato__basicos');
    }
}
