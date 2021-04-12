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
     <script src="../js/rUsuarios.js"></script>
    <title>Registro</title>
</head>

<body class="fondo">
    <!--Navbar-->
        <?php
            include("../components/nav_log_reg.php");
        ?>
    <!--Navbar-->
    <!--Formulario de registro-->
    <br><br>
    <div class="container" style="color: #f8fcff;">
        <h3 class="title text-center text1">REGISTRATE</h3>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-2 "></div>
                <div class="col-8 ">
                <p id = "respuesta"></p>
                    <div class="card sombras border">
                        <div class="card-body">
                            <form id="formulario" name="formulario" class="col-12" method="post">
                                <span id="respuesta"></span>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre"/>
                                    <div id ="nombreDiv"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Apellido paterno" name="apellidoP" id="apellidop" />
                                    <div id ="apellidopDiv"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Apellido materno" name="apellidoM" id="apellidom" />
                                    <div id ="apellidomDiv"></div>
                                </div>
                                <div class="form-group">
                                    <label class="text1" for="Sexo">Genero</label><br>
                                    <label for="sexo">
                                        <input class="with-gap" name="sexo" id="sexo" type="radio" value="Masculino" />
                                        <span class="text1">Masculino</span>
                                    </label>
                                    <label>
                                        <input class="with-gap" name="sexo" id="sexo" type="radio" value="Femenino" />
                                        <span class="text1">Femenino</span>
                                    </label>
                                    <div id="sexoDiv"></div><br/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Correo" name="user"  id="user"/>
                                    <div id ="userDiv"></div>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Contraseña" name="pass" id="pass" />
                                    <div id ="passDiv"></div>
                                </div>
                                <input id="btn" name="btn" type="button" class="form-control btn-color" style="color: #FFFFFF;" value="REGISTRAR"/>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
    <!--Formulario de registro-->
    <br>
    <!--Footer-->
    <?php 
        include("../components/footer.php");
    ?>
    <!--Footer-->

</body>

</html>