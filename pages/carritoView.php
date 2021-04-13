<?php
    session_start();
    include('../config/conexion.php');
    $sesion = $_SESSION['email'];

    if(!isset($sesion)){
        header('location: ../pages/principal_ecommerce.php');
    }else{

    $id_usuario=$_GET['kame'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include("../components/imports_js.php");
        include("../components/head.php");
    ?>
    <script src="../js/procesoPagar.js"></script>
    <title>Lumina Optica - Carrito</title>
</head>
<script src="../js/mostrar_carrito.js"></script>
<script src="../js/enviar_pagar.js"></script>
<body>
   <?php
    include("../components/nav_bar.php")
   ?>
   <?php
            echo '<p class ="kame" hidden = "true" value="'.$id_usuario.'">'
        ?>
    <div class="container-fluid card-producto-carrito">
    </div>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-12 ">
                <div>
                    <p class="float-right mr-5 mt-4">Total</p>
                </div>
            </div>
        </div>
        <div class="precio"></div>
        <div>
            <button class="btn btn-primary float-right mr-2 payment">Pagar todo</button>
        </div>
    </div>
    <div></div>

    <div class="container mt-5">
        <hr>
    </div>
    
    <?php
        include("../components/footer.php");
       
    ?>

</body>

</html>
<?php
    }
?>