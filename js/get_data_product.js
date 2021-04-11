$(document).ready(function() {
    getValueProduct();
});

function getValueProduct() {
    $("div[id=enviardata]").click(function() {
        enviardata($("#prodId").val());
    });
}

function enviardata(data) {
    $.ajax({
        type: "POST",
        url: "../config/recuperar_producto.php",
        data: { data: data },
        beforeSend: function(response) {
            console.log('Buscando producto');
        },
    });
}