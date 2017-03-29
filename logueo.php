<?php

if (isset($_POST["user"]) && isset($_POST["pass"])) {
    include('controladores/conexion.php');
    session_start();
    $connect = $connection;

    $user = mysqli_real_escape_string($connect, $_POST["user"]);
    $pass = mysqli_real_escape_string($connect, $_POST["pass"]);

    $sql = "SELECT * FROM usuarios WHERE user='$user' AND pass='$pass'";
    $result = mysqli_query($connect, $sql);

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['id'] = $row['id']; // descargo id de la bd
        $_SESSION['nom'] = $row['user']; // descargo el nombre de la base de datos
        $ns = $row['privilegios']; // descargo el nivel de usuario


        if ($ns == 1) { // relizo la comparacion para saber a q menu de usuario me va direcionar si es NivelUsuario 1 va al pagina inicio administrador
            header("refresh:0.1 ;url=/Yanet_EScalona/admin.php");
            $data = mysqli_fetch_array($result);
            $_SESSION["user"] = $data["user"];
            echo"2";
        } else {
            $data = mysqli_fetch_array($result);
            $_SESSION["user"] = $data["user"];
            echo "1";
            header("refresh:0.1 ;url=/Yanet_EScalona/clientes.php");
        }
    } else {

        header("refresh:2.9 ;url=/Yanet_EScalona/login.php");
    }
} else {
    echo "error las variables no estan definidas";
}
?>