$(document).ready(function() {
    getStateSelected();
    searchDiseas();
    searchCategori();
    searchBrand();
});


function getStateSelected(){
    $('.menuDiseas').change(function(){
        searchDiseas($('.menuDiseas').val());
    });

    $('.menuCategori').change(function(){
        searchCategori($('.menuCategori').val());
    });

    $('.menuBrand').change(function(){
        searchBrand($('.menuBrand').val());
        var name  = $('.menuBrand').val();
        console.log(name);
    });
}

function searchDiseas (state){
    $.ajax({
        method: 'POST',
        url: "../config/searchDiseas.php",
        data: {state:state},
        beforeSend:function(response){
            console.log("Buscando informcaion...");
        },
        success: function (response) {
            if (response == '') {
            }else{
                console.log('Success -> '+ response);
            agregarDiseas(response);
            }
        },
        error: function(error){
            console.log('Error ->'+ error);
        }
    });
}

function searchCategori(stateCategori){
    $.ajax({
        method: 'POST',
        url: "../config/searchCategori.php",
        data: {stateCategori:stateCategori},
        beforeSend:function(responseCategori){
            console.log("Buscando informcaion...");
        },
        success: function (responseCategori) {
            if (responseCategori == '') {
            }else{
                console.log('Success -> '+ responseCategori);
            agregarCategori(responseCategori);
            }
            
        },
        error: function(error){
            console.log('Error ->'+ error);
        }
    });
}

function searchBrand (stateBrand){
    $.ajax({
        method: 'POST',
        url: "../config/searchBrand.php",
        data: {stateBrand:stateBrand},
        beforeSend:function(responseBrand){
            console.log("Buscando informcaion...");
        },
        success: function (responseBrand) {
            console.log('Success -> '+ responseBrand);
            agregarBrand(responseBrand);
        },
        error: function(error){
            console.log('Error ->'+ error);
        }
    });
}

function agregarBrand(responseBrand){
    var html;
    const obj = $.parseJSON(responseBrand);
    html = "";
    for (var index = 0; index < obj.length; index++) {
    html += "<div class='col-lg-4'>";
    html += "<div class='card border-0 border-radius shadow-card ' style='width: 20rem;'>";
    html += "<div class='card-img-top'>";
    html += "<img class='border-radius' src='../images/lentes.png' alt=''style='width: 100%;'>";
    html += "</div>";
    html += "<div class='card-body' id='enviardata'>";
    html += "<p class='font-weight-bold text-center'>"+obj[index].modelo+"</p>";
    html += "<p class='text-center mt-0'>"+obj[index].descripcion+"</p>";
    html += "<p class='text-center mt-0'>"+obj[index].color+"</p>";
    html += "<input id='prodId' name='prodId' type='hidden' value='"+obj[index].id_armazon+"'>";
    html += "</div>";
    html += "<div class='card-footer text-center border-0 bg-ft-card cf-border-radius' >"+obj[index].precio+"</div>";
    html += "</div></div>";
    }
    $(".card-producto").html(html);
}

function agregarDiseas(responseDiseas){
    var html;
    const obj = $.parseJSON(responseDiseas);
    html = "";
    for (var index = 0; index < obj.length; index++) {
    html += "<div class='col-lg-4'>";
    html += "<a href = '#'><div class='card border-0 border-radius shadow-card' style='width: 20rem;'>";
    html += "<div class='card-img-top'>";
    html += "<img class='border-radius' src='../images/lentes.png' alt=''style='width: 100%;'>";
    html += "</div>";
    html += "<div class='card-body'>";
    html += "<p class='font-weight-bold text-center'>"+obj[index].modelo+"</p>";
    html += "<p class='text-center mt-0'>"+obj[index].descripcion+"</p>";
    html += "<p class='text-center mt-0'>"+obj[index].color+"</p>";
    html += "</div>";
    html += "<div class='card-footer text-center border-0 bg-ft-card cf-border-radius'>"+obj[index].precio+"</div>";
    html += "</div></a></div>";
    }
    $(".card-producto").html(html);
}

function agregarCategori(responseCategori){
    var html;
    const obj = $.parseJSON(responseCategori);
    html = "";
    for (var index = 0; index < obj.length; index++) {
    html += "<div class='col-lg-4'>";
    html += "<a href = '#'><div class='card border-0 border-radius shadow-card' style='width: 20rem;'>";
    html += "<div class='card-img-top'>";
    html += "<img class='border-radius' src='../images/lentes.png' alt=''style='width: 100%;'>";
    html += "</div>";
    html += "<div class='card-body'>";
    html += "<p class='font-weight-bold text-center'>"+obj[index].modelo+"</p>";
    html += "<p class='text-center mt-0'>"+obj[index].descripcion+"</p>";
    html += "<p class='text-center mt-0'>"+obj[index].color+"</p>";
    html += "</div>";
    html += "<div class='card-footer text-center border-0 bg-ft-card cf-border-radius'>"+obj[index].precio+"</div>";
    html += "</div></a></div>";
    }
    $(".card-producto").html(html);
}