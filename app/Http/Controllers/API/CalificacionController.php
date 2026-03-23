<?php

namespace App\Http\Controllers\API;

use App\Models\Calificacion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalificacionController extends Controller
{
    public function index()
    {
        return Calificacion::with(['estudiante','materia','grupo'])->get();
    }

    public function store(Request $request)
    {
        return Calificacion::create($request->all());
    }

    public function show($id)
    {
        return Calificacion::with(['estudiante','materia','grupo'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $calificacion = Calificacion::findOrFail($id);
        $calificacion->update($request->all());
        return $calificacion;
    }

    public function destroy($id)
    {
        Calificacion::destroy($id);
        return response()->json(['message' => 'Calificación eliminada']);
    }
}