<?php

namespace App\Http\Controllers\API;

use App\Models\Materia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MateriaController extends Controller
{
    public function index()
    {
        return Materia::with('carrera')->get();
    }

    public function store(Request $request)
    {
        return Materia::create($request->all());
    }

    public function show($id)
    {
        return Materia::with('carrera')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $materia = Materia::findOrFail($id);
        $materia->update($request->all());
        return $materia;
    }

    public function destroy($id)
    {
        Materia::destroy($id);
        return response()->json(['message' => 'Materia eliminada']);
    }
}