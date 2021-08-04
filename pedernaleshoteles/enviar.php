<?php
	$destino="pedertynegocio@gmail.com";
	$nombre= $_Post["nombre"];
	$email= $_Post["email"];
	$mensaje= $_Post["mensaje"];
	$contenido= "Nombre:" . $nombre "\nEmail:" . $email . "\nMensaje:" . $mensaje;
	mail($destino,"Contacto", $contenido);
	header("Location:gracias.html");
?>