<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTarjetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarjetas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('numeroTarjeta')->nullable();
            $table->string('nombre')->nullable();
            $table->date('expira')->nullable();
            $table->integer('cvv')->nullable();
            $table->float('monto')->nullable();
            $table->integer('metodoPago_id')->unsigned();
            $table->foreign('metodoPago_id')->references('id')->on('metodo_Pagos')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tarjetas');
    }
}
