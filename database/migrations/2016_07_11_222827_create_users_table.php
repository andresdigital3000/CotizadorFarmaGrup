<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('cod_perfil')->unsigned();
            $table->foreign('cod_perfil')->references('id')->on('perfiles');
            $table->integer('cod_dependencia')->unsigned();
            $table->foreign('cod_dependencia')->references('id')->on('dependencias');

            $table->string('nombre');
            $table->string('extension');
            $table->string('cargo');
            $table->string('email')->unique();
            $table->string('name')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
