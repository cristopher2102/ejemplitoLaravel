<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\UsuarioController;
use App\Http\Controllers\API\RolController;
use App\Http\Controllers\API\CarreraController;
use App\Http\Controllers\API\MateriaController;
use App\Http\Controllers\API\GrupoController;
use App\Http\Controllers\API\AsignacionController;
use App\Http\Controllers\API\InscripcionController;
use App\Http\Controllers\API\CalificacionController;

Route::get('/', function () {
    return response()->json([
        'status' => 'API funcionando correctamente'
    ]);
});

//  Públicas
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

//  Protegidas
Route::middleware('auth:sanctum')->group(function () {

    Route::post('logout', [AuthController::class, 'logout']);

    Route::apiResource('usuarios', UsuarioController::class);
    Route::apiResource('roles', RolController::class);
    Route::apiResource('carreras', CarreraController::class);
    Route::apiResource('materias', MateriaController::class);
    Route::apiResource('grupos', GrupoController::class);
    Route::apiResource('asignaciones', AsignacionController::class);
    Route::apiResource('inscripciones', InscripcionController::class);
    Route::apiResource('calificaciones', CalificacionController::class);

});