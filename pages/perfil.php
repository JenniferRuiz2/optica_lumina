<?php
    session_start();
    include('../config/conexion.php');
    $sesion = $_SESSION['email'];

    if(!isset($sesion)){
        header('location: ../pages/principal_ecommerce.php');
    }else{
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
    <title>Perfil</title>
</head>

<body class="fondo">
    <!--Navbar-->
    <?php
            include("../components/nav_bar.php");
        ?>
    <!--Navbar-->
    <br>
    <!--Información del usuario-->
    <div class="container">
        <div class="row">
            <section class="col">
                <div class="card border card-perfil-fondo">
                    <?php
                        $sql="SELECT * FROM usuarios WHERE email = '".$sesion."'";
                        $result = mysqli_query($conn, $sql) or die ("database error:".mysqli_errno($conn));
                        $array = mysqli_fetch_assoc($result);
                    ?>
                    <img class="img-perfil-fondo border"
                        src="<?php echo "data:image/jpg; base64,". base64_encode($array['foto']); ?>" alt="" />
                </div>
                <div class="card card-perfil border">
                    <div class="container">
                        <img class="img-perfil border"
                            src="<?php echo "data:image/jpg; base64,". base64_encode($array['foto']); ?>" alt="" />
                        <div class="card-body">
                            <h6 class="card-title text-center"><?php echo $array["nombre"] ?></h6>
                            <p class="card-text text-center"> <?php echo $array["email"]; ?> <br>+52
                                <?php echo $array["telefono"]; ?></p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="col">
                <h4 class="text-left">Información personal</h4>
                <div class="row">

                    <div class="col-2">
                        <h6 class="text-left">Nombre:</h6>
                    </div>
                    <div class="col-10">
                        <p><?php echo $array["nombre"] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <h6 class="text-left">Genero:</h6>
                    </div>
                    <div class="col-10">
                        <p><?php echo $array["genero"]; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <h6 class="text-left">Número de teléfono:</h6>
                    </div>
                    <div class="col-8">
                        <p>+52 <?php echo $array["telefono"]; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <h6 class="text-left">Correo electrónico:</h6>
                    </div>
                    <div class="col-8">
                        <p><?php echo $array["email"]; ?></p>
                    </div>
                </div>
                <a class="form-control btn-color text-center" style="color: #FFFFFF;"
                    href="../pages/cambiar_pass.php">Cambiar contraseña</a>
            </section>
        </div>
    </div>
    <!--Información del usuario-->
    <br><br>
    <!--Información de envío -->
    <div class="container">
        <h4 class="text-left">Información de envío</h4>
        <div class="row">
            <section class="col">
                <div class="row">
                    <section class="col">
                        <div class="row">
                            <div class="col-6">
                                <h6 class="text-left">Estado:</h6>
                            </div>
                            <div class="col-6">
                                <p class="text-left"><?php echo $array["estado"]; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h6 class="text-left">Ciudad:</h6>
                            </div>
                            <div class="col-6">
                                <p class="text-left"><?php echo $array["ciudad"]; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h6 class="text-left">Calle:</h6>
                            </div>
                            <div class="col-6">
                                <p class="text-left"><?php echo $array["calle"]; ?></p>
                            </div>
                        </div>
                    </section>
                    <section class="col">
                        <div class="row">
                            <div class="col-6">
                                <h6 class="text-left">Número:</h6>
                            </div>
                            <div class="col-6">
                                <p class="text-left"><?php echo $array["numero"]; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h6 class="text-left">Código postal:</h6>
                            </div>
                            <div class="col-6">
                                <p class="text-left"><?php echo $array["codigoPostal"]; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h6 class="text-left">Colonia:</h6>
                            </div>
                            <div class="col-6">
                                <p class="text-left"><?php echo $array["colonia"]; ?></p>
                            </div>
                        </div>
                    </section>
                </div>
                <a class="form-control btn-color text-center" style="color: #FFFFFF;"
                    href="../pages/datos-envio.php">Editar datos de envío</a>
            </section>
            <section class="col">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3755.927013013596!2d-101.2029829!3d19.715731299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e609c079a09%3A0x3c9bb730f267f3d0!2sCalle%20Paseo%20del%20Roble%20883%2C%20Prados%20Verdes%2C%2058110%20Morelia%2C%20Mich.!5e0!3m2!1sen!2smx!4v1615873607363!5m2!1sen!2smx"
                    width="600" height="200" class="border" allowfullscreen="" loading="lazy"></iframe>
            </section>
        </div>
    </div>
    <!--Información de envío -->
    <!--Footer-->
    <div class="container mt-3">
        <hr>
    </div>
    <?php 
        include("../components/imports_js.php");
        include("../components/footer.php");
    ?>
    <!--Footer-->

</body>

</html>
<?php
    }
?>