<?php
    session_start();
    include('conexion.php');
    $sesion = $_SESSION['email'];
    $sql="SELECT * FROM usuarios WHERE email = '".$sesion."'";
    $result = mysqli_query($conn,$sql) or die("database error:". mysqli_errno($conn));
    $array = mysqli_fetch_assoc($result);
    $usuario = $array['id_usuario'];
    $telefono = $_POST['telefono'];
    $pass = $_POST['pass'];

    if( $telefono == "" && $pass != ""){
        $query = "UPDATE usuarios SET acceso = '". 
        sha1($pass) ."' WHERE id_usuario = '$usuario'";
        if(mysqli_query($conn, $query)){
            echo json_encode(array("statusCode"=>200));
         }else{
             //echo json_encode(array("statusCode"=>201));
             echo "Error" . mysqli_error($conn);
         }
    }else if($pass == "" && $telefono != ""){
        $sqli = "UPDATE usuarios SET telefono = '$telefono' WHERE id_usuario = '$usuario'";
        if(mysqli_query($conn, $sqli)){
            echo json_encode(array("statusCode"=>200));
            
         }else{
             //echo json_encode(array("statusCode"=>201));
             echo "Error" . mysqli_error($conn);
         }
    }else if( $telefono == "" && $pass == "" ){
        echo json_encode("<p>Los campos estan vacios, llena por lo menos uno</p>");
    }
    mysqli_close($conn);
?>