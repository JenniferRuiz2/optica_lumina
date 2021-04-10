<?php
    session_start();
    include('conexion.php');
    $sesion = $_SESSION['email'];
    $sql="SELECT * FROM usuarios WHERE email = '".$sesion."'";
    $result = mysqli_query($conn,$sql) or die("database error:". mysqli_errno($conn));
    $array = mysqli_fetch_assoc($result);
    $usuario = $array['id_usuario'];
    $estado = $_POST['estado'];
    $ciudad = $_POST['ciudad'];
    $colonia = $_POST['colonia'];
    $calle = $_POST['calle'];
    $numero = $_POST['numero'];
    $cp = $_POST['cp'];
    $ecalles = $_POST['ecalles'];
    $referencia = $_POST['referencia'];
    $telefono = $_POST['telefono'];

    $query = "UPDATE usuarios SET telefono = '$telefono', estado = '$estado', ciudad = '$ciudad', calle = '$calle', numero = '$numero', entreCalles = '$ecalles', referencia = '$referencia', codigoPostal = '$cp', colonia = '$colonia' WHERE id_usuario = '$usuario'";

    if(mysqli_query($conn, $query)){
       echo json_encode(array("statusCode"=>200));
       
    }else{
        //echo json_encode(array("statusCode"=>201));
        echo "Error" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>