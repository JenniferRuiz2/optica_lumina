<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include("../components/head.php");
    ?>
    <title>Lumina inicio sesión</title>
</head>
<body>
    <!--Navbar-->
    <nav class=" bg-white border-bottom shadow-sm navbar navbar-expand-lg">
        <a class="my-0 mr-md-auto font-weight-normal text-dark" href="inicio-sesion.php">
            <img src="img/icolumina.png" class="d-inline-block align-top contemt" alt="" width="40" height="40"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarcollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a href="#" ><img src="img/carrito.png" class="d-inline-block align-top align-content-center contemt centro" alt="" width="20" height="20"> <br>Carrito</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--Navbar-->

    <br><br>
    <div class="container" style="color: #f8fcff;">
        <h4 class="text-center text1">Por favor ingresa tu número de teléfono</h4>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-2 "></div>
                <div class="col-8 ">
                    <div class="card sombras border">
                        <div class="card-body">
                            <form id="formulario1" name="formulario" class="col-12" action="" method="POST" target="request">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="452-123-4567" name="telefono" />
                                </div>
                                <button type="submit" class="form-control btn-color" style="color: #FFFFFF;">ENVIAR</button>
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
    <div class="container">
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-6 col-md">
                    <h5 class="text-center">¿Quiénes somos?</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus facilis animi tempora nulla alias ea fugit officiis voluptatibus sequi quidem fuga necessitatibus, neque commodi adipisci, reprehenderit eos quaerat deleniti similique.</p>
                </div>
                <div class="col-6 col-md">
                    <h5 class="text-center">Atención a clientes</h5>
                    <p>Puedes marcar al númerro de teléfono
                        <h6>+52 786 154 6908</h6>
                    </p>
                    <p>Visitarnos en
                        <h6>Vidal Solis #10, Colonia Centro, C.P.61100, Ciudad Hidalgo Michoacán</h6>
                    </p>
                    <p>o escribirnos por correo electrónico</p>
                </div>
                <div class="col-6 col-md">
                    <h5 class="text-center">Redes sociales</h5>
                    <div class="row">
                        <div class="col-6 col-md centro">
                            <img src="img/facebook.png" alt="">
                        </div>
                        <div class="col-6 col-md centro">
                            <img src="img/logotipo-de-instagram.png" alt="">
                        </div>
                        <div class="col-6 col-md centro">
                            <img src="img/gorjeo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!--Footer-->
    
</body>
</html>