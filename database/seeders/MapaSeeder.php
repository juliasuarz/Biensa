<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barcelona_mental_health_centers = [
            ["ubicacion" => "Hospital Clínic - Servicio de Psiquiatría", "coordenadas" => "41.3879, 2.1595", "nombre" => "Hospital Clínic - Servicio de Psiquiatría"],
            ["ubicacion" => "Hospital de la Santa Creu i Sant Pau - Servicio de Psiquiatría", "coordenadas" => "41.4114, 2.1741", "nombre" => "Hospital de la Santa Creu i Sant Pau - Servicio de Psiquiatría"],
            ["ubicacion" => "Hospital del Mar - Servicio de Psiquiatría", "coordenadas" => "41.3927, 2.1952", "nombre" => "Hospital del Mar - Servicio de Psiquiatría"],
            ["ubicacion" => "Hospital Vall d'Hebron - Servicio de Psiquiatría", "coordenadas" => "41.4265, 2.1480", "nombre" => "Hospital Vall d'Hebron - Servicio de Psiquiatría"],
            ["ubicacion" => "Hospital de Sant Pau - Servicio de Psiquiatría", "coordenadas" => "41.4114, 2.1741", "nombre" => "Hospital de Sant Pau - Servicio de Psiquiatría"],
            ["ubicacion" => "Fundació Orienta", "coordenadas" => "41.3943, 2.1664", "nombre" => "Fundació Orienta"],
            ["ubicacion" => "Institut Psicològic Barcelona", "coordenadas" => "41.3885, 2.1504", "nombre" => "Institut Psicològic Barcelona"],
            ["ubicacion" => "Fundació Salut Mental Catalunya", "coordenadas" => "41.3976, 2.1568", "nombre" => "Fundació Salut Mental Catalunya"],
            ["ubicacion" => "Hospital Psiquiàtric i de Salut Mental Vall d'Hebron", "coordenadas" => "41.4286, 2.1377", "nombre" => "Hospital Psiquiàtric i de Salut Mental Vall d'Hebron"],
            ["ubicacion" => "Centre de Salut Mental Dr. Emili Mira", "coordenadas" => "41.4286, 2.1377", "nombre" => "Centre de Salut Mental Dr. Emili Mira"],
            ["ubicacion" => "Associació Benestar i Desenvolupament", "coordenadas" => "41.3880, 2.1534", "nombre" => "Associació Benestar i Desenvolupament"],
            ["ubicacion" => "Institut Psicològic Argentona", "coordenadas" => "41.3983, 2.1698", "nombre" => "Institut Psicològic Argentona"],
            ["ubicacion" => "Centre de Salut Mental de Sants", "coordenadas" => "41.3753, 2.1417", "nombre" => "Centre de Salut Mental de Sants"],
            ["ubicacion" => "Fundació Ared", "coordenadas" => "41.4012, 2.1648", "nombre" => "Fundació Ared"],
            ["ubicacion" => "Unitat d'Hospitalització Breu Clínica Mental Benito Menni", "coordenadas" => "41.4603, 2.1206", "nombre" => "Unitat d'Hospitalització Breu Clínica Mental Benito Menni"],
            ["ubicacion" => "Centre de Salut Mental Dr. Fàbregas", "coordenadas" => "41.4380, 2.2041", "nombre" => "Centre de Salut Mental Dr. Fàbregas"],
            ["ubicacion" => "Institut Guttmann - Servei de Psiquiatria", "coordenadas" => "41.4001, 2.1055", "nombre" => "Institut Guttmann - Servei de Psiquiatria"],
            ["ubicacion" => "Fundació Salut i Comunitat", "coordenadas" => "41.3713, 2.1342", "nombre" => "Fundació Salut i Comunitat"],
            ["ubicacion" => "Centre de Salut Mental de Nou Barris", "coordenadas" => "41.4452, 2.1790", "nombre" => "Centre de Salut Mental de Nou Barris"],
            ["ubicacion" => "Centre de Salut Mental d'Horta", "coordenadas" => "41.4323, 2.1457", "nombre" => "Centre de Salut Mental d'Horta"],
        ];

        foreach ($barcelona_mental_health_centers as $location) {
            DB::table('mapa')->insert([
                'ubicacion' => $location['ubicacion'],
                'coordenadas' => $location['coordenadas'],
                'nombre' => $location['nombre']
                // La imagen se deja como NULL
            ]);
        }
    }
}
