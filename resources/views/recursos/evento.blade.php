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
    <div class="menu menu-header">
        <div class="menu-p">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <img class="logo-menu" src="{{ asset('logoBiensaFooter.png') }}" alt="foto-fondo">
        
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a class="nav-link" href="{{ route('noticias') }}">Noticias</a>
                      <a class="nav-link" href="{{ route('eventos') }}">Eventos</a>
                      <a class="nav-link" href="{{ route('mapa') }}">Centros</a>
                      <a class="nav-link" href="{{ route('chatify') }}">Chat</a>
                    </div>
                </div>

            </div>
            </nav>
        </div>
    </div>

    <h1>Lista de eventos</h1>

    <div>
        <h1>Detalles del Evento</h1>
        <h3>ID del evento: {{ $evento->id }}</h3>
        <h3>Título: {{ $evento->title }}</h3>
        <p>Descripción: {{ $evento->description }}</p>
        <p>Ubicación: {{ $evento->location }}</p>
        <p>Fecha de inicio: {{ $evento->start_date }}</p>
        <p>Fecha de finalización: {{ $evento->end_date }}</p>
        <p>Capacidad máxima: {{ $evento->capacity }}</p>
        <p>Organizador: {{ $evento->organizer_name }}</p>
        <p>Correo electrónico del organizador: {{ $evento->organizer_email }}</p>
        <p>Número de contacto: {{ $evento->contact_number }}</p>
        <img src="{{ $evento->poster_image }}" alt="Póster del evento">
    </div>

    <script src="{{ asset('js/evento.js') }}"></script>

</body>
</html>
