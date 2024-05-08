<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapa; // Asegúrate de importar el modelo

class MapaController extends Controller
{
    public function getMarkers()
    {
        $markers = Mapa::all(); // Obtener todos los marcadores de la base de datos
        return response()->json($markers); // Devolver los datos como JSON
    }
}
