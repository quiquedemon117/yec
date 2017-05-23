<?php
require('class.phpmailer.php');
require('class.smtp.php');

$email = $_POST["email"];
 
$mail = new PHPMailer();
 
$body = 'Cuerpo del mensaje';
 
$mail->IsSMTP(); 
 
// la dirección del servidor, p. ej.: smtp.servidor.com
$mail->Host = "controlseguridadyalegria.com";
 
// dirección remitente, p. ej.: no-responder@miempresa.com
$mail->From = "contacto@controlseguridadyalegria.com";
 
// nombre remitente, p. ej.: "Servicio de envío automático"
$mail->FromName = "Yanet EScalona";
 
// asunto y cuerpo alternativo del mensaje
$mail->Subject = "Recuperación de contraseña";
$mail->AltBody = "Hola mundo"; 
 
// si el cuerpo del mensaje es HTML
$mail->MsgHTML($body);
 
// podemos hacer varios AddAdress
$mail->AddAddress($email, "Luis Enrique Bautista David");
 
// si el SMTP necesita autenticación
$mail->SMTPAuth = true;
 
// credenciales usuario
$mail->Username = "contacto@controlseguridadyalegria.com";
$mail->Password = "lorenzo1"; 
 
if(!$mail->Send()) {
echo "Error enviando: " . $mail->ErrorInfo;
} else {
echo "¡¡Enviado!!";
}
?>