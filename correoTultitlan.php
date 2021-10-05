<?php

$destinatario = 'iruiz@frasangroup.com';
// esto es al correo al que se enviara el mensaje

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono =  $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$header = "Paco Santos oficina Tultitlan";
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre . "\nEmail:" . $email;

mail($destinatario, $mensajeCompleto, $header);

echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='enlace.tultitlan.html'\",1000)</script>";

?>