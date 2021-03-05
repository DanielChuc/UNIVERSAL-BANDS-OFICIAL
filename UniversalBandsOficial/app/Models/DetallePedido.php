<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'detalle_pedidos';

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
    protected $fillable = ['estadoPedido', 'descripcion', 'cantidad', 'fecha', 'producto_id', 'pedido_id'];

    public function pedido()
    {
        return $this->hasMany('App\Models\Pedido');
    }
    public function producto()
    {
        return $this->hasMany('App\Models\Producto');
    }
    
}
