<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('noticias')->insert([
            'titulo' => 'Estudio encuentra que la meditación reduce el estrés y la ansiedad',
            'descripcion' => 'Un estudio reciente revela los beneficios de la meditación en la reducción del estrés y la ansiedad.',
            'contenido' => 'El estudio, publicado en el Journal of Clinical Psychology, encontró que la práctica regular de meditación puede disminuir significativamente los niveles de estrés y ansiedad en personas de todas las edades. La meditación se ha asociado con una mayor sensación de calma y claridad mental, así como una mejor capacidad para hacer frente a situaciones estresantes.',
            'autor' => 'Dr. Carlos Martínez',
            'fuente' => 'Journal of Clinical Psychology',
            'imagen' => 'https://example.com/imagen7.jpg',
            'fecha_publicacion' => '2024-05-15 10:00:00',
        ]);

        DB::table('noticias')->insert([
            'titulo' => 'Cómo mejorar la calidad del sueño para una mejor salud mental',
            'descripcion' => 'Consejos prácticos para mejorar la calidad del sueño y promover una mejor salud mental.',
            'contenido' => 'La calidad del sueño juega un papel crucial en nuestra salud mental. Para mejorarla, es importante mantener un horario regular de sueño, crear un ambiente propicio para dormir, limitar el consumo de cafeína y tecnología antes de acostarse, y practicar técnicas de relajación como la meditación o la respiración profunda.',
            'autor' => 'Dra. Laura Sánchez',
            'fuente' => 'Blog de Salud y Bienestar',
            'imagen' => 'https://example.com/imagen8.jpg',
            'fecha_publicacion' => '2024-05-16 08:30:00',
        ]);

        DB::table('noticias')->insert([
            'titulo' => 'Cómo mantener una mente positiva en tiempos difíciles',
            'descripcion' => 'Consejos para mantener una actitud positiva y resiliente en situaciones difíciles.',
            'contenido' => 'Mantener una mente positiva es fundamental para enfrentar desafíos y mantener la salud mental. Para lograrlo, es importante practicar la gratitud, enfocarse en soluciones en lugar de problemas, rodearse de personas positivas, y cuidar el cuerpo y la mente a través de la alimentación saludable, el ejercicio y el descanso adecuado.',
            'autor' => 'Dr. Juan Pablo Gómez',
            'fuente' => 'Revista de Psicología Positiva',
            'imagen' => 'https://example.com/imagen9.jpg',
            'fecha_publicacion' => '2024-05-17 12:00:00',
        ]);

        DB::table('noticias')->insert([
            'titulo' => 'El impacto de la música en la salud mental',
            'descripcion' => 'Descubre cómo la música puede influir en nuestro estado de ánimo y bienestar emocional.',
            'contenido' => 'La música tiene el poder de influir en nuestras emociones y estado de ánimo. Escuchar música que nos gusta puede ayudar a reducir el estrés, mejorar el estado de ánimo y promover la relajación. Algunas personas también encuentran útil la música como forma de expresar y procesar emociones difíciles.',
            'autor' => 'Dra. María Fernández',
            'fuente' => 'Artículo de Psicología Musical',
            'imagen' => 'https://example.com/imagen10.jpg',
            'fecha_publicacion' => '2024-05-18 14:00:00',
        ]);

        DB::table('noticias')->insert([
            'titulo' => 'Consejos para mantener una vida equilibrada entre el trabajo y el ocio',
            'descripcion' => 'Cómo encontrar un equilibrio saludable entre las responsabilidades laborales y el tiempo libre.',
            'contenido' => 'Mantener un equilibrio entre el trabajo y el ocio es esencial para la salud mental y el bienestar general. Algunos consejos para lograrlo incluyen establecer límites claros entre el trabajo y el tiempo libre, priorizar actividades que te gusten y te relajen, y practicar técnicas de gestión del tiempo y el estrés.',
            'autor' => 'Dr. Javier Ruiz',
            'fuente' => 'Blog de Productividad Personal',
            'imagen' => 'https://example.com/imagen11.jpg',
            'fecha_publicacion' => '2024-05-19 16:30:00',
        ]);

        DB::table('noticias')->insert([
            'titulo' => 'Cómo ayudar a un ser querido que está luchando con su salud mental',
            'descripcion' => 'Consejos sobre cómo brindar apoyo a amigos o familiares que están pasando por dificultades emocionales.',
            'contenido' => 'Brindar apoyo a un ser querido que está luchando con su salud mental puede marcar una gran diferencia en su bienestar. Algunas formas de ayudar incluyen escuchar activamente, mostrar empatía y comprensión, ofrecer ayuda práctica cuando sea posible, y animar a buscar ayuda profesional si es necesario.',
            'autor' => 'Dra. Claudia Gutiérrez',
            'fuente' => 'Artículo de Apoyo Psicológico',
            'imagen' => 'https://example.com/imagen12.jpg',
            'fecha_publicacion' => '2024-05-20 18:00:00',
        ]);
    }
}
