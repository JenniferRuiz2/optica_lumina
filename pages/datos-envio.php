<?php
    session_start();
    include('../config/conexion.php');
    $sesion = $_SESSION['email'];

    if(!isset($sesion)){
        echo "Error";
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
    <script src="../js/rEnvios.js"></script>
    <title>Perfil - datos de envío</title>
</head>
<body>
    <!--Navbar  https://code.jquery.com/jquery-3.5.0.min.js -->
    <?php
            include("../components/nav_bar_login.php");
        ?>
    <!--Navbar-->
    <br><br>
    <!--Formulario de agregar datos de envío-->
    <div class="container" style="color: #f8fcff;">
        <h3 class="title text-center text1">REGISTRA TUS DATOS DE ENVÍO</h3>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-2 "></div>
                <div class="col-8 ">
                    <div class="card sombras border">
                        <div class="card-body">
                            <div id = "respuesta"></div>
                            <form id="formulario" name="formulario" class="col-12" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Estado" name="estado" id="estado"/>
                                    <div id ="estadoDiv"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Ciudad" name="ciudad" id="ciudad" />
                                    <div id ="ciudadDiv"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Colonia" name="colonia" id="colonia" />
                                    <div id ="coloniaDiv"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Calle" name="calle" id="calle" />
                                    <div id ="calleDiv"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Número" name="numero" id="numero" />
                                    <div id ="numeroDiv"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Código Postal" name="cp" id="cp" />
                                    <div id ="cpDiv"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Entre calles" name="ecalles" id="ecalles" />
                                    <div id ="eCallesDiv"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Referencia" name="referencia" id="referencia" />
                                    <div id ="referenciaDiv"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Número de teléfono" name="telefono" id="telefono" />
                                    <div id ="telefonoDiv"></div>
                                </div>
                                <input id="boton" name="boton" type="button" class="form-control btn-color" style="color: #FFFFFF;" value="REGISTRAR"/>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
    <!--Formulario de agregar datos de envío-->
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