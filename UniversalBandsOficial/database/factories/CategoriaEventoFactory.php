<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Categorium;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Categorium::class, function (Faker $faker) {
    return [
        'nombre' => Str::random(10),
        'descripcion' => $faker->text(),
    ];
});
