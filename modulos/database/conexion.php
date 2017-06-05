<?php 
// datos para la coneccion a mysql 
define('DB_SERVER','localhost'); 
define('DB_NAME','yec'); 
define('DB_USER','lebd'); 
define('DB_PASS','Lebd2301'); 

$currency			= '&#8377; '; 
$shipping_cost		= 1.50; 
$taxes				= array( 
							'VAT' => 12, 
							'Service Tax' => 5,
							'Other Tax' => 10
							);

$con = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if ($mysqli_conn->connect_error) {
    die('Error : ('. $mysqli_conn->connect_errno .') '. $mysqli_conn->connect_error);
}	
?>