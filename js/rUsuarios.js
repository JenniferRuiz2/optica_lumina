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
                    var respuesta = $.parseJSON(respuesta);
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