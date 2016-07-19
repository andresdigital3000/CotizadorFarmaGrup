<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nit');
            $table->string('razonsocial');
            $table->string('ubccion');
            $table->string('ciudad');
            $table->string('pais');
            $table->string('telfno');
            $table->string('fax');
            $table->date('fechaIngrso');
            $table->string('caldad_contcto');
            $table->string('caldad_tels');
            $table->string('caldad_email');
            $table->string('desrrllo_contcto');
            $table->string('desrrllo_tels');
            $table->string('desrrllo_email');
            $table->string('prodccion_contcto');
            $table->string('prodccion_tels');
            $table->string('prodccion_email');
            $table->string('planta_contcto');
            $table->string('planta_tels');
            $table->string('planta_email');
            $table->string('compras_contcto');
            $table->string('compras_tels');
            $table->string('compras_email');
            $table->string('estbldad_contcto');
            $table->string('estbldad_tels');
            $table->string('estbldad_email');
            $table->string('mantnmiento_contcto');
            $table->string('mantnmiento_tels');
            $table->string('mantnmiento_email');
            $table->string('tesrria_contcto');
            $table->string('tesrria_tels');
            $table->string('tesrria_email');
            $table->string('otro_contcto');
            $table->string('otro_tels');
            $table->string('otro_email');
            $table->string('reprsntntelegal');
            $table->integer('respnsbleamfar')->unsigned();
            $table->foreign('respnsbleamfar')->references('id')->on('users');
            $table->boolean('ventas');
            $table->boolean('mantnmiento');
            $table->boolean('potencial');

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
        Schema::drop('clientes');
    }
}
