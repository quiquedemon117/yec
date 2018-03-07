<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../../sweetalert/sweetalert.css">
  <script type="text/javascript" src="../../sweetalert/sweetalert.min.js"></script>
  <title></title>
</head>
</html>
<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require '../../vendor/autoload.php';
  $response = $_POST["g-recaptcha-response"];
  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $data = array(
    'secret' => '6LdvASoUAAAAAG3KvuPijSjUrRXmQhxeePF2o6_W',
    'response' => $_POST["g-recaptcha-response"]
  );
  $options = array(
    'http' => array (
      'method' => 'POST',
      'content' => http_build_query($data)
    )
  );
  $context  = stream_context_create($options);
  $verify = file_get_contents($url, false, $context);
  $captcha_success=json_decode($verify);
  if ($captcha_success->success==false) {
    echo "<script>swal({ title: 'Oops...', text: 'Olvido utilizar el capcha', type: 'error' }, function(){ window.location.href = 'registro.html'; });</script>";
  } else if ($captcha_success->success==true) {
    if (isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['tipo'])){
session_start();
//Conectamos a la base de datos
include_once "../database/conexion.php";

//Obtenemos los datos del formulario de registro
$userPOST = $_POST['user'];
$passPOST = $_POST['pass'];
$nomPOST = $_POST['nombre'];
$apPOST = $_POST['apellidos'];
$tipoPOST = $_POST['tipo'];
date_default_timezone_set('America/Mexico_City');
$fecha = time();
$fechaformat = date("d-m-Y (H:i:s)", $fecha);

//Filtro anti-XSS
$userPOST = htmlspecialchars(mysqli_real_escape_string($con, $userPOST));
$passPOST = htmlspecialchars(mysqli_real_escape_string($con, $passPOST));
$nomPOST = htmlspecialchars(mysqli_real_escape_string($con, $nomPOST));
$apPOST = htmlspecialchars(mysqli_real_escape_string($con, $apPOST));
$tipoPOST = htmlspecialchars(mysqli_real_escape_string($con, $tipoPOST));


//Escribimos la consulta necesaria
$consultaUsuarios = "SELECT user FROM usuarios WHERE user= '$userPOST'";

//Obtenemos los resultados
$resultadoConsultaUsuarios = mysqli_query($con, $consultaUsuarios) or die(mysql_error());
$datosConsultaUsuarios = mysqli_fetch_array($resultadoConsultaUsuarios);
$userBD = $datosConsultaUsuarios['user'];

//Si el input de usuario o contraseña está vacío, mostramos un mensaje de error
//Si el valor del input del usuario es igual a alguno que ya exista, mostramos un mensaje de error

if ($userPOST == $userBD) {
/*   echo('<script>swal("Ya existe un usuario con el nombre ' . $userPOST . '")</script>');*/
   echo '<script>swal({ title: "Error", text: "Ya existe un usuario con el nombre ' . $userPOST . '", type: "error" }, function(){ window.location.href = "registro.html"; });</script>';
} else {
//Si no hay errores, procedemos a encriptar la contraseña
//Lectura recomendada: https://mimentevuela.wordpress.com/2015/10/08/establecer-blowfish-como-salt-en-crypt-2/
   //Armamos la consulta para introducir los datos
   //

    $consulta1 = "INSERT INTO usuarios (id_user, user, pass, tipo, fecharegistrousu, ultimaconexion, idsesion) 
  VALUES ('', '$userPOST', '$passPOST', '$tipoPOST', '$fechaformat', 'no login', 'no login');";


    $consulta2 = "INSERT INTO clientes (nombre, apellidos, user_id) VALUES ('$nomPOST', '$apPOST', last_insert_id())";

        if (mysqli_query($con, $consulta1)) {
            if (mysqli_query($con, $consulta2)) {
                
                    $mail = new PHPMailer;
//Set who the message is to be sent from
$mail->setFrom('contacto@controlseguridadyalegria.com', 'Yanet EScalona');
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress($userPOST);
//Set the subject line
$mail->Subject = 'Mensaje de Bienvenida';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mensaje = "Bienvenido a Yanet EScalona, gracias por formar parte de nosotros, ahora ya eres cliente distinguido de Yanet EScalona";
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
    echo '<script>swal({ title: "Bienvenido", text: "ahora ya puedes iniciar sesion", type: "success" }, function(){ window.location.href = "login.php"; });</script>';
}

        } else {
      echo '<script>swal({ title: "Ooops", text: "Algo salio mal", type: "error" }, function(){ window.location.href = "registro.html"; });</script>';
         }
      }
      
    } 

     }
} //Fin comprobación if(empty($userPOST) || empty($passPOST))
else{
echo "Las variables no estan definidas";
}

?>

