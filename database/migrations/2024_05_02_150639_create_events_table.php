<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Título del evento
            $table->text('description')->nullable(); // Descripción del evento
            $table->string('location')->nullable(); // Ubicación del evento
            $table->datetime('start_date'); // Fecha de inicio del evento
            $table->datetime('end_date'); // Fecha de finalización del evento
            $table->integer('capacity')->nullable(); // Capacidad máxima del evento
            $table->string('organizer_name')->nullable(); // Nombre del organizador
            $table->string('organizer_email')->nullable(); // Correo electrónico del organizador
            $table->string('contact_number')->nullable(); // Número de contacto del evento
            $table->string('poster_image')->nullable(); // Imagen del póster del evento
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
        Schema::dropIfExists('events');
    }
};
