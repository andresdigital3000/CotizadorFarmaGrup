<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->string('id');
            $table->primary('id');

            $table->string('nit');
            $table->string('razonsocial');
            $table->string('ubccion');
            $table->string('ciudad');
            $table->string('pais');
            $table->string('telfno');
            $table->string('fax');
            $table->string('email');
            $table->string('contcto');
            $table->string('nal_int');
            $table->string('bancarios_cc');
            $table->string('bancarios_swiftcode');
            $table->string('bancarios_refrnce');
            $table->string('bancarios_tt');
            $table->string('bancarios_estdo');
            $table->integer('moneda');

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
        Schema::drop('proveedors');
    }
}
