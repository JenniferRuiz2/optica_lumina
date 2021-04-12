<?php
    include("conexion.php");
    session_start();
    $correo =$_POST["user"];
    $pass = sha1(utf8_encode($_POST["pass"]));
    $query = "SELECT COUNT(*) as contar FROM usuarios WHERE email = '".$correo."' and acceso ='". $pass ."' ";
    $result = mysqli_query($conn, $query);
    $array = mysqli_fetch_array($result);

    if($array['contar'] > 0 ){
        $_SESSION['id_usuario'] = $id;
        $_SESSION['email'] = $correo;
        header("location: ../pages/perfil.php");
    }else{
        echo "<h1 class='text-error' >datos incorrectos </h1> <br> ";
    }

?>
