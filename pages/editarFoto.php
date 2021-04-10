<?php
    session_start();
    include('../config/conexion.php');
    $sesion = $_SESSION['email'];

    if(!isset($sesion)){
        header('location: ../pages/principal_ecommerce.php');
    }else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include("../components/imports_js.php");
        include("../components/head.php");
    ?>
    <script src="../js/subirFoto.js"></script>
    <title>Perfil- Editar datos</title>
</head>

<body>
    <!--Navbar-->
    <?php
            include("../components/nav_bar_login.php");
        ?>
    <!--Navbar-->

    <br><br>
    <div class="container" style="color: #f8fcff;">
        <h4 class="text-center text1">Editar datos</h4>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-2 "></div>
                <div class="col-8 ">
                    <div class="card sombras border">
                        <div class="card-body">
                            <form id="formulario" name="formulario" class="col-12" action="" method="POST"
                                target="request">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <p class="text1"> Agrega una foto </p>
                                        </div>
                                        <div class="col">
                                            <input type="file" name="foto" id="foto">
                                        </div>
                                    </div>
                                </div>
                                <input id="btn" name="btn" type="button" class="form-control btn-color"
                                    style="color: #FFFFFF;" value="EDITAR" />
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
    <!--Formulario de inicio-->
    <br>
    <!--Footer-->
    <?php 
        include("../components/footer.php");
    ?>
    <!--Footer-->
</body>

</html>
<?php
    }
?>