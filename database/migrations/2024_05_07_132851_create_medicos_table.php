<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ejecuta las migraciones.
     */
    public function up(): void
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('correo')->nullable();
            $table->string('telefono')->nullable();
            $table->string('especialidad')->nullable();
            $table->string('direccion')->nullable();
            $table->string('horario_consulta')->nullable();
            $table->decimal('precio_consulta', 8, 2)->nullable();
            $table->text('experiencia_laboral')->nullable();
            $table->text('certificaciones')->nullable();
            $table->string('idiomas')->nullable();
            $table->string('redes_sociales')->nullable();
            $table->enum('estado', ['activo', 'inactivo', 'vacaciones'])->default('activo');
            $table->text('comentarios')->nullable();
            $table->string('imagen')->nullable();
            $table->text('descripcion')->nullable(); // Aquí se agrega la columna descripcion
            $table->timestamps();
        });
    }

    /**
     * Revierte las migraciones.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicos');
    }
};
