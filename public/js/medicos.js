listarMedicos();

function listarMedicos() {
    var resultado = document.getElementById('listado-medicos');
   
    var formdata = new FormData();

    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    formdata.append('_token', csrfToken);

    var ajax = new XMLHttpRequest();

    ajax.open('POST', '/listarMedicos');

    ajax.onload = function () {

        var str="";

        if (ajax.status == 200) {

            var json = JSON.parse(ajax.responseText);
            
            str+="<div class='row'>";
            
            json.forEach(function(medico) {
                str+="<div class='col'>";
                str+="<h3>" + medico.nombre + " " + medico.apellido + "</h3>";
                str+="<p>Especialidad: " + medico.especialidad + "</p>";
                str+="<p>Descripción: " + medico.descripcion + "</p>";
                str += "<button class='btn-editar' onclick='irAChat(" + medico.id + ")'>Chatear</button>";
                str += "<button class='btn-editar' onclick='irAMedicoPerfil(" + medico.id + ")'>Ver Perfil</button>";
                str+="</div>";

            });
            str+="</div>";

            resultado.innerHTML = str;

        } else {
            resultado.innerText = 'Error';
        }
    }
    ajax.send(formdata);
}

function irAChat(id) {
    window.location.href = "/chatify/" + id;
}

function irAMedicoPerfil(id) {
    window.location.href = "/perfil-medico/" + id;
}

