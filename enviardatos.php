<?php

//llamando a los campos
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "juferchime@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";

//Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje_de_envio.html');
?>
