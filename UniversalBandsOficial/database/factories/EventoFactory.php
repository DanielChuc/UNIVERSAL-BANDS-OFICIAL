<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Evento;
use Faker\Generator as Faker;

$factory->define(Evento::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstName(),
        'direccion' => $faker->address(),
        'descripcion' => $faker->text(),
        'pais' => $faker->country(),
        'ciudad' => $faker->city(),
        'fechas' => $faker->date(),
        'capacidadLugares' => rand(200, 1000),
        'lugaresDisponibles' => rand(200, 1000),
        'precio' => $faker->randomFloat($maxDecimals = 2, $min = 3, $max = 1000),
        'categoria_id' => factory(App\Models\Categorium::class),
    ];
});
