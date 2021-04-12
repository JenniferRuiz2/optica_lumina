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

        console.log(estado);
        console.log(ciudad);
        console.log(colonia);
        console.log(calle);
        console.log(numero);
        console.log(cp);
        console.log(ecalles);
        console.log(referencia);
        console.log(telefono);


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
                    var respuesta = $.parseJSON(respuesta);
                    if (respuesta.statusCode == 200) {
                        //console.log('success->' + respuesta);
                        $("#respuesta").html("<div class='alert alert-success' role='alert'><button type='button' " +
                            "class='close' data-dismiss='alert' arial-label='Close'><span aria-hidden='true'>&times;</span>" +
                            "</button> Datos enviados corectamente" +
                            "</div>");
                    } else if (respuesta.statusCode == 201) {
                        //console.log('Error js');
                        $("#respuesta").html("<div class='alert alert-danger' role='alert'><button type='button' " +
                            "class='close' data-dismiss='alert' arial-label='Close'><span aria-hidden='true'>&times;</span>" +
                            "</button>Existe un error al cargar tus datos</div>");
                    }
                }
            });
        } else {
            $("#respuesta").html("<div class='alert alert-danger' role='alert'><button type='button' " +
                "class='close' data-dismiss='alert' arial-label='Close'><span aria-hidden='true'>&times;</span>" +
                "</button>LLena todos los campos</div>");
        }
    });
}