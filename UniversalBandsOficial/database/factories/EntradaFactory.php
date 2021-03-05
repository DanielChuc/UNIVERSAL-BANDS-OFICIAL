<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Illuminate\Support\Str;
use App\Models\LogEntrada;
use App\Models\Evento;
use App\Models\Cliente;

use Faker\Generator as Faker;

$factory->define(LogEntrada::class, function (Faker $faker) {
    return [
        'cliente_id'=>factory(App\Models\Cliente::class)->create()->id, 
        'evento_id'=>factory(App\Models\Evento::class)->create()->id, 
        'horaEntrada'=>$this->faker->time(), 
        'fechaEntrada'=>$this->faker->date(), 
        'codigoDeEntrada'=>Str::random(10)
    ];
});
