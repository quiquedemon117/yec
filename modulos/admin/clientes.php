<?php
session_start();
include_once('../database/conexion.php');
$rs = "SELECT `usuarios`.`user`, `clientes`.`nombre`, `clientes`.`apellidos`, `usuarios`.`tipo` FROM `usuarios` LEFT JOIN `clientes` ON `usuarios`.`id_user` = `clientes`.`user_id`";
$resultado = mysqli_query($con, $rs);  
//se despliega el resultado
echo "<div class='container'";  
echo "<div class='table-responsive'>";
echo "<table class='table table-bordered table-hover table-condensed'>";  
echo "<tr class='info'>";  
echo "<th>Usuarios</th>";  
echo "<th>Nombre</th>";  
echo "<th>Apellidos</th>";
echo "<th>Tipo de usuario</th>";
echo "<th>Opciones</th>";  
echo "</tr>";  
while ($row = mysqli_fetch_row($resultado)){   
    echo "<tr>";  
    echo "<td>".$row[0]."</td>";  
    echo "<td>".$row[1]."</td>";  
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td><ol>

<button class='btn btn-success' type='' title='Liberar curso' data-toggle='modal' data-target='#myModal2'><i class='glyphicon glyphicon-education'></i></button>

<button title='Enviar correo' type='button' class='btn btn-warning' data-toggle='modal' data-target='#myModal'><i class='glyphicon glyphicon-envelope'></i></button>

<a href='#'><button class='btn btn-info' type=''><i class='glyphicon glyphicon-comment'></i>&nbsp;<span data-toggle='tooltip' title='Offline' class='badge bg-red'>Off</span></button></a>

</ol></td>";  
    echo "</tr>";  
}  
$_SESSION['address'] = $row[0];
echo "</table>";
echo "</div>";
echo "</div>"; 
?>