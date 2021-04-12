$(document).ready(function () {
    getData();
    cantidadUp();
    cantidadDown();
});

function getData() {
    $(".enviar").click(function() {
        var marca = $('.modelo-color').attr('value');
        var descrip = $('.descripcion').attr('value');
        var cantidad = $('.cantidad').text();
        var existencia = $('.existencia').text();
        var precio = $('.precio').attr('value');
        var id = $('.id').attr('value');
        var id_armazon = $('.id-armazon').attr('value');
        $(window).attr('location','../pages/carritoView.php');
        console.log(marca);
        console.log(descrip);
        console.log(cantidad);
        console.log(existencia);
        console.log(precio);
        console.log(id);
        console.log(id_armazon);
        enviarData(id, id_armazon);
    });
}

function cantidadUp(){
    $('.up').click(function () { 
        var existencia = $('.existencia').text();
        var cantidad = $('.cantidad').text();
        var cant = parseInt(cantidad);
        var exist = parseInt(existencia);
        if (cant < exist) {
            $('.cantidad').text(cant+1);
        }
    });
}

function cantidadDown(){
    $('.down').click(function () { 
        var existencia = $('.existencia').text();
        var cantidad = $('.cantidad').text();
        var cant = parseInt(cantidad);
        var exist = parseInt(existencia);
        if (cant > 1) {
            $('.cantidad').text(cant-1);
        }
    });
}


function enviarData (id, id_armazon) {
    $.ajax({
        type: "POST",
        url: "../config/enviarData.php",
        data: {
            id,
            id_armazon
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
}
