<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Categoriap;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Categoriap::class, function (Faker $faker) {
    return [
        'nombre'=>Str::random(10), 
        'descripcion'=>$this->faker->text()
    ];
});
