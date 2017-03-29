<?php

//Conectamos a la base de datos
require('conexion.php');

//Obtenemos los datos del formulario de registro
$userPOST = filter_input(INPUT_POST, $_POST['usuario']);
//$passPOST = $_POST["contraseña"];
//$nomPOST = $_POST["nombre"];
//$apPOST = $_POST["apellido"];
//$tipoPOST = $_POST["tipo"];
$fecha = time();
$fechahora = date("d-m-Y (H:i:s)", $fecha);

echo $userPOST;




////Filtro anti-XSS
//$userPOST = htmlspecialchars(mysqli_real_escape_string($conexion, $userPOST));
//$passPOST = htmlspecialchars(mysqli_real_escape_string($conexion, $passPOST));
//$nomPOST = htmlspecialchars(mysqli_real_escape_string($conexion, $nomPOST));
//$apPOST = htmlspecialchars(mysqli_real_escape_string($conexion, $apPOST));
//$tipoPOST = htmlspecialchars(mysqli_real_escape_string($conexion, $tipoPOST));
//
////Definimos la cantidad máxima de caracteres
////Esta comprobación se tiene en cuenta por si se llegase a modificar el "maxlength" del formulario
////Los valores deben coincidir con el tamaño máximo de la fila de la base de datos
//$maxCaracteresUser = "150";
//$maxCaracteresPass = "150";
//$maxCaracteresNom = "100";
//$maxCaracteresAp = "100";
//$maxCaracteresTipo = "150";
//
////Escribimos la consulta necesaria
//$consultaUsuarios = "SELECT user FROM usuarios";
//
////Obtenemos los resultados
//$resultadoConsultaUsuarios = mysqli_query($conexion, $consultaUsuarios) or die(mysql_error());
//$datosConsultaUsuarios = mysqli_fetch_array($resultadoConsultaUsuarios);
//$userBD = $datosConsultaUsuarios['user'];
//
////Si el input de usuario o contraseña está vacío, mostramos un mensaje de error
////Si el valor del input del usuario es igual a alguno que ya exista, mostramos un mensaje de error
//
//if ($userPOST == $userBD) {
//    die('Ya existe un usuario con el nombre ' . $userPOST . '');
//} else {
////Si no hay errores, procedemos a encriptar la contraseña
////Lectura recomendada: https://mimentevuela.wordpress.com/2015/10/08/establecer-blowfish-como-salt-en-crypt-2/
//    //Armamos la consulta para introducir los datos
//    $consulta = "INSERT INTO usuarios (user, pass, nombre, apellido, tipo, fecharegistrousu, ultimaconexion, idsesion) 
//	VALUES ('$userPOST', '$passPOST' , '$nomPOST', '$apPOST'), '$tipoPOST', '$fecha', 'no login', 'no login'";
//
//    //Si los datos se introducen correctamente, mostramos los datos
//    //Sino, mostramos un mensaje de error
//    if (mysqli_query($conexion, $consulta)) {
//        die('<script>$(".registro").val("");</script>
//Registrado con éxito <br>
//Ya puedes acceder a tu cuenta <br>
//<br>
//Datos:<br>
//Usuario: ' . $userPOST . '<br>
//Contraseña: ' . $passPOST);
//    } else {
//        die('Error de luis');
//    };
//}; //Fin comprobación if(empty($userPOST) || empty($passPOST))
?>