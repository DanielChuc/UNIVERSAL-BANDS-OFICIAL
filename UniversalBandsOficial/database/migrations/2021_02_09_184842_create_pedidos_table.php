<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombreDestinatario')->nullable();
            $table->string('direccion')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('entidadFederativa')->nullable();
            $table->string('pais')->nullable();
            $table->date('fechaPedido')->nullable();
            $table->date('fechaEnvio')->nullable();
            $table->integer('cliente_id')->unsigned();
            $table->integer('metodoPago_id')->unsigned();
            $table->integer('envio_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('metodoPago_id')->references('id')->on('metodo_Pagos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('envio_id')->references('id')->on('envios')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pedidos');
    }
}
