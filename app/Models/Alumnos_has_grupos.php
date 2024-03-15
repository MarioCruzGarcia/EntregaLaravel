<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos_has_grupos extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'grupos_id',
        'alumnos_id',
        'asignaturas_id',
    ];
}
