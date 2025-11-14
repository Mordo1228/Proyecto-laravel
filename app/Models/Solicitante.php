<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    protected $fillable = ['nombre', 'correo', 'telefono'];

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}

