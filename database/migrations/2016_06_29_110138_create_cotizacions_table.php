<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCotizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizacions', function (Blueprint $table) {
            $table->string('ofrta_no');
            $table->primary('ofrta_no');

            $table->integer('codgo_cli')->unsigned();
            $table->foreign('codgo_cli')->references('codgo')->on('clientes');
            $table->string('codgo_prov');
            $table->foreign('codgo_prov')->references('codgo')->on('proveedors');
            $table->date('fecha');
            $table->string('refrncia');
            $table->foreign('refrncia')->references('refrncia')->on('productos');
            $table->string('respnsble');
            $table->string('venta');
            $table->date('venta_fecha');

            $table->integer('cod_tipo_coti')->unsigned();
            $table->foreign('cod_tipo_coti')->references('cod_tipo_coti')->on('tipo__cotizacions');
            $table->integer('cod_tipo_serv')->unsigned();
            $table->foreign('cod_tipo_serv')->references('cod_tipo_serv')->on('tipo__servicios');

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
        Schema::drop('cotizacions');
    }
}
