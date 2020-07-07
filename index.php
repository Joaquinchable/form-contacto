<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="styles.css" />
    <title>Document</title>
</head>

<body>

   <div class="container-padre-form">
     <h2>Contacto</h2>
     <hr color="black" size=2 width="40%" > 
     <br>

    <form action="email.php" class="container-formulario" method="post">
        
        <label for="username">Nombre</label>
        <input type="text" name="name" required />
        <label for="username">Telefono</label>
        <input type="text" name="phone" required />
        <label for="username">Email</label>
        <input type="text" name="email" required />
        <label for="username">Mensaje</label>
        <textarea class="textarea" name="message" rows="30" cols="30" style="overflow:auto;" required > </textarea>
        <br><br>
        <input class="boton" type="submit" value="enviar">
    </form>

  </div>

  <?php
  
  include("email.php")
  
  ?>


</body>

</html>