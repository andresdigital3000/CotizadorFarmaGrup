<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->string('refrncia');
            $table->primary('refrncia');

            $table->string('descrpcion');
            $table->string('codgo_prov');
            $table->foreign('codgo_prov')->references('codgo')->on('proveedors');
            $table->string('clasfccion');
            $table->string('plantlla_vtaplaza');
            $table->string('plantlla_vtaimpprove');
            $table->string('plantlla_calbrcion');
            $table->string('plantlla_valdcion');
            $table->string('plantlla_corrctvo');
            $table->string('plantlla_mantnmiento');
            $table->string('fotos');
            $table->integer('precio_dolar');
            $table->integer('precio_euro');

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
        Schema::drop('productos');
    }
}
