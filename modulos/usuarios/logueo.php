<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../sweetalert/sweetalert.css">
    <script type="text/javascript" src="../../sweetalert/sweetalert.min.js"></script>
</head>
</html>
<?php

if (isset($_POST["user"]) && isset($_POST["pass"])) {
    session_start();
    include_once "../database/conexion.php";

    $user = mysqli_real_escape_string($con, $_POST["user"]);
    $pass = mysqli_real_escape_string($con, $_POST["pass"]);

    $sql = "SELECT * FROM usuarios WHERE user='$user' AND pass='$pass'";
    $result = mysqli_query($con, $sql);

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['id'] = $row['id']; // descargo id de la bd
        $_SESSION['nom'] = $row['user']; // descargo el nombre de la base de datos
        $ns = $row['privilegios']; // descargo el nivel de usuario


        if ($ns == 1) { // relizo la comparacion para saber a q menu de usuario me va direcionar si es NivelUsuario 1 va al pagina inicio administrador
            $_SESSION['loggedin'] = true;
            $_SESSION['user'] = $user;
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);

            $data = mysqli_fetch_array($result);
            $_SESSION["user"] = $data["user"];
            /*echo"2";*/
            header("refresh:0.1 ;url=/modulos/admin/admin.php");
        } else {
            $_SESSION['loggedin'] = true;
            $_SESSION['user'] = $user;
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
            $data = mysqli_fetch_array($result);
            $_SESSION["user"] = $data["user"];
            /*echo "1";*/
            header("refresh:0.1 ;url=/modulos/clientes/clientes.php");
        }
    } else {
        echo '<script>swal("Oops", "El usuario o contraseña no son validos!", "error");</script>';
        header("refresh:2.1 ;url=/modulos/usuarios/login.php");
    }
} else {
    echo "error las variables no estan definidas";
}
?>