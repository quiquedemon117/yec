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
  $response = $_POST["g-recaptcha-response"];
  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $data = array(
    'secret' => '6LeFFSIUAAAAAM_0VJNPMJj_UkRy0_wwPgxhJNLr',
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
   $consulta = "INSERT INTO usuarios (user, pass, tipo, fecharegistrousu, ultimaconexion, idsesion) 
  VALUES ('$userPOST', '$passPOST', '$tipoPOST', '$fechaformat', 'no login', 'no login')";

   $consulta2 = "INSERT INTO clientes (nombre, apellidos) VALUES ('$nomPOST', '$apPOST')";

   //Si los datos se introducen correctamente, mostramos los datos
   //Sino, mostramos un mensaje de error
   if (mysqli_query($con, $consulta) && mysqli_query($con, $consulta2)) {
       die('<script>swal({ title: "Bienvenido", text: "ahora ya puedes iniciar sesion", type: "success" }, function(){ window.location.href = "login.html"; });</script>');
   } else {
       die('Error de administración');
   };
}; //Fin comprobación if(empty($userPOST) || empty($passPOST))

}else{
echo "Las variables no estan definidas";
}
  }

?>

