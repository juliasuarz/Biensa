
function Evento(id) {
    var resultado = document.getElementById('evento');
   
    var ajax = new XMLHttpRequest();

    ajax.open('GET', '/evento/' + id);

    ajax.onload = function () {
        if (ajax.status == 200) {
            var evento = JSON.parse(ajax.responseText); // Parsea el JSON recibido
            var str = "<div class='row'>";
            
            str += "<div class='col'>";
            str += "<h3>" + evento.title + "</h3>"; // Cambiado de evento.nombre a evento.title
            str += "<p>Descripción: " + evento.description + "</p>"; // Agregado el campo description
            str += "<p>Ubicación: " + evento.location + "</p>"; // Agregado el campo location
            str += "<p>Fecha de inicio: " + evento.start_date + "</p>"; // Agregado el campo start_date
            str += "<p>Fecha de finalización: " + evento.end_date + "</p>"; // Agregado el campo end_date
            str += "<p>Capacidad máxima: " + evento.capacity + "</p>"; // Agregado el campo capacity
            str += "<p>Organizador: " + evento.organizer_name + "</p>"; // Agregado el campo organizer_name
            str += "<p>Correo electrónico del organizador: " + evento.organizer_email + "</p>"; // Agregado el campo organizer_email
            str += "<p>Número de contacto: " + evento.contact_number + "</p>"; // Agregado el campo contact_number
            str += "<img src='" + evento.poster_image_url + "' width='100' alt='Poster del evento'>"; // Agregado el campo poster_image_url
            str += "<p>URL del sitio web del evento: <a href='" + evento.web_url + "'>" + evento.web_url + "</a></p>"; // Agregado el campo web_url
            str += "<button class='btn-editar' onclick='irAMedicoPerfil(" + evento.id + ")'>Ver Perfil</button>";
            str += "</div>";
    
            str += "</div>";
    
            resultado.innerHTML = str;
        } else {
            resultado.innerText = 'Error';
        }
    }
    ajax.send();
    
}
