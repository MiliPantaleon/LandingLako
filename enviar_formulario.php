
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//informacion del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $ubicacion = $_POST['ubicacion'];


// Como llega el mensaje 
$mensaje = "Este mensaje fue enviado por" . $nombre . ",\r\n";
$mensaje = "Su email es: " . $email . ",\r\n";
$mensaje = "Su teléfono es: " . $phone . ",\r\n";
$mensaje = "Vive en:" . $ubicacion . ",\r\n";

// Definir mail de recepcion y asunto
$destinatario = "mmpantaleon@gmail.com";
$asunto = "Hola quiero trabajar con LAKO stands";

//Funcion mail
//a quien le llega el mail 
mail ($destinatario, $asunto, $header);

//Redireccion que se hace cuando se envia el form 
header("Location:stands.estudiolako.com");

?>