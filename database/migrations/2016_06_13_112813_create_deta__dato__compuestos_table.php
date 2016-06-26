<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetaDatoCompuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deta__dato__compuestos', function (Blueprint $table) {
            $table->increments('cod_deta_dato_compuesto');
            $table->integer('cod_dato_compuesto')->unsigned();
            $table->foreign('cod_dato_compuesto')->references('cod_dato_compuesto')->on('dato__compuestos');
            $table->integer('cod_dato_basico')->unsigned();
            $table->foreign('cod_dato_basico')->references('cod_dato_basico')->on('dato__basicos');
            $table->string('operacion');
            $table->integer('orden');

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
        Schema::drop('deta__dato__compuestos');
    }
}
