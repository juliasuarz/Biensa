

function Evento(id) {
    var resultado = document.getElementById('evento');
   
    var ajax = new XMLHttpRequest();

    ajax.open('GET', '/evento/' + id);

    ajax.onload = function () {
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
    ajax.send();
}
