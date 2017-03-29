<?php 
$host = "127.0.0.1";
$usuario = "root";
$password = "Lebd2301";
$dbname = "yec";

$conexion = mysqli_connect($host, $usuario, $password, $dbname);

if($conexion){
    return "Conectado";
}else{
    return "No conectado";
}
?>
