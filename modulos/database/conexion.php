<?php 
// datos para la coneccion a mysql 
define('DB_SERVER','localhost'); 
define('DB_NAME','yec'); 
define('DB_USER','root'); 
define('DB_PASS','Lebd2301'); 

$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);	
?>