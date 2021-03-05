<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarjetum extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tarjetas';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numeroTarjeta', 'nombre', 'expira', 'cvv', 'monto', 'metodoPago_id'];

    public function metodoPago()
    {
        return $this->hasOne('App\Models\MetodoPago');
    }
    
}
