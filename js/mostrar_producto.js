$(document).ready(function() {
    getdata();
});

function getdata() {
     $.ajax({
         type: "POST",
         url: "../config/recuperar_producto.php",
         data: {data:data},
         success: function (response) {
             console.log(response);
         }
     });
}