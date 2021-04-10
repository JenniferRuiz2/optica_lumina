<?php
    session_start();
    include('conexion.php');
    $sesion = $_SESSION['email'];
    $sql="SELECT * FROM usuarios WHERE email = '".$sesion."'";
    $result = mysqli_query($conn,$sql) or die("database error:". mysqli_errno($conn));
    $array = mysqli_fetch_assoc($result);
    $usuario = $array['id_usuario'];
    $foto = '';
    if (($_FILES["file"]["type"] == "image/jpg")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/png")){
        $imagen = $_FILES['file']['name'];
        $imagen_tmp = $_FILES['file']['tmp_name'];
        $ruta = "../fotoUsuario/".$imagen;
        if(move_uploaded_file($imagen_tmp,$ruta)){
            $foto = $imagen;
        }
    }

    $sqli = "UPDATE usuarios SET ruta = '$foto' WHERE id_usuario = '$usuario'";
    if(mysqli_query($conn, $sqli)){
        echo json_encode(array("statusCode"=>200));
        
    }else{
        //echo json_encode(array("statusCode"=>201));
        echo "Error" . mysqli_error($conn);
    }

?>