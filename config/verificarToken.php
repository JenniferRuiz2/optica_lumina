<?php
    include('conexion.php');
    $email = $_POST['email'];
    $token = $_POST['token'];
    $codigo = $_POST['codigo'];
    $correcto = false;
    //SELECT * FROM usuarios WHERE email = 'jennifer_ruiz@arpan.com.mx' AND token = 'GbeZ0Rk=' AND codigo = 8221;
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND token = '$token' AND codigo = '$codigo '";
    $result = mysqli_query($conn,$sql) or die("database error:". mysqli_errno($conn));
    if(mysqli_num_rows($result)>0){
        $fila = mysqli_fetch_row($result);
        $fecha = $fila[18];
        $fecha_actual = date('Y-m-d h:m:s');
        $seconds = strtotime($fecha_actual)-strtotime($fecha);
        $minutos = $seconds /60;
        /*if($minutos > 10){
            echo "todo correcto";
        }else{
            echo "Código vencido";
        }*/
        $correcto = true;
    }else{
        $correcto = false;
    }
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
    <script src="../js/cambiar_recuperarPass.js"></script>
    <title>Lumina- Cambiar contraseña</title>
</head>

<body>
    <?php 
        if($correcto){
    ?>
    <!--Navbar-->
    <?php
            include("../components/nav_log_reg.php");
        ?>
    <!--Navbar-->

    <br><br>
    <div class="container" style="color: #f8fcff;">
        <h4 class="text-center text1">Por favor ingresa la nueva contraseña</h4>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-2 "></div>
                <div class="col-8 ">
                    <div class="card sombras border">
                        <div class="card-body">
                            <form id="formulario" name="formulario" class="col-12" method="POST" target="request">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" placeholder="Correo electrónico" name="email" id="email"
                                        value="<?php echo $email;?>" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Nueva contraseña" name="p1"
                                        id="p1" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirmar contraseña"
                                        name="p2" id="p2" />
                                </div>
                                <input id="btn" name="btn" type="button" class="form-control btn-color"
                                    style="color: #FFFFFF;" value="Reestablecer" />
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
        include("../components/footer.php");
    ?>
    <!--Footer-->
    <?php 
        }else{
            ?>
    <div class="alert alert-danger">Código incorrecto o vencido</div>
    <?php
        }
    ?>
</body>

</html>