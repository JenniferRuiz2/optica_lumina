<?php
    include('conexion.php');
    $nombre = $_POST["nombre"];
    $apellidoP = $_POST["apellidoP"];
    $apellidoM = $_POST["apellidoM"];
    $sexo = $_POST["sexo"];
    $user =$_POST["user"];
    $pass = $_POST["pass"];
    //$array = array();

    $sql = "INSERT INTO usuarios(id_usuario, nombre, acceso, tipo, email) 
    VALUES('1806141919','$nombre $apellidoP $apellidoM', '".
    sha1($pass)."', 'Usuario', '$user')";
    if(mysqli_query($conn, $sql)){
        echo json_encode(array("statusCode"=>200));
    }else{
        echo json_encode(array("statusCode"=>201));
    }
    mysqli_close($conn);
    

?>