<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pedido;
use Faker\Generator as Faker;

$factory->define(Pedido::class, function (Faker $faker) {
    return [
        'nombreDestinatario' => $this->faker->name(),
        'direccion' => $this->faker->address(),
        'ciudad' => $this->faker->city(),
        'entidadFederativa' => $this->faker->state(),
        'pais' => $faker->country(),
        'fechaPedido' => $faker->date(),
        'fechaEnvio' => $faker->date(),
        'cliente_id' => factory(App\Models\Cliente::class),
        'metodoPago_id' => factory(App\Models\MetodoPago::class),
        'envio_id' => factory(App\Models\Envio::class),
    ];
});
