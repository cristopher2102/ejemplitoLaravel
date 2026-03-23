<?php

namespace App\Http\Controllers\API;

use App\Models\Grupo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GrupoController extends Controller
{
    public function index()
    {
        return Grupo::with('carrera')->get();
    }

    public function store(Request $request)
    {
        return Grupo::create($request->all());
    }

    public function show($id)
    {
        return Grupo::with('carrera')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $grupo = Grupo::findOrFail($id);
        $grupo->update($request->all());
        return $grupo;
    }

    public function destroy($id)
    {
        Grupo::destroy($id);
        return response()->json(['message' => 'Grupo eliminado']);
    }
}