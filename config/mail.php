<?php
// Varios destinatarios
$para  = $email . ', '; // atención a la coma
//$para .= 'wez@example.com';

// título
$título = 'Recuperar contraseña';
$codigo = rand(1000, 9999);
// mensaje
$mensaje = '
<html>
<head>
  <title>Recuperar contraseña</title>
</head>
<body>
  <h1>Lumina</h1>
  <img src="http://localhost/optica_lumina/images/FOTO_LUMINA_BIEN.png"/>
  <div style="text-align:center; background-color: #f8fcff;">
    <p>Restablecer contraseña</p>
    <h3>'.$codigo.'</h3>
    <p> <a href="http://localhost/optica_lumina/pages/codigoRecuperacion.php?email='.$email.'&token='.$token.'"> 
    Para restablecer da click aquí </a></p>
  </div>
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras .= 'From: Recuperar contraseña <cumples@example.com>' . "\r\n";
/*
// Cabeceras adicionales
$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";*/

// Enviarlo
$enviado = false;
if(mail($para, $título, $mensaje, $cabeceras)){
    $enviado = true;
}

?>