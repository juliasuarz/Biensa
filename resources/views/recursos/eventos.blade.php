<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de evtnod</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link href="{{ asset('css/styleHome.css') }}" rel="stylesheet"> --}}
</head>
<body>

    <h1>Lista de eventos</h1>

    <div id="listado-eventos">
        
    </div>

    <script src="{{ asset('js/lista-eventos.js') }}"></script>

</body>
</html>
