<<<<<<< Updated upstream
<?php
    session_start();
    include('../config/conexion.php');
    //$sesion = $_SESSION['email'];
?>
=======
>>>>>>> Stashed changes
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
    <title>Lumina Optica</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
       
        <div id="page-content-wrapper">
           <?php
            include("../components/nav_bar.php")
           ?>
            <div class="container-fluid ">
                <div class="row align-items-center ">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <section>
                            <div class="row justify-content-center">
                                <img class="img-tam" src="../images/anuncio1.png" alt="">
                            </div>
                            <div class="row justify-content-center">
                                <img class="img-tam" src="../images/anuncio1.png" alt="">
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <section>
                            <div class="row justify-content-center">
                                <img class="img-tam-ind" src="../images/anuncio1.png" alt="">
                            </div>
                        </section>
                    </div>
                </div>
                <div class="row margin font-weight-bold mt-1">
                    <p>Llegados Recientemente</p>
                </div>
                <div class="center">
                    <div class="row mt-1">
                        <div class="col">
                               <a href = "../pages/view_product.php"><div class="card border-0 border-radius shadow-card" style="width: 20rem;">
                                    <div class="card-img-top">
                                        <img class="border-radius" src="../images/lentes.png" alt=""
                                            style="width: 100%;">
                                    </div>
                                    <div class="card-body">
                                        <p class="font-weight-bold text-center">Polarid</p>
                                        <p class="text-center mt-0">Lente oftalmico hombre</p>
                                        <p class="text-center mt-0">Polaroid B0B31 Negro</p>
                                    </div>
                                    <div class="card-footer text-center border-0 bg-ft-card cf-border-radius">$ 459.00
                                    </div>
                                </div></a>
                        </div>
                        <div class="col">
                            <div class="card border-0 border-radius shadow-card" style="width: 20rem;">
                                <div class="card-img-top">
                                    <img class="border-radius" src="../images/lentes.png" alt="" style="width: 100%;">
                                </div>
                                <div class="card-body">
                                    <p class="font-weight-bold text-center">Polarid</p>
                                    <p class="text-center mt-0">Lente oftalmico hombre</p>
                                    <p class="text-center mt-0">Polaroid B0B31 Negro</p>
                                </div>
                                <div class="card-footer text-center border-0 bg-ft-card cf-border-radius">$ 459.00</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0 border-radius shadow-card" style="width: 20rem;">
                                <div class="card-img-top">
                                    <img class="border-radius" src="../images/lentes.png" alt="" style="width: 100%;">
                                </div>
                                <div class="card-body">
                                    <p class="font-weight-bold text-center">Polarid</p>
                                    <p class="text-center mt-0">Lente oftalmico hombre</p>
                                    <p class="text-center mt-0">Polaroid B0B31 Negro</p>
                                </div>
                                <div class="card-footer text-center border-0 bg-ft-card cf-border-radius">$ 459.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <hr>
    </div>
    <?php
        
        include("../components/footer.php");
        
    ?>
</body>

</html>