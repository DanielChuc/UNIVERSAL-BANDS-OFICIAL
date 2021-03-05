<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEfectivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('efectivos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('cliente')->nullable();
            $table->string('tipoMoneda')->nullable();
            $table->float('monto')->nullable();
            $table->float('cambio')->nullable();
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
        Schema::drop('efectivos');
    }
}
