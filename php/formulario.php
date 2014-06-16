<?php 

// Variables del formulario
$nombre = utf8_decode($_POST["nombre"]);
$email = $_POST["email"];
$texto = utf8_decode($_POST["texto"]);

// Agrego el nombre y el email al mensaje
$mensaje = "Nombre: ".$nombre."\n"."Email: ".$email."\n\n".$texto;

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	mail("frank.daza2@gmail.com", "Mensaje de frankdaza.co", $mensaje, "From: frankdaza.co");
	header("Location: http://frankdaza.co");
}
header("Location: http://frankdaza.co");
?>