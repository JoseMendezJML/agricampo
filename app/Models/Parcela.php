<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parcela extends Model
{
    protected $fillable = [
        'nombre',
        'ubicacion',
        'hectareas',
        'tipo_suelo',
        'estado',
    ];
}