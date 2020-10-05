<?php
$nombre = $_POST['user_name'];
$mail = $_POST['user_mail'];
$msg = $_POST['user_message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['user_message'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'franciscochocobar@gmail.com';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:confirmation-mail.html");
?> 