<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/rEnvios.js"></script>
    <?php
        include("../components/head.php");
    ?>
    <title>Lumina Optica - Producto</title>
</head>

<body>
    <?php
    include("../components/nav_bar.php")
   ?>

    <div class="container-fluid">
        <div class="border-radius shadow-card w-100 h-100 bg-white mt-5 center">
            <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 center h-50 w-50">
                    <section>
                        <div class="h-100 w-100 container-fluid">
                            <div class="center container-fluid">
                                <div class="row">
                                    <div class="col">
                                        <img class="w-100" src="../images/lentes.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row w-5 justify-content-center">
                                <div class="col">
                                    <div>
                                        <img class="w-50" src="../images/lentes.png" alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <img class="w-50" src="../images/lentes.png" alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <img class="w-50" src="../images/lentes.png" alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <img class="w-50" src="../images/lentes.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid mt-3">
                                <div class="text-center flex-display justify-content-center">
                                    <p>Costo:</p>
                                    <p class="ml-1 texto-resaltado">$450MXN</p>
                                </div>
                            </div>
                            <div class="container-fluid mt-1">
                                <div class="text-center flex-display justify-content-center">
                                    <p>Existencia:</p>
                                    <p class="ml-1 texto-resaltado">5</p>
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
                                    <p class="font-weight-bold text-left letter-size">Polaroid</p>
                                    <p class="font-weight-normal text-left letter-size">LENTE OFTÁLMICO UNISEX POLAROID
                                        BOB31 NEGRO</p>
                                    <p class="font-weight-bold text-left letter-size">Descripción</p>
                                    <p class="font-weight-normal text-left letter-size">Lorem ipsum dolor sit amet
                                        consectetur
                                        adipisicing elit. Doloribus facilis animi tempora
                                        nulla alias ea fugit officiis voluptatibus sequi
                                        quidem fuga necessitatibus, neque commodi
                                        adipisci, reprehenderit eos quaerat deleniti
                                        similique.</p>

                                    <div class="border w-50">
                                        <div class="row align-items-center">
                                            <div class="col tam">
                                                <button class="btn btn-block bg-transparent ">-</button>
                                            </div>
                                            <div class="col tam">
                                                <p class="text-center align-middle letter-size">1</p>
                                            </div>
                                            <div class="col tam">
                                                <button class="btn btn-block bg-transparent">+</button>
                                            </div>

                                        </div>
                                    </div>
                                    <button class="btn-block btn-primary border-0 rounded mt-4 mb-4">Agregar al
                                        carrito</button>
                                </div>
                            </div>
                        </div>
                    </section>
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