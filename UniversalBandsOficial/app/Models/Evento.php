<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'eventos';

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
    protected $fillable = ['nombreEvento', 'imagenEvento', 'direccion', 'descripcion', 'pais', 'ciudad', 'fechas', 'capacidadLugares', 'lugaresDisponibles', 'precio', 'categoria_id'];

    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria');
    }

    public function logentrada()
    {
        return $this->belongsTo('App\Models\LogEntrada');
    }

    public function eventoPermitido()
    {
        return $this->belongsTo('App\Models\EventoPermitido');
    }
}
