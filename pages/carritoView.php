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
    <?php
        include("../components/head.php");
    ?>
    <title>Lumina Optica - Carrito</title>
</head>

<body>
   <?php
    include("../components/nav_bar.php")
   ?>
    <div class="container-fluid">
        <div class="border-radius shadow-card w-100 h-100 bg-white mt-3 center">
            <div class="row ">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 center h-50 w-50">
                    <section>
                        <div class="h-50 w-100 container-fluid">
                            <div class="center container-fluid">
                                <div class="row">
                                    <div class="col">
                                        <img class="w-100" src="../images/lentes.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 center h-50 w-50">
                    <section>
                        <div class="h-100 w-100 container-fluid">
                            <div class="center">
                                <div class="w-100 h-100 mt-4">
                                    <p class="font-weight-bold text-left letter-size">Polaroid</p>
                                    <p class="font-weight-normal text-left letter-size">LENTE OFTÁLMICO UNISEX POLAROID
                                        BOB31 NEGRO</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 center h-50 w-50">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 center h-50 w-50">
                                <section>
                                    <div class="h-100 w-100 container-fluid">
                                        <div class="center">
                                            <div class="w-100 h-100 mt-4">
                                                <p class="font-weight-bold text-left letter-size">Precio Unitario</p>
                                                <p class="font-weight-normal text-left letter-size text-center">$450</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 center h-50 w-50">
                                <section>
                                    <div class="h-100 w-100 container-fluid">
                                        <div class="center">
                                            <div class="w-100 h-100 mt-4">
                                                <p class="font-weight-bold text-left letter-size">Precio Total</p>
                                                <p class="font-weight-normal text-left letter-size text-center">$450</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-12 ">
                <div>
                    <p class="float-right mr-5 mt-4">Total</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 ">
                <div>
                    <p class="float-right mr-5">$450</p>
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-primary float-right mr-2">Pagar todo</button>
        </div>
    </div>
    <div></div>

    <div class="container mt-5">
        <hr>
    </div>
    
    <?php
        include("../components/footer.php");
        include("../components/imports_js.php");
    ?>

</body>

</html>
<?php
    }
?>