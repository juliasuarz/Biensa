<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapaController;
use App\Http\Controllers\MedicosController;
use App\Http\Controllers\EventoController;

use App\Http\Controllers\NoticiaController;




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


//nuevo


Route::get('/listar-eventos', function () {return view('recursos/eventos');})->middleware('auth')->name('eventos');
Route::post('/listarEventos', [EventoController::class, 'listarEventos']); // Ruta para listar eventos
Route::get('/evento/{id}', [EventoController::class, 'evento'])->name('evento');


//nuevo 
Route::get('/listar-noticias', function () {return view('recursos/listar-noticias');})->middleware('auth')->name('noticias');
Route::post('/listarNoticias', [NoticiaController::class, 'listarNoticias']); // Ruta para listar eventos
Route::get('/noticia/{id}', [NoticiaController::class, 'noticia'])->name('noticia');

