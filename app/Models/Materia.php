<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'materias';

    protected $fillable = [
        'nombre',
        'descripcion',
        'creditos',
        'carrera_id'
    ];

    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }
}