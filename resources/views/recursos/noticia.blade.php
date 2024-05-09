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
    <div id="resultado">
        <div class="row">
            <div class="col">
                <h3>Título: {{ $noticia->titulo }}</h3>
                <p>Descripción: {{ $noticia->descripcion }}</p>
                <p>Contenido: {{ $noticia->contenido }}</p>
                <p>Autor: {{ $noticia->autor }}</p>
                <p>Fuente: {{ $noticia->fuente }}</p>
                <p>Imagen: {{ $noticia->imagen }}</p>
                <p>Fecha de publicación: {{ $noticia->fecha_publicacion }}</p>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/noticia.js') }}"></script>

</body>
</html>
