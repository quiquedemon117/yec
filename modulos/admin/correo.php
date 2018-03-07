<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
  <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="../../sweetalert/sweetalert.css">
	<title></title>
</head>
<script src="bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="../../sweetalert/sweetalert.min.js" type="text/javascript"></script>
</html>
<?php
header('Content-Type: text/html; charset=utf-8');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if (array_key_exists('userfile', $_FILES)) {
require '../../vendor/autoload.php';

if (isset($_POST['para']) && isset($_POST['asunto']) && isset($_POST['mensaje'])){

$paraPOST = $_POST['para'];
$asuntoPOST = $_POST['asunto'];
$mensajePOST = $_POST['mensaje'];
utf8_encode($mensajePOST);

$mail = new PHPMailer;
//Set who the message is to be sent from
$mail->setFrom('contacto@controlseguridadyalegria.com', 'Yanet EScalona');
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress($paraPOST);
//Set the subject line
$mail->Subject = $asuntoPOST;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$cuerpo = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <title>Email</title>
        <style>
            A:link {color: black; font-size: 8pt; font-family: arial; text-decoration: none }
            A:hover {color: black; font-size: 8pt; font-family: arial; text-decoration: none }
            A:visited {color: black; font-size: 8pt; font-family: arial; text-decoration: none }
            .img-1{
              max-width: 70px;
              padding-top: 14px;
              padding-left: 10px; 
            }
            .img-2{
              width: 100%;
              max-width: 250px;
              padding-top: 14px;
              padding-left: 10px;
            }
            .cabeza{
                width: 100%;
                height: 100%;
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
                height: 100%;
                background: #222222;
            }
            .control h1, .control p{
                    padding-left: 5px;
                    color: #FFFFFF;
                }
            .seguridad{
                width: 100%;
                height: 100%;
                background: #ffffff;
            }
            .seguridad h1, .seguridad p{
                    padding-left: 5px;
                    color: #E36C0A;
                }
            .alegria{
                width: 100%;
                height: 100%;
                background: #FF8F29;
            }
            .datos{
                width: 100%;
                height: 100%;
                background: #B00000;
            }
            .datos h1, .datos p{
                color: #ffffff;
            }
            .datos .correo{
                float: right;
                padding: 15px; 
            }
            .link{
              font-size: 20px;
            }
        </style>
        
    </head>
    <body>
        <div class="cabeza">
            <img class="img-1" src="https://www.controlseguridadyalegria.com/images/pieza.png" width="70px" alt="">
            <img class="img-2" src="https://www.controlseguridadyalegria.com/images/logo.png" alt="" width="250"><br><br>
        </div>
        <div class="mensaje">
            <h2>'.$mensajePOST.'</h2>
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
        <div class="datos col-md-12">
            <img class="correo col-md-2" src="https://www.controlseguridadyalegria.com/images/correo.png" alt="" width="50"><br>
              <center class="col-md-10">
                <h1>Lic. Cristi Yanet Escalona</h1>
                <p class="link">www.controlseguridadyalegria.com</p>
                <p>Contadora de Profesión Altruista de Corazón</p>
                <p>Contacto: contacto@controlseguridadyalegria.com</p>
                <p>Whatsapp: 984-111-2475</p>
            </center>
            <div class="redes col-md-5">
                <a href="https://www.facebook.com/CristiEscalona1/"><img src="https://www.controlseguridadyalegria.com/images/005-facebook.png" alt="" width="32"></a>
                <a href="https://twitter.com/CristiEscalona"><img src="https://www.controlseguridadyalegria.com/images/004-gorjeo.png" alt="" width="32"></a>
                <a href="https://yanetescalona.blogspot.mx/"><img src="https://www.controlseguridadyalegria.com/images/003-blogger.png" alt="" width="32"></a>
                <a href="#"><img src="https://www.controlseguridadyalegria.com/images/002-google-plus.png" alt="" width="32"></a>
                <a href="#"><img src="https://www.controlseguridadyalegria.com/images/001-youtube.png" alt="" width="32"></a>
            </div><br>
        </div><br>
    </body>
</html>';
$mail->IsHTML(true);
$mail->Body = $cuerpo;
//Replace the plain text body with one created manually
//Attach an image file
//$mail->addAttachment('../../images/logo.png');
$mail->CharSet = 'UTF-8';

    for ($ct = 0; $ct < count($_FILES['userfile']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['userfile']['name'][$ct]));
        $filename = $_FILES['userfile']['name'][$ct];
        if (move_uploaded_file($_FILES['userfile']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            echo '<script>swal({ title: "Oops", text: "Error al mover el archivo a'. $uploadfile .'", type: "error" }, function(){ window.location.href = "admin.php"; });</script>';
        }
    }

if(!$mail->Send()){
    echo '<script>swal({ title: "Oops", text: "¡Error! Algo anda mal'. $mail->ErrorInfo .'", type: "error" }, function(){ window.location.href = "admin.php"; });</script>';
    
}else{
    echo '<script>swal({ title: "Bien", text: "El correo se envio correctamente", type: "success" }, function(){ window.location.href = "admin.php"; });</script>';
}
}

}else{
	echo "No puede dejar vacio los campos";
}
?>

