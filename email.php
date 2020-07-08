<?php

// correo al que enviaremos el manesaje 
$destinatario = 'joaquincharo.developer@gmail.com';



// declaramos los inputs
$nombre = $_POST ['nombre'];
$telefono = $_POST['telefono'];
$email =  $_POST['email'];
$mensaje = $_POST['mensaje'];

// declaramos el mensaje 
$asunto = "Contacto desde pagina web";

$carta = "De: $nombre \n";
$carta .= "$email \n";
$carta .= "$telefono \n";
$carta .= "$mensaje \n";

// declaramos todo lo que enviaremos al correo
mail($destinatario, $asunto, $carta);
// alertas de que el correo ese envio y el segundo echo para regresar a la pagina
echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script>alert setTimeout(\"location.href='index.html'\",1000)</script>";


?>