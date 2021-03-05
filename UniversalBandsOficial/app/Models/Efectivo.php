<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Efectivo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'efectivos';

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
    protected $fillable = ['cliente', 'tipoMoneda', 'monto', 'cambio', 'metodoPago_id'];

    public function metodoPago()
    {
        return $this->hasOne('App\Models\MetodoPago');
    }
    
}
