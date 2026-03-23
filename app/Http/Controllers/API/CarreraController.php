<?php

namespace App\Http\Controllers\API;

use App\Models\Carrera;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarreraController extends Controller
{
    public function index()
    {
        return Carrera::all();
    }

    public function store(Request $request)
    {
        return Carrera::create($request->all());
    }

    public function show($id)
    {
        return Carrera::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $carrera = Carrera::findOrFail($id);
        $carrera->update($request->all());
        return $carrera;
    }

    public function destroy($id)
    {
        Carrera::destroy($id);
        return response()->json(['message' => 'Carrera eliminada']);
    }
}