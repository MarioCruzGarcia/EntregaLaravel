<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'apellidos',
        'dni',
        'fecha_nacimiento',
        'numero_matricula',
        'email',
    ];

    public function entregas()
    {
        return $this->belongsToMany(Entregas::class, 'alumnos_has_entregas', 'alumno_id', 'entrega_id');
    }

}

