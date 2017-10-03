<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../sweetalert/sweetalert.css">
    <script type="text/javascript" src="../../sweetalert/sweetalert.min.js"></script>
</head>
</html>
<?php
sleep(1);
include_once('../database/conexion.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../../vendor/autoload.php';

if($_REQUEST){

    $user = $_REQUEST['user'];
    $query = "select * from usuarios where user = '".strtolower($user)."'";
    $results = mysqli_query($con, $query) or die('ok');
    $row = mysqli_fetch_array($results);
    $id = $row['user'];
    $pass = $row['pass'];

    if(mysqli_num_rows(@$results) == 0){
        echo '<script>swal("¡Algo salio mal!", "El email que acaba de proporcionar es invalido o no existe", "error")</script>';
    }

    else{

       /* $to = $user;
        $email_subject = 'Recuperacion de Contraseña';
        $email_body = $to . 'Esta es la contraseña de su cuenta:' . $pass;
        $headers = 'Gracias por formar parte de Yanet EScalona';

        if(mail($to,$email_subject,$email_body,$headers)){
            echo '<script>swal("¡Bien hecho!", "Puede verificar su contraseña en la bandeja de entrada de su correo", "success")</script>';
        }else{
            echo '<script>swal("¡Error!", "Algo anda mal", "error")</script>';
        }*/

/*-----------------Configuracion SMTP----------------------------*/
//date_default_timezone_set('America/Mexico_City');
$mail = new PHPMailer();
$mail->SMTPSecure  = "tls";
$mail->Username    = "controlseguridadyalegria@gmail.com";
$mail->Password    = "vnbejpvnpbaicahq";
$mail->addAddress('ing_lebd@hotmail.com', 'Luis Enrique Bautista David');
$mail->Subject = 'Yanet EScalona';
$mail->Body = 'Este es un mensaje de prueba';
$mail->Host        = "smtp.gmail.com";
$mail->Port        = 587;
$mail->isSMTP();
$mail->SMTPAuth    = true;
$mail->From = $mail->$user;
$mail->SMTPDebug   = 2;
//$mail->setFrom('quiquedemon117@hotmail.com', 'Yanet EScalona');
//$mail->IsHTML(true);
if(!$mail->Send()){
    echo '<script>swal("¡Error!", "Algo anda mal <br>'. $mail->ErrorInfo .'", "error")</script>';
    
}else{
    echo '<script>swal("¡Bien hecho!", "Puede verificar su contraseña en la bandeja de entrada de su correo", "success")</script>';
}
/*-----------------Configuracion SMTP----------------------------*/

/*-----------------Configuracion Gmail----------------------------*/
/*$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 4;
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'ssl';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "contacto@controlseguridadyalegria.com";
//Password to use for SMTP authentication
$mail->Password = "rbkurlyxpzgrhjif";
//Set who the message is to be sent from
$mail->setFrom('contacto@controlseguridadyalegria.com', 'First Last');
//Set an alternative reply-to address
$mail->addReplyTo('quiquedemon117@hotmail.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('ing_lebd@hotmail.com', 'John Doe');
//Set the subject line
$mail->Subject = 'PHPMailer GMail SMTP test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->Body= 'Hola';
//$body = '<h1>Hola Mundo</h1>';
//$mail->msgHTML($body);
//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('../../images/favicon.ico');
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}
//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);
    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);
    return $result;
}*/
/*-----------------Configuracion Gmail----------------------------*/

    }

}
?>