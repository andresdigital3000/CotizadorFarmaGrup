<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('cedla');

            $table->integer('cod_perfil')->unsigned();
            $table->foreign('cod_perfil')->references('cod_prfil')->on('perfiles');
            $table->integer('cod_dependencia')->unsigned();
            $table->foreign('cod_dependencia')->references('codigo')->on('dependencias');

            $table->string('nombre');
            $table->string('extension');
            $table->string('cargo');
            $table->string('email');
            $table->string('usuario');
            $table->string('clave');

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
        Schema::drop('empleados');
    }
}
