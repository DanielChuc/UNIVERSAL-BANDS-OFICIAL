<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pedidos';

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
    protected $fillable = ['nombreDestinatario', 'direccion', 'ciudad', 'entidadFederativa', 'pais', 'fechaPedido', 'fechaEnvio', 'cliente_id', 'metodoPago_id', 'envio_id'];

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente');
    }
    public function detallepedido()
    {
        return $this->belongsTo('App\Models\DetallePedido');
    }
    public function envio()
    {
        return $this->hasOne('App\Models\Envio');
    }
    public function metodoPago()
    {
        return $this->hasOne('App\Models\MetodoPago');
    }
    
}
