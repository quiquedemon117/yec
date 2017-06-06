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

	if(mysqli_num_rows(@$results) == 0){
        echo '<script>swal("¡Algo salio mal!", "El email que acaba de proporcionar es invalido o no existe", "error")</script>';
    }

    else{
        echo '<script>swal("¡Bien hecho!", "Puede verificar su contraseña en la bandeja de entrada de su correo", "success")</script>';
    }

}
?>