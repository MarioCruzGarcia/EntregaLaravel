<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesores_has_entregas extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'entregas_id',
        'profesores_id',
    ];
}
