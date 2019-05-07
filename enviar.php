<?php
   $destino="maryjockl@gmail.com";
   $Nombre = $_POST["Nombre"];
   $Email = $_POST["Email"];
   $Mensaje = $_POST["Mensaje"];
   $contenido = "Nombre: " . $Nombre . "\nEmail: " . $Email . "\nMensaje: " .$Mensaje;
   mail($destino,"Contacto", $contenido);
   header("Location:gracias.html");
?>