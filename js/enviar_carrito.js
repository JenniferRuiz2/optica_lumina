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
        $(window).attr('location','../pages/carritoView.php');
        console.log(marca);
        console.log(descrip);
        console.log(cantidad);
        console.log(existencia);
        console.log(precio);
        enviarData(marca, descrip, cantidad, existencia, precio);
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


function enviarData (marca, descrip, cantidad, existencia, precio) {
    $.ajax({
        type: "POST",
        url: "../config/enviarData.php",
        data: {
            marca:marca,
            descrip:descrip,
            cantidad:cantidad,
            existencia:existencia,
            precio:precio
        },
        dataType: "dataType",
        beforSend: function (response) {
            
        },
        success: function (response) {
            
        },
        error: function(error) {
            console.log('Error ->' + error);
        }
    });
}
