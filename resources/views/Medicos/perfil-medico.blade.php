<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
    <div id="perfil-medico">
        <h2>Perfil del Médico</h2>
        <p>Nombre: {{ $medico->nombre }} {{ $medico->apellido }}</p>
        <p>Especialidad: {{ $medico->especialidad }}</p>
        <p>Descripción: {{ $medico->descripcion }}</p>

    </div>

    </table>

    <script src="{{ asset('js/perfil-medico.js') }}"></script>

</body>
</html>