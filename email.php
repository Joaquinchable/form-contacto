<?php
if(isset($_POST['enviar'])){
 if(!empty($_POST['nombre']) && 
 !empty($_POST ['mansaje']) &&
 !empty($_POST['telefono']) && 
 !empty($_POST['email'])){

// declaramos los inputs
$nombre = $_POST ['nombre'];
$telefono = $_POST['telefono'];
$email =  $_POST['email'];
$mensaje = $_POST['mensaje'];

$to = 'joaquincharo.developer@gmail.com';
$headers = "From: noreply@yourdomain.com\n";
$headers .= "Reply-To: $email";	
$headers .= "X-Mailer: PHP/". phpversion();	
$mail = mail($to,$nombre,$mensaje,$telefono,$header);



if($mail){
 echo "<h4> mensaje enviado </h4>";
 echo "<script>alert('correo enviado exitosamente')</script>";
 echo "<script>alert setTimeout(\"location.href='index.php'\",1000)</script>";

}


 }

}




?>