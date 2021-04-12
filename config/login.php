<?php
    include("conexion.php");
    session_start();
    $user =$_POST["user"];
    $pass = sha1(utf8_encode($_POST["pass"]));

    if(isset($user) && isset($pass) ){
        $query = "SELECT COUNT(*) as contar FROM usuarios WHERE email = '".$user."' and acceso ='". $pass ."' ";
        $result = mysqli_query($conn, $query);
        $array = mysqli_fetch_array($result);

        if($array['contar'] > 0 ){
            $_SESSION['id_usuario'] = $id;
            $_SESSION['email'] = $user;
            header("location: ../pages/perfil.php");
        }else{
            echo "Datos incorrectos";
        }
    }else{
        echo "Error llena los campos";   
    }

?>
