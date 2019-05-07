<?php
   $destino="maryjockl@gmail.com";
   $nombre = $_POST["nombre"];
   $email = $_POST["email"];
   $contenido = "nombre: " . $nombre . "\nemail: " . $email;
   mail($destino,"Contacto", $contenido);
   header("Location:graciass.html");
?>