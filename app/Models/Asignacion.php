<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $table = 'asignaciones';

    protected $fillable = [
        'docente_id',
        'materia_id',
        'grupo_id'
    ];

    public function docente()
    {
        return $this->belongsTo(Usuario::class, 'docente_id');
    }

    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }

    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }
}