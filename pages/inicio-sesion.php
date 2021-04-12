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
                    <div class="card sombras border">
                        <div class="card-body">
                            <form id="formulario1" name="formulario" class="col-12" action="../config/login.php" method="POST" target="request">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Correo" name="user" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Contraseña" name="pass" />
                                </div>
                                <button type="submit" class="form-control btn-color" style="color: #FFFFFF;">ENTRAR</button>
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
        include("../components/imports_js.php");
        include("../components/footer.php");
    ?>
    <!--Footer-->
</body>

</html>