<?php
    include('conexion.php');
    $email = $_POST['email'];
    $bytes = random_bytes(5);
    $token = bin2hex($bytes);
    $time = date_create();
    $fecha = date_format($time, 'Y-m-d H:i:s');
    
    $sql = "SELECT email FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
        include('mail.php');
        echo $codigo;
        $query = "UPDATE usuarios SET token= '"
        .$token."', codigo = '" 
        .$codigo."', fechaRecAcceso = '"
        .$fecha."'  WHERE email = '"
        .$email."'";
        if($enviado){
            if(mysqli_query($conn, $query)){
                echo "Verifica tu email para restablecer la contraseña";
            }else{
                echo "Error" . mysqli_error($conn);
            }
        }
    }else{
        echo "El usuario: ".$email." no existe";
    }

    mysqli_close($conn);
?>