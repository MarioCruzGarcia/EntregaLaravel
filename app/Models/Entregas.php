<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entregas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'vencimiento',
        'grupos_id',
    ];

    public function alumnos()
    {
        return $this->belongsToMany(Alumnos::class, 'alumnos_has_entregas', 'entrega_id', 'alumno_id');
    }

}

