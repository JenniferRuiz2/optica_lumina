$(document).ready(function() {
    cambiarPass();
});

function cambiarPass() {
    $("#btn").click(function() {
        var p1 = $("#p1").val();
        var p2 = $("#p2").val();
        var email = $("#email").val();

        if (p1 != "" && p2 != "") {
            if (p1 == p2) {
                $.ajax({
                    type: "POST",
                    url: "../config/cambiarRePass.php",
                    timeout: 2000,
                    async: true,
                    data: {
                        p1: p1,
                        p2: p2,
                        email: email
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
                console.log("Las contraseñas no coinciden");
            }
        } else {
            console.log("Llena todos los campos");
        }

    });
}