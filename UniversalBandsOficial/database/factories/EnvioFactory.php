<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Envio;
use Faker\Generator as Faker;

$factory->define(Envio::class, function (Faker $faker) {
    return [
        'cliente' => $faker->name(),
        'direccion' => $faker->address(),
        'pais' => $faker->country(),
        'ciudad' => $faker->city(),
        'codigoPostal' => $faker->postcode(),
        'metodoPago_id' => factory(App\Models\MetodoPago::class),
    ];
});
