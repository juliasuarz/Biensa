<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapa', function (Blueprint $table) {
            $table->id();
            $table->string('ubicacion');
            $table->string('coordenadas');
            $table->string('nombre');
            $table->string('imagen')->nullable(); // La imagen puede ser nula
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mapa');
    }
}
