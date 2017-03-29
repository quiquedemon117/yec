<?php 

$link = mysql_connect('localhost', 'root', 'Lebd2301')
    or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully';
mysql_select_db('yanet_escalona') or die('No se pudo seleccionar la base de datos'); 

    $query = "select id, user, nombre, apellidos, tipo, fecharegistrousu, ultimaconexion from usuarios";     // Esta linea hace la consulta
    $result = mysql_query($query);
    
    if (!$resultado) {
    $mensaje  = 'Consulta no válida: ' . mysql_error() . "\n";
    $mensaje .= 'Consulta completa: ' . $query;
    die($mensaje);
}

    while ($registro = mysql_fetch_array($result)){ 
    echo $fila['id'];
    echo $fila['usser'];
    echo $fila['nombre'];
    echo $fila['apellidos'];
    echo $fila['tipo'];
    echo $fila['fecharegistrousu'];
    echo $fila['ultimaconexion'];
} 

?>

