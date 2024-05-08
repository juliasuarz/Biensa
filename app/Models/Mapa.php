<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapa extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'mapa';

    // Campos que se pueden llenar masivamente
    protected $fillable = ['ubicacion', 'coordenadas', 'nombre', 'imagen'];

    // Si no quieres usar los timestamps (created_at y updated_at)
    public $timestamps = false;
}
