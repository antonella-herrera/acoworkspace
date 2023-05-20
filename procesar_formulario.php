<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recoger los datos del formulario
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];

  // Configurar el destinatario del correo
  $destinatario = "antonella98.herrera@gmail.com";

  // Crear el asunto y el cuerpo del correo
  $asunto = "Nuevo mensaje de contacto";
  $apellido = "Apellido" . $apellido . "\n";
  $cuerpo = "Nombre: " . $nombre . "\n";
  $cuerpo .= "Email: " . $email . "\n";
  $cuerpo .= "Mensaje: " . $mensaje;

  // Enviar el correo
  if (mail($destinatario, $asunto, $cuerpo)) {
    echo "El mensaje ha sido enviado correctamente.";
  } else {
    echo "Hubo un problema al enviar el mensaje.";
  }
}
?>
