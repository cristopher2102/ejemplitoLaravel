<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupos';

    protected $fillable = [
        'nombre',
        'semestre',
        'carrera_id'
    ];

    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }
}