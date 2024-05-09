<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; // Asegúrate de importar el modelo Evento

class EventoController extends Controller
{
    public function listarEventos()
    {
        $eventos = Event::all(); // Obtener todos los eventos

        return response()->json($eventos); // Devolver los eventos en formato JSON
    }

    

    public function evento($id)
    {
        $evento = Event::find($id);

        if (!$evento) {
            return response()->json(['error' => 'evento no encontrado'], 404);
        }

        return view('recursos.evento', compact('evento'));
    }
}
