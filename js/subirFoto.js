$(document).ready(function() {
    cambiarFoto();
});

function cambiarFoto() {
    $("#btn").click(function() {
        var formData = new FormData();
        var files = $('#foto')[0].files[0];
        formData.append('file', files);
        $.ajax({
            url: '../config/subirFoto.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            cache: false,
            success: function(respuesta) {
                var respuesta = $.parseJSON(respuesta);
                if (respuesta.statusCode == 200) {
                    console.log('success->' + respuesta);
                } else if (respuesta.statusCode == 201) {
                    console.log('Error js');
                }
            }
        });
        return false;
    });
}