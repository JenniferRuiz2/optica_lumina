$(document).ready(function() {
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    sumar();
    $('.collapse').collapse();
});

function sumar() {
    document.getElementById('#up').stepUp();
}