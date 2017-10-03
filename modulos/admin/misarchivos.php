<?php

include_once('../database/conexion.php');
echo "<center><button class='btn btn-success' type='button'>Subir Archivos</button></center><br>";

$rs = "SELECT `usuarios`.`user`, `archivos`.`nombre_archivo`, `archivos`.`user_id` FROM `usuarios` LEFT JOIN `archivos` ON `usuarios`.`id_user` = `archivos`.`user_id`";
$resultado = mysqli_query($con, $rs); 

echo "<table class='table'>";  
echo "<tr>";  
echo "<th>Usuarios</th>";  
echo "<th>Archivos</th>";    
echo "</tr>";  
while ($row = mysqli_fetch_row($resultado)){   
    echo "<tr>";  
    echo "<td class='success'>".$row[0]."</td>";  
    echo "<td class='success'><a href='archivos/".$row[2]."/".$row[1]."' download='Factura'>".$row[1]."</a></td>";    
    echo "</tr>";  
}  
echo "</table>";  
?>


