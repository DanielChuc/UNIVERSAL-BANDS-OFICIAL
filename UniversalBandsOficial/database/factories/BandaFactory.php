<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Banda;
use Faker\Generator as Faker;

$factory->define(Banda::class, function (Faker $faker) {
    return [
        'cliente_id' => factory(App\Models\Cliente::class),
        'codigo' => $faker->isbn13(),
    ];
});
