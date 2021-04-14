$(document).ready(function() {
    registroUsuarios();
});

function registroUsuarios() {
    $("#btn").click(function() {
        var nombre = $("#nombre").val();
        var apellidoP = $("#apellidop").val();
        var apellidoM = $("#apellidom").val();
        var sexo = $("input:radio[name=sexo]:checked").val();
        var user = $("#user").val();
        var pass = $("#pass").val();

        console.log(nombre);
        console.log(apellidoP);
        console.log(apellidoM);
        console.log(sexo);
        console.log(user);
        console.log(pass);

            $.ajax({
                type: "POST",
                url: "../config/rUsuarios.php",
                data: {
                    nombre: nombre,
                    apellidoP: apellidoP,
                    apellidoM: apellidoM,
                    sexo: sexo,
                    user: user,
                    pass: pass
                },
                dataType: "dataType",
                beforSend: function (response) {
                    console.log('Buscando informacion...');
                },
                success: function (response) {
                    console.log(response);
                    
                },
                error: function(error) {
                    console.log('Error ->' + error);
                }
            });
        

    });
}