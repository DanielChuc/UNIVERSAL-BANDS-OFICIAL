<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\EventoPermitido;
use Faker\Generator as Faker;

$factory->define(EventoPermitido::class, function (Faker $faker) {
    return [
        'evento_id' => factory(App\Models\Evento::class),
        'banda_id' => factory(App\Models\Banda::class),
    ];
});
