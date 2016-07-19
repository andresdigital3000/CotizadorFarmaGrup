<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormulaProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formula__proveedors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codgo_prov');
            $table->foreign('codgo_prov')->references('id')->on('proveedors');
            $table->integer('cod_form_dato_comp')->unsigned();
            $table->foreign('cod_form_dato_comp')->references('id')->on('form__dato__comps');
            $table->integer('cod_dato_compuesto')->unsigned();
            $table->foreign('cod_dato_compuesto')->references('id')->on('dato__compuestos');
            $table->integer('cod_deta_dato_compuesto')->unsigned();
            $table->foreign('cod_deta_dato_compuesto')->references('id')->on('deta__dato__compuestos');
            $table->integer('cod_dato_basico')->unsigned();
            $table->foreign('cod_dato_basico')->references('id')->on('dato__basicos');
            $table->decimal('valor_numerico', 12, 4);
            $table->string('valor_texto');

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
        Schema::drop('formula__proveedors');
    }
}
