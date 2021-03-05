<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Efectivo;
use Faker\Generator as Faker;

$factory->define(Efectivo::class, function (Faker $faker) {
    return [
        'cliente' => $faker->name(),
        'tipoMoneda' => $faker->randomElement(['Peso mexicano', 'Boliviano', 'Peso chileno', 'Dólar', 'Sol', 'Peso argentino']),
        'monto' => $faker->randomFloat($maxDecimals = 2, $min = 3, $max = 1000),
        'cambio' => $faker->randomFloat($maxDecimals = 2, $min = 3, $max = 500),
        'metodoPago_id' => factory(App\Models\MetodoPago::class),
    ];
});
