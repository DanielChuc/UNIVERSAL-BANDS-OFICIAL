<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'productos';

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
    protected $fillable = ['nombre', 'descripcion', 'cantidad', 'precio', 'estado', 'categoriap_id', 'proveedor_id'];

    public function categoriap()
    {
        return $this->belognsTo('App\Models\Categoriap');
    }
    public function proveedor()
    {
        return $this->belongsTo('App\Models\Proveedor');
    }
    public function detallepedido()
    {
        return $this->belongsTo('App\Models\DetallePedido');
    }
    
}
