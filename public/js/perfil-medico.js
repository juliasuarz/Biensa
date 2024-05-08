
function PerfilMedicos(id) {
    var resultado = document.getElementById('perfil-medico');
   
    var ajax = new XMLHttpRequest();

    ajax.open('GET', '/perfilMedico/' + id);

    ajax.onload = function () {
        if (ajax.status == 200) {
            var medico = JSON.parse(ajax.responseText); // Parsea el JSON recibido
            var str = "<div class='row'>";
            
            str += "<div class='col'>";
            str += "<h3>" + medico.nombre + " " + medico.apellido + "</h3>";
            str += "<p>Especialidad: " + medico.especialidad + "</p>";
            str += "<p>Descripción: " + medico.descripcion + "</p>";
            str += "<button class='btn-editar' onclick='irAChat(" + medico.id + ")'>Chatear</button>";
            str += "<button class='btn-editar' onclick='irAMedicoPerfil(" + medico.id + ")'>Ver Perfil</button>";
            str += "</div>";

            str += "</div>";

            resultado.innerHTML = str;
        } else {
            resultado.innerText = 'Error';
        }
    }
    ajax.send();
}
