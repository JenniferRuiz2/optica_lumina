<?php
    include('conexion.php');
    $email = $_POST['email'];
    $p1 = $_POST["p1"];
    $p2 = $_POST["p2"];

    if($p1==$p2){
        $query = "UPDATE usuarios SET acceso = '". 
        sha1($p1) ."' WHERE email = '$email'";
        if(mysqli_query($conn, $query)){
            echo json_encode(array("statusCode"=>200));
         }else{
             //echo json_encode(array("statusCode"=>201));
             echo "Error" . mysqli_error($conn);
         }
    }else{
        echo "Las contraseñas no coinciden";
    }

?>