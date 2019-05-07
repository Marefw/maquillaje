<?php
   $destino="maryjockl@gmail.com";
   $nombre = $_POST["nombre"];
   $email = $_POST["email"];
   $contenido = "Nombre: " . $Nombre . "\nEmail: " .$Email;
   mail($destino,"Contacto", $contenido);
   header("Location:graciass.html");
?>