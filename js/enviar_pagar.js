$(document).ready(function () {
    obtenerTotal();
});

function obtenerTotal() {
    var id = $('.kame').attr("value");
    $.ajax({
        type: "POST",
        url: "../config/enviar_pagar.php",
        data: {id:id},
        beforeSend: function (response) {
            console.log("Buscando precio ....")
        },
        success: function (response) {
            console.log("success->"+response);
            mostrarprecio(response);
        },
        error: function(error) {
            console.log('Error ->' + error);
        }
    });
}

function mostrarprecio(response) {
    var html2;
    const obj = $.parseJSON(response);
    html2 = "";
    for (var index = 0; index < obj.length; index++) {
       html2+= '<div class="row align-items-center">'
        html2+='<div class="col-12 ">'
            html2+='<div>'
                html2+='<p class="float-right mr-5">$'+obj[index].precio_total+'</p>'
            html2+='</div>'
        html2+='</div>'
    html2+='</div>'
    }
    $(".precio").html(html2);
}