<?php
    session_start();
    include('../config/conexion.php');
    $sesion = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include("../components/head.php");
    ?>
    <title>Lumina Optica</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <div class="" id="sidebar-wrapper">
            <div class="sidebar-heading shadow-card"><img src="../images/FOTO_LUMINA_BIEN.png" alt=""></div>
            <div class="list-group list-group-flush shadow-card">
                <p class="list-group-item border-0 font-weight-bold">Género</p>
                <hr>
                <div>
                    <a href="#" class="list-group-item list-group-item-action border-0">Hombre</a>
                    <a href="#" class="list-group-item list-group-item-action border-0">Mujer</a>
                    <a href="#" class="list-group-item list-group-item-action border-0">Niños</a>
                </div>
                <p class="list-group-item border-0 font-weight-bold">Categorías</p>
                <div>
                    <hr>
                    <a href="#" class="list-group-item list-group-item-action border-0">Paquetes Oftalmicos</a>
                    <a href="#" class="list-group-item list-group-item-action border-0">Lentes para luz azul</a>
                    <a href="#" class="list-group-item list-group-item-action border-0">Lentes de contacto</a>
                    <a href="#" class="list-group-item list-group-item-action border-0">Lentes de sol</a>
                    <a href="#" class="list-group-item list-group-item-action border-0">Clínica</a>
                </div>
                <p class="list-group-item border-0 font-weight-bold">Marcas</p>
                <hr>
                <div>
                    <a href="#" class="list-group-item list-group-item-action border-0">Ray-Ban</a>
                    <a href="#" class="list-group-item list-group-item-action border-0">Oakley</a>
                    <a href="#" class="list-group-item list-group-item-action border-0">Polaroid</a>
                    <a href="#" class="list-group-item list-group-item-action border-0">Levi's</a>
                    <a href="#" class="list-group-item list-group-item-action border-0">Carolina Herrera</a>
                    <a href="#" class="list-group-item list-group-item-action border-0">Sofia Vergara</a>
                    <a href="#" class="list-group-item list-group-item-action border-0">Rebook</a>
                </div>
            </div>
        </div>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-card">
                <button class="btn btn-light border-0" id="menu-toggle"><img src="../images/resize1.png"
                        alt=""></button>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link " href="carritoView.php"><img class="carrito" src="../images/carrito.png"
                                    alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img class="rounded-circle imguser" src="../images/imgUser.png"
                                    alt=""></a>
                        </li>
                    </ul>
                </div>
            </nav>

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
                                <div class="card border-0 border-radius shadow-card" style="width: 20rem;">
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
        include("../components/imports_js.php");
    ?>
</body>

</html>