<?php

namespace App\Http\Controllers\API;

use App\Models\Inscripcion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InscripcionController extends Controller
{
    public function index()
    {
        return Inscripcion::with(['estudiante','grupo'])->get();
    }

    public function store(Request $request)
    {
        return Inscripcion::create($request->all());
    }

    public function show($id)
    {
        return Inscripcion::with(['estudiante','grupo'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $inscripcion = Inscripcion::findOrFail($id);
        $inscripcion->update($request->all());
        return $inscripcion;
    }

    public function destroy($id)
    {
        Inscripcion::destroy($id);
        return response()->json(['message' => 'Inscripción eliminada']);
    }
}