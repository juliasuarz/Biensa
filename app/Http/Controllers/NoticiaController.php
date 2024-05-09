<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;


class NoticiaController extends Controller
{
    public function listarNoticias()
    {
        $noticia = Noticia::all(); // Obtener todos los eventos

        return response()->json($noticia); // Devolver los eventos en formato JSON
    }

    public function noticia($id)
    {
        $noticia = Noticia::find($id);

        if (!$noticia) {
            return response()->json(['error' => 'noticia no encontrado'], 404);
        }

        return view('recursos.noticia', compact('noticia'));
    }
}
