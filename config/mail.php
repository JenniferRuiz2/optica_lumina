<?php
//phpMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpMailer/Exception.php';
require '../phpMailer/PHPMailer.php';
require '../phpMailer/SMTP.php';

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
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";

// Enviarlo
$enviado=false;
if(mail($para, $título, $mensaje, $cabeceras)){
  $enviado=true;
}

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'jennifer02598@gmail.com';  //Acceso                   //SMTP username
    $mail->Password   = 'Dnlhmr02598';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('jennifer02598@gmail.com', 'Lumina optica'); //Desde donde se envia
    $mail->addAddress($email);     //Add a recipient //A quien se le envia

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Recuperar contraseña de Lumina Optica';
    $mail->Body    = $mensaje;

    $mail->send();
    echo 'El correo se ha enviado';
    $enviado=true;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>