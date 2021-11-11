<?php

$destino = "esc_important@outlook.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\Telefono: " . $telefono . "\nMensaje: " . $mensaje;

mail($destino, "Contacto", $contenido);

echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script>setTimeout(\"location.href='index.php'\",1000)</script>";

?>