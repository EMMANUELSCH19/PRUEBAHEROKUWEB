<?php

$destino = "emmanuel_1320114041@uptecamac.edu.mx";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$celular = $_POST["celular"];
// $mensaje = $_POST["mensaje"];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nCelular: " . $celular;

mail($destino, "Contacto", $contenido);
echo alert("Mensaje enviado");
header("Location:index.php");

?>