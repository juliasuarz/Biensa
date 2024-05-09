<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;


class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'title' => 'Taller de Mindfulness',
            'description' => 'Aprende técnicas de mindfulness para reducir el estrés y la ansiedad.',
            'location' => 'Centro de Bienestar Integral',
            'start_date' => '2024-06-15 10:00:00',
            'end_date' => '2024-06-15 12:00:00',
            'capacity' => 30,
            'organizer_name' => 'Mindful Living Institute',
            'organizer_email' => 'info@mindfulliving.com',
            'contact_number' => '123-456-7890',
            'poster_image' => 'https://www.diariodevalderrueda.es/images/showid/2275389',
        ]);

        Event::create([
            'title' => 'Charla sobre Ansiedad y Depresión',
            'description' => 'Únete a nuestra charla donde expertos abordarán la ansiedad y la depresión.',
            'location' => 'Centro Comunitario',
            'start_date' => '2024-07-05 18:30:00',
            'end_date' => '2024-07-05 20:00:00',
            'capacity' => 50,
            'organizer_name' => 'Asociación de Salud Mental',
            'organizer_email' => 'contacto@saludmental.com',
            'contact_number' => '987-654-3210',
            'poster_image' => 'https://www.diariodevalderrueda.es/images/showid/2275389',
        ]);

        Event::create([
            'title' => 'Grupo de Apoyo para Familiares de Pacientes con Trastornos Mentales',
            'description' => 'Reunión mensual de apoyo para familiares de personas con trastornos mentales.',
            'location' => 'Hospital Psiquiátrico',
            'start_date' => '2024-08-20 18:00:00',
            'end_date' => '2024-08-20 19:30:00',
            'capacity' => 20,
            'organizer_name' => 'Fundación de Apoyo Familiar',
            'organizer_email' => 'apoyofamiliar@fundacion.com',
            'contact_number' => '555-123-4567',
            'poster_image' => 'https://www.diariodevalderrueda.es/images/showid/2275389',
        ]);

        Event::create([
            'title' => 'Taller de Gestión del Estrés',
            'description' => 'Aprende herramientas prácticas para manejar el estrés diario.',
            'location' => 'Centro de Terapia y Bienestar',
            'start_date' => '2024-09-10 14:00:00',
            'end_date' => '2024-09-10 16:00:00',
            'capacity' => 25,
            'organizer_name' => 'Instituto de Terapia Mental',
            'organizer_email' => 'info@terapiamental.com',
            'contact_number' => '333-222-1111',
            'poster_image' => 'https://www.diariodevalderrueda.es/images/showid/2275389',
        ]);

        Event::create([
            'title' => 'Caminata para la Salud Mental',
            'description' => 'Únete a nuestra caminata para promover la salud mental y el bienestar.',
            'location' => 'Parque de la Ciudad',
            'start_date' => '2024-10-05 09:00:00',
            'end_date' => '2024-10-05 11:00:00',
            'capacity' => 100,
            'organizer_name' => 'Campaña por la Salud Mental',
            'organizer_email' => 'info@saludmental.org',
            'contact_number' => '444-555-6666',
            'poster_image' => 'https://www.diariodevalderrueda.es/images/showid/2275389',
        ]);

        Event::create([
            'title' => 'Sesión de Yoga Terapéutico',
            'description' => 'Practica yoga para mejorar tu salud mental y emocional.',
            'location' => 'Estudio de Yoga Serenidad',
            'start_date' => '2024-11-15 17:30:00',
            'end_date' => '2024-11-15 19:00:00',
            'capacity' => 15,
            'organizer_name' => 'Serenidad Yoga Studio',
            'organizer_email' => 'info@serenityyoga.com',
            'contact_number' => '777-888-9999',
            'poster_image' => 'https://www.diariodevalderrueda.es/images/showid/2275389',
        ]);

        Event::create([
            'title' => 'Cine Fórum: "En Busca de la Felicidad"',
            'description' => 'Proyección de la película seguida de un debate sobre la salud mental.',
            'location' => 'Cine Municipal',
            'start_date' => '2024-12-08 19:00:00',
            'end_date' => '2024-12-08 22:00:00',
            'capacity' => 80,
            'organizer_name' => 'Círculo de Cine y Salud Mental',
            'organizer_email' => 'cineysalud@circulo.com',
            'contact_number' => '999-000-1111',
            'poster_image' => 'https://www.diariodevalderrueda.es/images/showid/2275389',
        ]);

        Event::create([
            'title' => 'Taller de Autoestima',
            'description' => 'Descubre herramientas para mejorar tu autoestima y bienestar emocional.',
            'location' => 'Centro de Desarrollo Personal',
            'start_date' => '2025-01-20 16:00:00',
            'end_date' => '2025-01-20 18:00:00',
            'capacity' => 20,
            'organizer_name' => 'Instituto de Autoestima Positiva',
            'organizer_email' => 'contacto@autoestimapositiva.com',
            'contact_number' => '111-222-3333',
            'poster_image' => 'https://www.diariodevalderrueda.es/images/showid/2275389',
        ]);

        Event::create([
            'title' => 'Conferencia: "Rompiendo el Estigma"',
            'description' => 'Conferencia sobre cómo romper el estigma en torno a los trastornos mentales.',
            'location' => 'Universidad Nacional',
            'start_date' => '2025-02-10 18:00:00',
            'end_date' => '2025-02-10 20:00:00',
            'capacity' => 200,
            'organizer_name' => 'Asociación de Salud Mental',
            'organizer_email' => 'info@saludmental.com',
            'contact_number' => '222-333-4444',
            'poster_image' => 'https://www.diariodevalderrueda.es/images/showid/2275389',
        ]);

        Event::create([
            'title' => 'Grupo de Terapia para Ansiedad Social',
            'description' => 'Grupo de terapia para personas que luchan con la ansiedad social.',
            'location' => 'Clínica de Terapia Psicológica',
            'start_date' => '2025-03-15 19:00:00',
            'end_date' => '2025-03-15 20:30:00',
            'capacity' => 10,
            'organizer_name' => 'Clínica de Salud Mental y Emocional',
            'organizer_email' => 'info@clinicamental.com',
            'contact_number' => '555-444-3333',
            'poster_image' => 'https://www.diariodevalderrueda.es/images/showid/2275389',
        ]);
    }
}
