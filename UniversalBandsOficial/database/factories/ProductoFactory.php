<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Producto;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombre' => Str::random(10),
        'precio' => rand(200, 500),
        'descripcion' => $faker->text(),
        'cantidad' => $faker->randomDigit(),
        'categoriap_id'=>factory(App\Models\Categoriap::class), 
        'proveedor_id'=>factory(App\Models\Proveedor::class)
    ];
});
