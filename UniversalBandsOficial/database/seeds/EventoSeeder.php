<?php

use Illuminate\Database\Seeder;
use App\Models\Evento;


class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Evento::class,3)->create();
        
    }
}
