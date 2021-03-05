<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tarjetum;
use Faker\Generator as Faker;

$factory->define(Tarjetum::class, function (Faker $faker) {
    return [
        'numeroTarjeta' => $faker->creditCardNumber(),
        'nombre' => $faker->name(),
        'expira' => $faker->date(),
        'cvv' => random_int(100, 999),
        'monto' => $faker->randomFloat($maxDecimals = 2, $min = 3, $max = 1000),
        'metodoPago_id' => factory(App\Models\MetodoPago::class),
    ];
});
