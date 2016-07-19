<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormDatoCompsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form__dato__comps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_formula')->unsigned();
            $table->foreign('cod_formula')->references('id')->on('formulas');
            $table->integer('cod_dato_compuesto')->unsigned();
            $table->foreign('cod_dato_compuesto')->references('id')->on('dato__compuestos');
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
        Schema::drop('form__dato__comps');
    }
}
