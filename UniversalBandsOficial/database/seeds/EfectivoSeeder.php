<?php

use Illuminate\Database\Seeder;

class EfectivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Efectivo::class, 3)->create();
    }
}
