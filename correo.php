<?php

$destino = "emmanuel_1320114041@uptecamac.edu.mx";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$celular = $_POST["celular"];
// $mensaje = $_POST["mensaje"];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nCelular: " . $celular;

mail($destino, "Contacto", $contenido);

echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script>setTimeout(\"location.href='index.php'\",1000)</script>";

?>