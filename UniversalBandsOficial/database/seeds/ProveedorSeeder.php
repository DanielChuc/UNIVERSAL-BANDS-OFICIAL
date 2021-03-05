<?php

use Illuminate\Database\Seeder;
use App\Models\Proveedor;


class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Proveedor::class,3)->create();
    }
}
