$(document).ready(function () {
    registroDatosEnvios();
});

function registroDatosEnvios(){
    $("#btn").click(function(){
        var estado = $("#estado");
        var ciudad = $("#ciudad");
        var colonia = $("#colonia");
        var calle = $("#calle");
        var numero = $("#numero");
        var cp = $("#cp");
        var ecalles = $("#ecalles");
        var referencia = $("#referencia");
        var telefono = $("#telefono");
 
        if (estado != " " && ciudad !=" " && colonia != " " && calle != " " && numero != " " && cp != " " && ecalles != " " && referencia != " " && telefono != " ") {
            $.ajax({
                url: "config/rEnvios.php",
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
                success: function(respuesta){
                    var respuesta = JSON.parse(respuesta);
                    if (respuesta.statusCode == 200) {
                        console.log('success->'+respuesta);
                    } else if(respuesta.statusCode == 201){
                        console.log('Error js');
                    }

                }
            });
        } else {
            console.log('llena todos los campos animal');
        }
    });
}