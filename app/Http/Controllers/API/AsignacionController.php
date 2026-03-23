<?php

namespace App\Http\Controllers\API;

use App\Models\Asignacion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AsignacionController extends Controller
{
    public function index()
    {
        return Asignacion::with(['docente','materia','grupo'])->get();
    }

    public function store(Request $request)
    {
        return Asignacion::create($request->all());
    }

    public function show($id)
    {
        return Asignacion::with(['docente','materia','grupo'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $asignacion = Asignacion::findOrFail($id);
        $asignacion->update($request->all());
        return $asignacion;
    }

    public function destroy($id)
    {
        Asignacion::destroy($id);
        return response()->json(['message' => 'Asignación eliminada']);
    }
}