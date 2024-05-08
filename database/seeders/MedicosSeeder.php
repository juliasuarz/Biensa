<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicos')->insert([
            [
                'nombre' => 'Alejandro',
                'apellido' => 'Pérez',
                'correo' => 'alejandro.perez@example.com',
                'especialidad' => 'Psiquiatría',
                'imagen' => 'profiles/default_profile.jpg',
                'descripcion' => 'Especializado en trastornos del estado de ánimo y trastornos de ansiedad.',
                'telefono' => '555-123-4567',
                'direccion' => 'Calle Real 123',
                'horario_consulta' => 'Lunes a viernes: 9am - 5pm',
                'precio_consulta' => 150,
                'experiencia_laboral' => 'Más de 15 años de experiencia en psiquiatría.',
                'certificaciones' => 'Especialista en Psiquiatría, Máster en Trastornos del Estado de Ánimo',
                'idiomas' => 'Español, Inglés',
                'redes_sociales' => 'https://twitter.com/alejandro_perez',
                'estado' => 'activo',
                'comentarios' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'María',
                'apellido' => 'Gómez',
                'correo' => 'maria.gomez@example.com',
                'especialidad' => 'Psicología Clínica',
                'imagen' => 'profiles/default_profile.jpg',
                'descripcion' => 'Especializada en terapia cognitivo-conductual para trastornos de ansiedad y depresión.',
                'telefono' => '555-234-5678',
                'direccion' => 'Avenida Principal 456',
                'horario_consulta' => 'Martes y jueves: 10am - 6pm',
                'precio_consulta' => 120,
                'experiencia_laboral' => 'Experiencia en clínica privada y en hospitales psiquiátricos.',
                'certificaciones' => 'Licenciada en Psicología, Terapeuta Cognitivo-Conductual Certificada',
                'idiomas' => 'Español, Francés',
                'redes_sociales' => 'https://www.linkedin.com/in/maria-gomez',
                'estado' => 'activo',
                'comentarios' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Luisa',
                'apellido' => 'Hernández',
                'correo' => 'luisa.hernandez@example.com',
                'especialidad' => 'Psicoterapia',
                'imagen' => 'profiles/default_profile.jpg',
                'descripcion' => 'Terapeuta especializada en terapia gestalt para trastornos de personalidad.',
                'telefono' => '555-345-6789',
                'direccion' => 'Avenida Libertad 789',
                'horario_consulta' => 'Lunes, miércoles y viernes: 8am - 3pm',
                'precio_consulta' => 100,
                'experiencia_laboral' => 'Más de 10 años de experiencia en terapia gestalt.',
                'certificaciones' => 'Terapeuta Gestalt Certificada',
                'idiomas' => 'Español, Inglés',
                'redes_sociales' => 'https://www.facebook.com/luisa.hernandez',
                'estado' => 'activo',
                'comentarios' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Roberto',
                'apellido' => 'Martínez',
                'correo' => 'roberto.martinez@example.com',
                'especialidad' => 'Neuropsicología',
                'imagen' => 'profiles/default_profile.jpg',
                'descripcion' => 'Especialista en neuropsicología infantil y del adulto mayor.',
                'telefono' => '555-456-7890',
                'direccion' => 'Calle Mayor 901',
                'horario_consulta' => 'Lunes a viernes: 10am - 4pm',
                'precio_consulta' => 180,
                'experiencia_laboral' => 'Trabajo en centros de rehabilitación y clínicas de neurología.',
                'certificaciones' => 'Licenciado en Psicología, Máster en Neuropsicología',
                'idiomas' => 'Español, Portugués',
                'redes_sociales' => 'https://www.linkedin.com/in/roberto-martinez',
                'estado' => 'activo',
                'comentarios' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Laura',
                'apellido' => 'Díaz',
                'correo' => 'laura.diaz@example.com',
                'especialidad' => 'Terapia de Pareja',
                'imagen' => 'profiles/default_profile.jpg',
                'descripcion' => 'Terapeuta especializada en terapia de pareja y consejería matrimonial.',
                'telefono' => '555-567-8901',
                'direccion' => 'Avenida Central 1234',
                'horario_consulta' => 'Martes, jueves y sábado: 9am - 7pm',
                'precio_consulta' => 160,
                'experiencia_laboral' => 'Trabajo en clínica de parejas y asesoramiento matrimonial.',
                'certificaciones' => 'Licenciada en Psicología, Terapeuta de Pareja Certificada',
                'idiomas' => 'Español, Inglés',
                'redes_sociales' => 'https://twitter.com/laura_diaz',
                'estado' => 'activo',
                'comentarios' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Javier',
                'apellido' => 'Rodríguez',
                'correo' => 'javier.rodriguez@example.com',
                'especialidad' => 'Psicoterapia Familiar',
                'imagen' => 'profiles/default_profile.jpg',
                'descripcion' => 'Especializado en terapia familiar y resolución de conflictos intrafamiliares.',
                'telefono' => '555-678-9012',
                'direccion' => 'Calle Felicidad 345',
                'horario_consulta' => 'Lunes a viernes: 11am - 6pm',
                'precio_consulta' => 140,
                'experiencia_laboral' => 'Trabajo en clínicas de terapia familiar y resolución de conflictos.',
                'certificaciones' => 'Licenciado en Psicología, Terapeuta Familiar Certificado',
                'idiomas' => 'Español, Italiano',
                'redes_sociales' => 'https://www.facebook.com/javier.rodriguez',
                'estado' => 'activo',
                'comentarios' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Isabel',
                'apellido' => 'Sanchez',
                'correo' => 'isabel.sanchez@example.com',
                'especialidad' => 'Psicología Infantil',
                'imagen' => 'profiles/default_profile.jpg',
                'descripcion' => 'Especializada en psicología infantil y terapia de juego.',
                'telefono' => '555-789-0123',
                'direccion' => 'Avenida Niños 567',
                'horario_consulta' => 'Martes y jueves: 10am - 3pm',
                'precio_consulta' => 130,
                'experiencia_laboral' => 'Experiencia en clínicas pediátricas y escuelas.',
                'certificaciones' => 'Licenciada en Psicología, Especialista en Psicología Infantil',
                'idiomas' => 'Español, Francés',
                'redes_sociales' => 'https://www.linkedin.com/in/isabel.sanchez',
                'estado' => 'activo',
                'comentarios' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Daniel',
                'apellido' => 'García',
                'correo' => 'daniel.garcia@example.com',
                'especialidad' => 'Psicoterapia Gestalt',
                'imagen' => 'profiles/default_profile.jpg',
                'descripcion' => 'Especializado en terapia gestalt para adultos y adolescentes.',
                'telefono' => '555-890-1234',
                'direccion' => 'Calle Esperanza 890',
                'horario_consulta' => 'Lunes a viernes: 8am - 4pm',
                'precio_consulta' => 110,
                'experiencia_laboral' => 'Trabajo en consultorio privado y centros de salud mental.',
                'certificaciones' => 'Licenciado en Psicología, Terapeuta Gestalt Certificado',
                'idiomas' => 'Español, Inglés',
                'redes_sociales' => 'https://twitter.com/daniel_garcia',
                'estado' => 'activo',
                'comentarios' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Carmen',
                'apellido' => 'López',
                'correo' => 'carmen.lopez@example.com',
                'especialidad' => 'Psicología del Deporte',
                'imagen' => 'profiles/default_profile.jpg',
                'descripcion' => 'Especializada en psicología aplicada al deporte y rendimiento deportivo.',
                'telefono' => '555-901-2345',
                'direccion' => 'Avenida Deportista 678',
                'horario_consulta' => 'Lunes, miércoles y viernes: 10am - 5pm',
                'precio_consulta' => 170,
                'experiencia_laboral' => 'Trabajo con atletas profesionales y equipos deportivos.',
                'certificaciones' => 'Licenciada en Psicología, Especialista en Psicología del Deporte',
                'idiomas' => 'Español, Inglés',
                'redes_sociales' => 'https://www.facebook.com/carmen.lopez',
                'estado' => 'activo',
                'comentarios' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Ana',
                'apellido' => 'Muñoz',
                'correo' => 'ana.munoz@example.com',
                'especialidad' => 'Psicología Forense',
                'imagen' => 'profiles/default_profile.jpg',
                'descripcion' => 'Especializada en la aplicación de la psicología en el ámbito legal y judicial.',
                'telefono' => '555-012-3456',
                'direccion' => 'Calle Justicia 9012',
                'horario_consulta' => 'Martes y jueves: 1pm - 7pm',
                'precio_consulta' => 160,
                'experiencia_laboral' => 'Trabajo con abogados y en instituciones legales.',
                'certificaciones' => 'Licenciada en Psicología, Máster en Psicología Forense',
                'idiomas' => 'Español, Inglés',
                'redes_sociales' => 'https://www.linkedin.com/in/ana.muñoz',
                'estado' => 'activo',
                'comentarios' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
