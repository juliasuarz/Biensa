<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico;

class MedicosController extends Controller
{
    /**
     * Muestra una lista de todos los médicos.
     *
     * @return \Illuminate\Http\Response
     */
    public function listarMedicos()
    {
        $medicos = Medico::all();
        return response()->json($medicos);
    }

    public function perfilMedico($id)
    {
        $medico = Medico::find($id);

        if (!$medico) {
            return response()->json(['error' => 'Medico no encontrado'], 404);
        }

        return view('medicos.perfil-medico', compact('medico'));
    }
}
