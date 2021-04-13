$(document).ready(function () {
    mostrarProductosCarrito();
});

function mostrarProductosCarrito() {
    var id_usuario=$('.kame').attr('value');
    console.log(id_usuario);

    $.ajax({
        type: "POST",
        url: "../config/mostrar_carrito.php",
        data: {id_usuario:id_usuario},
        beforeSend: function(response){
            console.log('Buscand productos ...');
        },
        success: function (response) {
            console.log(response);
            mostrarproucto(response);
        },
        error: function(error) {
            console.log('Error ->' + error);
        }
    });
}

function mostrarproucto(response) {
    var html;
    const obj = $.parseJSON(response);
    html = "";
    for (var index = 0; index < obj.length; index++) {
        
       html+=' <div class="border-radius shadow-card w-100 h-100 bg-white mt-3">'
          html+='  <div class="row ">'
               html+=' <div class="col-lg-4 col-md-4 col-sm-12 col-12 center h-50 w-50">'
                   html+=' <section>'
                       html+=' <div class="h-50 w-100 container-fluid">'
                           html+=' <div class="center container-fluid">'
                              html+='  <div class="row">'
                                   html+=' <div class="col">'
                                       html+=' <img class="w-100" src="../images/lentes.png" alt="">'
                                   html+=' </div>'
                               html+=' </div>'
                           html+=' </div>'
                       html+=' </div>'
                   html+=' </section>'
                html+='</div>'
                html+='<div class="col-lg-3 col-md-4 col-sm-12 col-12 center h-50 w-50">'
                   html+=' <section>'
                       html+=' <div class="h-100 w-100 container-fluid">'
                           html+=' <div class="center">'
                                html+='<div class="w-100 h-100 mt-4">'
                                   html+=' <p class="font-weight-bold text-left letter-size">'+obj[index].nombre+'</p>'
                                   html+=' <p class="font-weight-normal text-left letter-size">'+obj[index].nombre+' '+obj[index].modelo+' '+obj[index].color+'</p>'
                               html+=' </div>'
                           html+=' </div>'
                       html+=' </div>'
                   html+=' </section>'
               html+=' </div>'
                html+='<div class="col-lg-5 col-md-4 col-sm-12 col-12 center h-50 w-50">'
                   html+=' <div class="container-fluid"' 
                       html+=' <div class="row">'
                           html+=' <div class="col-lg-6 col-md-6 col-sm-12 col-12 center h-50 w-50">'
                               html+=' <section>'
                                   html+=' <div class="h-100 w-100 container-fluid">'
                                       html+=' <div class="center">'
                                           html+=' <div class="w-100 h-100 mt-4">'
                                               html+=' <p class="font-weight-bold text-left letter-size">Precio Unitario</p>'
                                               html+=' <p class="font-weight-normal text-left letter-size text-center">$'+obj[index].precio+' X '+obj[index].cantidad+'</p>'
                                            html+='</div>'
                                        html+='</div>'
                                   html+=' </div>'
                                html+='</section>'
                           html+=' </div>'
                           html+=' <div class="col-lg-6 col-md-6 col-sm-12 col-12 center h-50 w-50">'
                              html+='  <section>'
                                   html+=' <div class="h-100 w-100 container-fluid">'
                                       html+=' <div class="center">'
                                           html+=' <div class="w-100 h-100 mt-4">'
                                               html+=' <p class="font-weight-bold text-left letter-size">Precio Total</p>'
                                               html+=' <p class="font-weight-normal text-left letter-size text-center total" value="'+obj[index].precio_total+'">$'+obj[index].precio_total+'</p>'
                                           html+=' </div>'
                                       html+=' </div>'
                                   html+=' </div>'
                               html+=' </section>'
                           html+=' </div>'
                       html+=' </div>'
                    html+='</div>'
               html+=' </div>'
           html+=' </div>'
        html+='</div>'
    }
    $(".card-producto-carrito").html(html);
}