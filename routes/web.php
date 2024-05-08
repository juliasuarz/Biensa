<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapaController;
use App\Http\Controllers\MedicosController;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/mapa', function () {
    return view('recursos.mapa');
})->middleware('auth')->name('mapa');


Route::post('/mostrar-marcadores', [MapaController::class, 'getMarkers']);

Route::get('/lista-medicos', function () {return view('medicos/medicos');})->middleware('auth')->name('medicos');
Route::post('/listarMedicos', [MedicosController::class, 'listarMedicos']);

Route::post('/listarMedicos', [MedicosController::class, 'listarMedicos']);
Route::get('/perfil-medico/{id}', [MedicosController::class, 'perfilMedico'])->name('perfil-medico');
