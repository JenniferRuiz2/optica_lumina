$(document).ready(function() {
    getValueProduct();
});

function getValueProduct() {
    $("div[id=enviardata]").click(function() {
        enviardata($("#prodId").val());
        console.log($("#prodId").val());
    });
}

function enviardata(datos) {
    $.ajax({
        type: "POST",
        url: "../config/recuperar_producto.php",
        data: { datos: datos },
        beforeSend: function(response) {
            console.log('Buscando producto');
        },
    });
}