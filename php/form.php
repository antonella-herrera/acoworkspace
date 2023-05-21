<?php
$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
$email = $_POST ['email'];
$mensaje = $_POST ['mensaje'];

$mensaje = "Este mensaje fue enviado por" . $nombre . ",\r\n";
$mensaje = "Su email es: " . $email . ",\r\n";
$mensaje = "Mensaje" . $_POST['mensaje'] . ",\r\n";

$destinatario = 'antonella@mujeres2000.org.ar';
$asunto = "Este mail fue envio desdes ACO Worspace";

mail($destinatario, $asunto, $mensaje, $header);

header('Location:exito.html');

?>
