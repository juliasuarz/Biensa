<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Médicos</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link href="{{ asset('css/styleHome.css') }}" rel="stylesheet"> --}}
</head>
<body>

    <h1>Lista de Médicos</h1>

    <table id="listado-medicos">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Especialidad</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <script src="{{ asset('js/medicos.js') }}"></script>

</body>
</html>
