<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cliente;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'nombre'=> $faker->firstName(), 
        'apellido'=> $faker->lastName(), 
        'email' =>$faker->freeEmail(), 
        'direccion'=>$faker->address(), 
        'pais'=>$faker->country(), 
        'ciudad'=>$faker->city(), 
        'codigoPostal'=>$faker->postcode(), 
        'telefono'=>$faker->e164PhoneNumber()
        
    ];
});
