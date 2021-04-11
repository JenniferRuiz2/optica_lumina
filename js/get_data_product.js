$(document).ready(function () {
    getValueProduct();
});

function getValueProduct(){
    $("div[id=enviardata]").click(function(){
        var id =$('#prodId').val();
        console.log(id);
        alert("has echo click");
    });
}