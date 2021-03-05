<?php

use Illuminate\Database\Seeder;
use App\Models\Categoriap;


class CategoriapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Categoriap::class,3)->create();
    }
}
