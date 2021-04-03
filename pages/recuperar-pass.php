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
    <?php
            include("../components/nav_log_reg.php");
        ?>
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
    <?php 
        include("../components/imports_js.php");
        include("../components/footer.php");
    ?>
    <!--Footer-->
    
</body>
</html>