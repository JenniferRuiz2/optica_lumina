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
    <script src="../js/login.js"></script>
    <title>Lumina inicio sesión</title>
</head>

<body class="fondo">
    <!--Navbar-->
        <?php
            include("../components/nav_log_reg.php");
        ?>
    <!--Navbar-->
    <!--Formulario de inicio-->
    <br><br>
    <div class="container" style="color: #f8fcff;">
        <h3 class="title text-center text1">INICIO DE SESIÓN</h3>
        <h4 class="text-center text1">Por favor ingresa tu correo y tu contraseña</h4>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-2 "></div>
                <div class="col-8 ">
                    <p id="respuesta"></p>
                    <div class="card sombras border">
                        <div class="card-body">
                            <form id="formulario1" name="formulario" class="col-12" method="POST" target="request">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Correo" name="user" id="user" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Contraseña" name="pass" id="pass" />
                                </div>
                                <input id="btn" name="btn" type="button" class="form-control btn-color" 
                                style="color: #FFFFFF;" value="INICIAR"/>
                            </form>
                            <div>
                                <p class="text1 text-center">¿No tienes una cuenta? <a href="registro.php">Crea una aquí</a> </p>
                                <p class="text-center"> <a href="recuperar-pass.php">Olvidé mi contraseña</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <hr>
    </div>
    <!--Footer-->
    <?php 
        include("../components/footer.php");
    ?>
    <!--Footer-->
</body>

</html>