<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciclos_has_Asignaturas extends Model
{
    use HasFactory;    
    public $timestamps = false;

    protected $fillable = [
        'ciclos_id',
        'asignaturas_id',
    ];
}
