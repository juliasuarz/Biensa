// Inicializar el mapa
var map = L.map('map');

// Añadir capa de OpenStreetMap
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// Obtener la ubicación actual del usuario
navigator.geolocation.getCurrentPosition(function(position) {
    var userLat = position.coords.latitude;
    var userLng = position.coords.longitude;

    // Establecer la vista del mapa en la ubicación del usuario
    map.setView([userLat, userLng], 13);

    // Añadir una ruta de ejemplo con la ubicación actual del usuario
    L.Routing.control({
        waypoints: [
            L.latLng(userLat, userLng) // Ubicación actual del usuario
        ],
        routeWhileDragging: true
    }).addTo(map);
}, function(error) {
    console.error("Error getting user location: " + error.message);
    // Si hay un error al obtener la ubicación del usuario, se muestra una ruta predeterminada
    L.Routing.control({
        waypoints: [
            L.latLng(41.34974387646843, 2.1077375258820665), // Coordenadas de inicio predeterminadas
            L.latLng(41.34974387646843, 2.1077375258820665) // Coordenadas de la Puerta del Sol, Madrid
        ],
        routeWhileDragging: true
    }).addTo(map);

    // Si no se puede obtener la ubicación del usuario, centra el mapa en las coordenadas predeterminadas
    map.setView([41.34974387646843, 2.1077375258820665], 13);
});

// Obtener los marcadores y agregarlos al mapa cuando se cargue la página
document.addEventListener("DOMContentLoaded", function() {
    getMarkers();
});

function getMarkers() {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.readyState == XMLHttpRequest.DONE) {
            if (xhr.status == 200) {
                // Procesar los datos recibidos
                var data = JSON.parse(xhr.responseText);
                if (Array.isArray(data)) {
                    data.forEach(function(markerData) {
                        // Verifica si los datos del marcador son válidos
                        if (markerData && markerData.coordenadas) {
                            // Divide las coordenadas
                            var coordenadas = markerData.coordenadas.split(',');
                            if (coordenadas.length == 2) {
                                // Crea el marcador si las coordenadas son válidas
                                var latitud = parseFloat(coordenadas[0]);
                                var longitud = parseFloat(coordenadas[1]);
                                if (!isNaN(latitud) && !isNaN(longitud)) {
                                    // Decodifica la URL de la imagen
                                    var imagenUrl = decodeURIComponent(markerData.imagen);

                                    // Crea el contenido del popup con el nombre y la imagen
                                    var popupContent = '<div>' +
                                                        '<h3>' + markerData.nombre + '</h3>' +
                                                        '<img src="' + imagenUrl + '" width="100">' +
                                                        '</div>';

                                    // Agrega el marcador al mapa
                                    var marker = L.marker([latitud, longitud]);

                                    // Cuando el mapa esté listo, abre el popup
                                    map.whenReady(function() {
                                        marker.addTo(map).bindPopup(popupContent).openPopup();
                                    });
                                } else {
                                    console.error("Coordenadas inválidas:", coordenadas);
                                }
                            } else {
                                console.error("Formato de coordenadas incorrecto:", markerData.coordenadas);
                            }
                        } else {
                            console.error("Datos de marcador incompletos:", markerData);
                        }
                    });
                } else {
                    console.error("Los datos recibidos no son un array:", data);
                }
            } else {
                console.error("Error al obtener los marcadores:", xhr.statusText);
                // Mostrar un mensaje de error al usuario
                alert("Se produjo un error al obtener los marcadores. Por favor, inténtelo de nuevo más tarde.");
            }
        }
    };

    // Configurar la solicitud POST al controlador Laravel que manejará la solicitud
    xhr.open('POST', '/mostrar-marcadores');
    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    if (csrfToken) {
        xhr.setRequestHeader("X-CSRF-TOKEN", csrfToken); // Asegúrate de enviar el token CSRF
        xhr.send();
    } else {
        console.error("No se encontró el token CSRF");
        // Mostrar un mensaje de error al usuario
        alert("Se produjo un error al obtener los marcadores. Por favor, inténtelo de nuevo más tarde.");
    }
}

listarmapa();

function listarmapa() {
    var resultado = document.getElementById('listado-mapa');
   
    var formdata = new FormData();

    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    formdata.append('_token', csrfToken);

    var ajax = new XMLHttpRequest();

    ajax.open('POST', '/mostrar-marcadores');

    ajax.onload = function () {

        var str="";

        if (ajax.status == 200) {
            var json = JSON.parse(ajax.responseText);
            var str = "<div class='row'>";
        
            json.forEach(function(mapa) {
                str += "<div class='col'>";
                str += "<h3>" + mapa.nombre + "</h3>";
                
                // Decodificar la URL de la imagen
                var decodedUrl = decodeURIComponent(mapa.imagen);
                
                str += "<img src='" + decodedUrl + "' width='100'></img>";
                // str += "<button class='btn-editar' onclick='irAChat(" + medico.id + ")'>Chatear</button>";
                // str += "<button class='btn-editar' onclick='irAMedicoPerfil(" + medico.id + ")'>Ver Perfil</button>";
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

