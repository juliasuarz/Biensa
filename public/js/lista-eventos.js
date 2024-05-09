listarEventos();

function listarEventos() { // Cambiado a listarEventos
    var resultado = document.getElementById('listado-eventos'); // Cambiado el ID

    var formdata = new FormData();

    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    formdata.append('_token', csrfToken);

    var ajax = new XMLHttpRequest();

    ajax.open('POST', '/listarEventos'); // Cambiado a /listarEventos

    ajax.onload = function () {
        var str = "";

        if (ajax.status == 200) {
            var json = JSON.parse(ajax.responseText);
            str += "<div class='row'>";
            json.forEach(function (evento) { // Cambiado a evento
                str += "<div class='col'>";
                // Decodificar la URL de la imagen
                var decodedUrl = decodeURIComponent(evento.poster_image);
                
                str += "<img src='" + decodedUrl + "' width='100'></img>";
                str += "<h3>" + evento.title + "</h3>"; // Cambiado a evento.nombre
                str += "<p>Descripción: " + evento.descripcion + "</p>"; // Cambiado a evento.descripcion
                str += "<p>Fecha de inicio: " + evento.start_date + "</p>"; 
                str += "<button class='btn-editar' onclick='irAMedicoPerfil(" + evento.id + ")'>Ver Perfil</button>";
                // Añade aquí cualquier otro detalle del evento que desees mostrar
                str += "</div>";
            });
            str += "</div>";
            resultado.innerHTML = str;
        } else {
            resultado.innerText = 'Error';
        }
    }
    ajax.send(formdata);
}



function irAMedicoPerfil(id) {
    window.location.href = "/evento/" + id;
}
