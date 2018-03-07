<?php
include_once "../../database/conexion.php";
$sql = "SELECT * FROM usuarios WHERE user='$user' AND pass='$pass'";
$result = mysqli_query($con, $sql); 
echo "<table class='table table-striped table-bordered table-hover table-condensed'>";  
echo "<tr>";  
echo "<th>Usuarios</th>";  
echo "<th>Nombre</th>";  
echo "<th>Apellidos</th>";
echo "<th>Tipo de usuario</th>";
echo "<th>Acciones</th>";  
echo "</tr>";  
while ($row = mysqli_fetch_row($result)){   
    echo "<tr>";  
    echo "<td>".$row[0]."</td>";  
    echo "<td>".$row[1]."</td>";  
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td><ol>

<a href='#'><button class='btn btn-success' type=''>Liberar Curso</button></a>

<a href='#'><button class='btn btn-warning' type=''>Enviar correo</button></a>

<a href='#'><button class='btn btn-info' type=''>Abrir chat</button></a>

</ol></td>";  
    echo "</tr>";  
}  
echo "</table>";  
?>