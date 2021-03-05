<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'envios';

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
    protected $fillable = ['cliente', 'direccion', 'pais', 'ciudad', 'codigoPostal', 'metodoPago_id'];

    public function metodoPago()
    {
        return $this->hasOne('App\Models\MetodoPago');
    }
    public function pedido()
    {
        return $this->belongsTo('App\Models\Pedido');
    }
    
}
