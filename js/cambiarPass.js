$(document).ready(function() {
    cambiarPass();
});

function cambiarPass() {
    $('#btn').click(function() {
        var telefono = $("#telefono").val();
        var pass = $("#pass").val();

        $.ajax({
            url: "../config/cambiarPass.php",
            type: "POST",
            timeout: 2000,
            async: true,
            data: {
                telefono: telefono,
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

    });
}