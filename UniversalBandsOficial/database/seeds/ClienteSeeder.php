<?php

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        Cliente::factory()
        ->count(3)
        ->create();
        */
        //Otra forma de llamar al factory para crear los 3 objetos del modelo
        factory(App\Models\Cliente::class,3)->create();
        
    }
}
