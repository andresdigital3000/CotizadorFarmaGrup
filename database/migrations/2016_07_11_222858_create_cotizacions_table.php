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
            $table->string('id');
            $table->primary('id');

            $table->integer('codgo_cli')->unsigned();
            $table->foreign('codgo_cli')->references('id')->on('clientes');
            $table->string('codgo_prov');
            $table->foreign('codgo_prov')->references('id')->on('proveedors');
            $table->date('fecha');
            $table->string('refrncia');
            $table->foreign('refrncia')->references('id')->on('productos');
            $table->string('respnsble');
            $table->string('venta');
            $table->date('venta_fecha');

            $table->integer('cod_tipo_coti')->unsigned();
            $table->foreign('cod_tipo_coti')->references('id')->on('tipo__cotizacions');
            $table->integer('cod_tipo_serv')->unsigned();
            $table->foreign('cod_tipo_serv')->references('id')->on('tipo__servicios');

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
