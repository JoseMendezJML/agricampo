<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clima extends Model
{
    protected $fillable = [
        'ubicacion',
        'temperatura',
        'humedad',
        'probabilidad_lluvia',
        'velocidad_viento',
        'fecha'
    ];
}