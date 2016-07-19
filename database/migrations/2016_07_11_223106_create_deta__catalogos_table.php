<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetaCatalogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deta__catalogos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_catalogo')->unsigned();
            $table->foreign('cod_catalogo')->references('id')->on('catalogos');
            $table->integer('limite_inferior');
            $table->integer('limite_superior');
            $table->decimal('valor', 3, 2);
            $table->integer('base');

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
        Schema::drop('deta__catalogos');
    }
}
