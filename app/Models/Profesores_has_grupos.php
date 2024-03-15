<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesores_has_grupos extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'grupos_id',
        'profesores_id',
        'asignaturas_id',
    ];
}
