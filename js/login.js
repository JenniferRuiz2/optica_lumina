$(document).ready(function() {
    login();
});

function login() {
    $("#btn").click(function() {
        $user = $("#user").val();
        $pass = $("#pass").val();
        if ($user != "" && $pass != "") {
            ajaxLogin($user, $pass);
        } else {
            $("#respuesta").html("<div class='alert alert-danger' role='alert'><button type='button' " +
                "class='close' data-dismiss='alert' arial-label='Close'><span aria-hidden='true'>&times;</span>" +
                "</button>LLena todos los campos</div>");
        }
    });
}

function ajaxLogin(user, password) {
    $.ajax({
        url: "../config/login.php",
        type: "POST",
        timeout: 2000,
        async: true,
        data: {
            user: user,
            pass: pass
        },
        cache: false,
        success: function(respuesta) {
            console.log(respuesta);
        },
        error: function(respuesta) {
            console.log("error");
        }
    });
}