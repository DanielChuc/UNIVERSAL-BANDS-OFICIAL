<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetodoPago extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'metodo_pagos';

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
    protected $fillable = ['ejemplo'];

    public function tarjeta()
    {
        return $this->belongsTo('App\Models\Tarjeta');
    }
    public function efectivo()
    {
        return $this->belongsTo('App\Models\Efectivo');
    }
    public function pedido()
    {
        return $this->belongsTo('App\Models\Pedido');
    }
    public function envio()
    {
        return $this->belongsTo('App\Models\Envio');
    }
    
}
