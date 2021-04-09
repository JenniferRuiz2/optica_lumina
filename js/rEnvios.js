$(document).ready(function() {
    registroDatosEnvios();
});

function registroDatosEnvios() {
    $('#boton').click(function() {
        var estado = $("#estado").val();
        var ciudad = $("#ciudad").val();
        var colonia = $("#colonia").val();
        var calle = $("#calle").val();
        var numero = $("#numero").val();
        var cp = $("#cp").val();
        var ecalles = $("#ecalles").val();
        var referencia = $("#referencia").val();
        var telefono = $("#telefono").val();

        if (estado != "" && ciudad != "" && colonia != "" && calle != "" && numero != "" && cp != "" && ecalles != "" && referencia != "" && telefono != "") {
            $.ajax({
                url: "../config/rEnvios.php",
                type: "POST",
                timeout: 2000,
                async: true,
                data: {
                    estado: estado,
                    ciudad: ciudad,
                    colonia: colonia,
                    calle: calle,
                    numero: numero,
                    cp: cp,
                    ecalles: ecalles,
                    referencia: referencia,
                    telefono: telefono
                },
                cache: false,
                success: function(respuesta) {
                    var respuesta = JSON.parse(respuesta);
                    if (respuesta.statusCode == 200) {
                        console.log('success->' + respuesta);
                    } else if (respuesta.statusCode == 201) {
                        console.log('Error js');
                    }

                }
            });
        } else {
            console.log('llena todos los campos animal');
        }
    });
}