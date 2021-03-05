<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\DetallePedido;
use Faker\Generator as Faker;

$factory->define(DetallePedido::class, function (Faker $faker) {
    return [
        'estadoPedido'=>rand(0, 1),
         'descripcion'=> $faker->text(),
         'cantidad'=>$faker->randomDigit(),
         'fecha'=> $faker->date(),
         'producto_id'=>factory(App\Models\Producto::class),
         'pedido_id'=> factory(App\Models\Pedido::class)
    ];
});
