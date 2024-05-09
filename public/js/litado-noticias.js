listarNoticia();

function listarNoticia() { // Cambiado a listarEventos
    var resultado = document.getElementById('listado-noticias'); // Cambiado el ID

    var formdata = new FormData();

    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    formdata.append('_token', csrfToken);

    var ajax = new XMLHttpRequest();

    ajax.open('POST', '/listarNoticias'); // Cambiado a /listarEventos

    ajax.onload = function () {
        var str = "";

        if (ajax.status == 200) {
            var json = JSON.parse(ajax.responseText);
            str += "<div class='row'>";
            json.forEach(function (noticia) { // Cambiado a evento
                str += "<div class='col'>";
                // Decodificar la URL de la imagen
                var decodedUrl = decodeURIComponent(noticia.imagen);
                
                str += "<img src='" + decodedUrl + "' width='100'></img>";
                str += "<h3>" + noticia.titulo + "</h3>"; // Cambiado a noticia.titulo
                str += "<p>Descripción: " + noticia.descripcion + "</p>"; // Cambiado a noticia.descripcion
                str += "<p>Contenido: " + noticia.contenido + "</p>"; // Agregado el campo contenido
                str += "<p>Autor: " + noticia.autor + "</p>"; // Agregado el campo autor
                str += "<p>Fuente: " + noticia.fuente + "</p>"; // Agregado el campo fuente
                // str += "<p>Imagen: " + noticia.imagen + "</p>"; // Agregado el campo imagen
                str += "<p>Fecha de publicación: " + noticia.fecha_publicacion + "</p>"; // Agregado el campo fecha_publicacion
                str += "<button class='btn-editar' onclick='irAMedicoPerfil(" + noticia.id + ")'>Ver Perfil</button>";
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
    window.location.href = "/noticia/" + id;
}
