<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumnosHasEntregas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'entrega',
        'calificacion',
        'fecha_entrega',
        'alumnos_id',
        'entregas_id',
    ];
}

