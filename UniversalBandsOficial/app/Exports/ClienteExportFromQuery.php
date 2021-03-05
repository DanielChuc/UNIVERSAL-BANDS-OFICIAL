<?php

namespace App\Exports;

use App\Models\Cliente;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;

class ClienteExportFromQuery implements FromQuery
{
    /*
     * @return \Illuminate\Support\Collection
     */
    use Exportable;
    // public $nombre;
    // public $apellido;
    // public $email;
    // public $direccion;
    // public $pais;
    // public $ciudad;
    // public $codigoPostal;
    // public $telefono;

    public function query()
    {
        return Cliente::query();
    }
}
