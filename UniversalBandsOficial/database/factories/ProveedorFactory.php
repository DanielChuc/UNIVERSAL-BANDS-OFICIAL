<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Proveedor;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Proveedor::class, function (Faker $faker) {
    return [
        'nombreCompania'=>$this->faker->company(), 
        'nombreContacto'=>$this->faker->name(), 
        'cargoContacto'=>$this->faker->jobTitle(), 
        'paginaWeb'=>$this->faker->url(), 
        'email'=>$this->faker->email(), 
        'direccion'=>$this->faker->address(), 
        'pais'=>$this->faker->country(), 
        'entidadFederativa'=>$this->faker->state(), 
        'ciudad'=>$this->faker->city(), 
        'codigoPostal'=>$this->faker->postcode(), 
        'telefono'=>$this->faker->e164PhoneNumber()
    ];
});
