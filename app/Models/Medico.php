<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'telefono',
        'especialidad',
        'direccion',
        'horario_consulta',
        'precio_consulta',
        'experiencia_laboral',
        'certificaciones',
        'idiomas',
        'redes_sociales',
        'estado',
        'comentarios',
        'imagen',
    ];
}
