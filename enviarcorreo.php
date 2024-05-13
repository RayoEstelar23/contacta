<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
$nombre = $_POST[ 'nombre'] ;
$mail = $_post ['email'];

$header = 'From: '.  $mail. "\r\n";
$header  .= "X-Mailer: php/" . phpversion() . "\r\n";
$header  .= "MimeVersion: 1.0 \r\n";
$header  .= "Content-Type: text/plain";

$mensaje = "Esre mensaje fueenviado por: " .$nombre . "\r\n";
$mensaje .= "Su email es: ". $mail. "\r\n";
$mensaje .= "Mensaje: ". $_POST['mensaje'] . "\r\n";
$mensaje .= "Enviado el " . date('d/m/y', time());
$para =  'abigail77flores@gmail.com';
$asunto = 'Solicitud de informaci&oacute;n'; 
mail ($para,$asunto, utf8_decode($mensaje), $header);
 
header ("location: gracias.html"); 
?>







</body>
</html>