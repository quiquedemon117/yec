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
    $query = "SELECT `usuarios`.`user`, `usuarios`.`pass`, `clientes`.`nombre`, `clientes`.`apellidos` FROM `usuarios` LEFT JOIN `clientes` ON `usuarios`.`id_user` = `clientes`.`user_id` where user = '".strtolower($user)."'";
    $results = mysqli_query($con, $query) or die('ok');
    $row = mysqli_fetch_array($results);
    $id = $row['user'];
    $pass = $row['pass'];
    $name = $row['nombre'];
    $app = $row['apellidos'];

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
/*$mail = new PHPMailer();
$mail->SMTPSecure  = 'tls';
$mail->Username    = "contacto@controlseguridadyalegria.com";
$mail->Password    = "Lorenzo1";
$mail->addAddress('ing_lebd@hotmail.com', 'Luis Enrique Bautista David');
$mail->Subject = 'Yanet EScalona';
$mail->Body = 'Este es un mensaje de prueba';
$mail->Host        = "localhost";
$mail->Port        = 587;
$mail->isMail();
$mail->SMTPAuth    = true;
$mail->From = $mail->$user;
$mail->SMTPDebug   = 0;*/
//$mail->setFrom('quiquedemon117@hotmail.com', 'Yanet EScalona');
//$mail->IsHTML(true);
//

$mail = new PHPMailer;
//Set who the message is to be sent from
$mail->setFrom('contacto@controlseguridadyalegria.com', 'Yanet EScalona');
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress($user, $name.' '.$app);
//Set the subject line
$mail->Subject = 'Recuperación de password';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mensaje = "Gracias por formar parte de Yanet EScalona tu contraseña es: ".$pass;
$cuerpo = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Email</title>
        <style>
            A:link {color: black; font-size: 8pt; font-family: arial; text-decoration: none }
            A:hover {color: black; font-size: 8pt; font-family: arial; text-decoration: none }
            A:visited {color: black; font-size: 8pt; font-family: arial; text-decoration: none }
            .cabeza{
                width: 100%;
                height: 100px;
                background: #222222;
            }
            .img{
                padding-top: 14px;
                padding-left: 10px;
            }
            .mensaje{
                width: 100%;
                height: 100%;
                background: #E6E6E6;
                text-align: center;
                font-size: 4e;
                line-height: 22px;
                padding-top: 5px; 
            }
            .control{
                width: 100%;
                height: 70px;
                background: #222222;
                line-height: 5px;
                padding-top: 5px; 
            }
            .control h1, .control p{
                    padding-left: 5px;
                    color: #FFFFFF;
                }
            .seguridad{
                width: 100%;
                height: 70px;
                background: #ffffff;
                line-height: 5px;
                padding-top: 5px; 
            }
            .seguridad h1, .seguridad p{
                    padding-left: 5px;
                    color: #E36C0A;
                }
            .alegria{
                width: 100%;
                height: 70px;
                background: #FF8F29;
                line-height: 5px;
                padding-top: 5px; 
            }
            .alegria h1, .alegria p{
                    padding-left: 5px;
                    color: black;
                }
            .datos{
                width: 100%;
                height: 190px;
                background: #B00000;
                line-height: 5px;
                padding-top: 5px; 
            }
            .datos h1, .datos p{
                color: #ffffff;
            }
            .datos .correo{
                float: right;
                padding: 15px; 
            }
            .redes{
                float:left;
                position: absolute;
                padding-left: 10px;
            }
        </style>
    </head>
    <body>
        <div class="cabeza">
            <img class="img" src="https://www.controlseguridadyalegria.com/images/pieza.png" width="70px" alt="">
            <img src="https://www.controlseguridadyalegria.com/images/logo.png" alt="" width="250">
        </div>
        <div class="mensaje">
            <h2>'.$mensaje.'</h2>
        </div>
        
        <div class="control">
            <h1>Control:</h1><p>Si no conoces las reglas del Juego, nunca ganarás.</p>
        </div>
        
        <div class="seguridad">
            <h1>Seguridad:</h1><p>El éxito es sólo el resultado de perseverancia y pasión.</p>
        </div>
        
        <div class="alegria">
            <h1>Alegria:</h1><p>A punto de morir descubrirás que siempre pudiste lograr tus sueños.</p>
        </div>
        <div class="datos">

            <img class="correo" src="https://www.controlseguridadyalegria.com/images/correo.png" alt="">
            <center>
                <h1>Lic. Cristi Yanet Escalona</h1>
                <h1>www.controlseguridadyalegria.com</h1>
                <p>Contadora de Profesión Altruista de Corazón</p>
                <p>Contacto: contacto@controlseguridadyalegria.com</p>
                <p>Whatsapp: 984-111-2475</p>
            </center>
            <div class="redes">
                <a href="https://www.facebook.com/CristiEscalona1/"><img src="https://www.controlseguridadyalegria.com/images/005-facebook.png" alt="" width="32"></a>
                <a href="https://twitter.com/CristiEscalona"><img src="https://www.controlseguridadyalegria.com/images/004-gorjeo.png" alt="" width="32"></a>
                <a href="https://yanetescalona.blogspot.mx/"><img src="https://www.controlseguridadyalegria.com/images/003-blogger.png" alt="" width="32"></a>
                <a href="#"><img src="https://www.controlseguridadyalegria.com/images/002-google-plus.png" alt="" width="32"></a>
                <a href="#"><img src="https://www.controlseguridadyalegria.com/images/001-youtube.png" alt="" width="32"></a>
            </div>
        </div>
    </body>
</html>';
$mail->IsHTML(true);
$mail->Body = $cuerpo;
//Replace the plain text body with one created manually
//Attach an image file
//$mail->addAttachment('../../images/logo.png');
$mail->CharSet = 'UTF-8';
if(!$mail->Send()){
    echo '<script>swal("¡Error!", "Algo anda mal'. $mail->ErrorInfo .'", "error")</script>';
    
}else{
    echo '<script>swal({ title: "Bien hecho", text: "Puedes consultar tu contraseña en tu correo", type: "success" }, function(){ window.location.href = "login.php"; });</script>';
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