<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Información del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$ubicacion = $_POST['ubicacion'];

// Construir el mensaje
$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su email es: " . $email . ",\r\n";
$mensaje .= "Su teléfono es: " . $phone . ",\r\n";
$mensaje .= "Vive en: " . $ubicacion . ",\r\n";

// Definir mail de recepción y asunto
$destinatario = "estudio@lako.com.ar";
$asunto = "Hola quiero trabajar con LAKO stands";

// Construir las cabeceras
$headers = "From: " . $email . "\r\n" .
           "Reply-To: " . $email . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

// Enviar el correo
if (mail($destinatario, $asunto, $mensaje, $headers)) {
    // Redirigir después de enviar el formulario
    header("Location: stands.estudiolako.com");
    exit();  // Asegúrate de detener el script después de la redirección
} else {
    echo "Error al enviar el correo.";
}
