<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\MetodoPago;
use Faker\Generator as Faker;

$factory->define(MetodoPago::class, function (Faker $faker) {
    return [
        'ejemplo' => $this->faker->paragraph(),
    ];
});
