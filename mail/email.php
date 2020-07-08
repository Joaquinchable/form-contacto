<?php

// declaramos los inputs
$nombre = $_POST ['nombre'];
$telefono = $_POST['telefono'];
$mail =  $_POST['email'];
$mensaje = $_POST['mensaje'];


$headers = $mail . "\r.\n";
$headers .= "X-Mailer: PHP/". phpversion() . "\r.\n";	
$headers .= "Mime-Version 1.0  \r.\n" ;	
$headers .= "Content-Type : text/plain" ;	


$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "telefono:" . $_POST['telefono'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'joaquincharo.developer@gmail.com';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location: ./../home.html");

?>