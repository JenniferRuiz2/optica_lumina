$(document).ready(function() {
    login();
});

function login() {
    $("#btn").on('click', function() {
        var user = $("#user").val();
        var pass = $("#pass").val();
        console.log(user);
        console.log(pass);
        if (user != "" && pass != "") {
            ajaxLogin(user, pass);
        } else {
            $("#respuesta").html("<div class='alert alert-danger' role='alert'><button type='button' " +
                "class='close' data-dismiss='alert' arial-label='Close'><span aria-hidden='true'>&times;</span>" +
                "</button>LLena todos los campos</div>");
        }
    });
}

function ajaxLogin(user, pass) {
    $.ajax({
        type: "POST",
        url: "../config/login.php",
        data: {
            user: user,
            pass: pass
        },
        dataType: "dataType",
        beforSend: function(response) {
            console.log("Enviando datos");
        },
        success: function(response) {

        },
        error: function(error) {
            console.log('Error ->' + error);
        }
    });
}