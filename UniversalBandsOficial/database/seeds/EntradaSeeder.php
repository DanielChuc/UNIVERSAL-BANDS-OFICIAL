<?php

use Illuminate\Database\Seeder;
use App\Models\LogEntrada;

class EntradaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\LogEntrada::class,3)->create();
    }
}
