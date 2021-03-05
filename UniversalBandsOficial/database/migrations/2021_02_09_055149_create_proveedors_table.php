<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->increments('id');
            $table->timestamps();
            $table->string('nombreCompania')->nullable();
            $table->string('nombreContacto')->nullable();
            $table->string('cargoContacto')->nullable();
            $table->string('paginaWeb')->nullable();
            $table->string('email')->nullable();
            $table->string('direccion')->nullable();
            $table->string('pais')->nullable();
            $table->string('entidadFederativa')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('codigoPostal')->nullable();
            $table->string('telefono')->nullable();
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
