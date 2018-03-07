<?php 

include_once('../database/conexion.php');
$rs = "SELECT `usuarios`.`user`, `clientes`.`nombre`, `clientes`.`apellidos` FROM `usuarios` LEFT JOIN `clientes` ON `usuarios`.`id_user` = `clientes`.`user_id`";
$resultado = mysqli_query($con, $rs);  
//se despliega el resultado  
echo "<table class='table table-striped table-bordered table-hover table-condensed'>";  
echo "<tr>";  
echo "<th>Usuarios</th>";  
echo "<th>Nombre</th>";  
echo "<th>Apellidos</th>";
echo "<th>Acciones</th>";  
echo "</tr>";  
while ($row = mysqli_fetch_row($resultado)){   
    echo "<tr>";  
    echo "<td>".$row[0]."</td>";  
    echo "<td>".$row[1]."</td>";  
    echo "<td>".$row[2]."</td>";
    echo "<td></td>";  
    echo "</tr>";  
}  
echo "</table>";  

?>