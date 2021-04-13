$(document).ready(function () {
    obtenerID();
});

function obtenerID() {
    var id = $('.kame').attr('value');
    obtenerDatosEnvio(id);
}

function obtenerDatosEnvio(id){
    $.ajax({
        type: "POST",
        url: "../config/obtenerDatosEnvio.php",
        data: {id:id},
        dataType: "dataType",
        success: function (response) {
            console.log(response);
        }
    });
}