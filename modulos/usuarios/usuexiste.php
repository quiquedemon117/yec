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

  // primero hay que incluir la clase phpmailer para poder instanciar
  //un objeto de la misma

  require_once "../../vendor/autoload.php";

  //instanciamos un objeto de la clase phpmailer al que llamamos 
  //por ejemplo mail
  $mail = new PHPMailer(true);

 try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'user@example.com';                 // SMTP username
    $mail->Password = 'secret';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '<script>swal("¡Bien hecho!", "Puede verificar su contraseña en la bandeja de entrada de su correo", "success")</script>';
} catch (Exception $e) {
    echo '<script>swal("¡Error!", "Algo anda mal", "error")</script>';
}
    /*else {

        echo '<script>swal("¡Bien hecho!", "Puede verificar su contraseña en la bandeja de entrada de su correo", "success")</script>';
    }*/


    }

}
?>