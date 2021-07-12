<? php

$destino = "mario.pandoruk@gmail.com"
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telfono"];
$mensaje = $_POST["mensaje"];

$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\Mensaje: " .$mensaje;

mail($destino, "Contacto", $contenido);

header("location:#contacto")
?>