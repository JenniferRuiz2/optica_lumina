$(document).ready(function() {
    registroUsuarios();
});

function registroUsuarios() {
    $("#btn").click(function() {
        var nombre = $("#nombre").val();
        var apellidoP = $("#apellidop").val();
        var apellidoM = $("#apellidom").val();
        var sexo = $("#sexo").val();
        var user = $("#user").val();
        var pass = $("#pass").val();

        if (nombre != "" && apellidoP != "" && apellidoM != "" && sexo != "" && user != "" && pass != "") {
            $.ajax({
                url: "../config/rUsuarios.php",
                type: "POST",
                timeout: 2000,
                async: true,
                data: {
                    nombre: nombre,
                    apellidoP: apellidoP,
                    apellidoM: apellidoM,
                    sexo: sexo,
                    user: user,
                    pass: pass
                },
                cache: false,
                success: function(respuesta) {
                    var respuesta = JSON.parse(respuesta);
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