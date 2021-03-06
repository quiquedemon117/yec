<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#B9090B">
    <meta name="description" content="Ven y comienza a conocer los beneficios de ser parte de Yanet EScalona">
    <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon"> 
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../asset/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../asset/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="../../sweetalert/sweetalert.css">
    <link rel="stylesheet" href="../../css/login.css">
    <script type="text/javascript" src="../../js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../../sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript" src="../../asset/js/bootstrap.js"></script>
</head>

<body>
<div class="container">
<div class="row main">
  <div class="login-form col-md-offset-4 col-md-4">
  <form method="post" action="logueo.php" id="form">
     <a href="../../index.html"><img src="../../images/logo.png" width="100%" alt="Yanet EScalona" title="Home"></a><br>
     <div class="form-group ">
       <input type="text" class="form-control" name="user" placeholder="Usuario" id="user"  required>
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
       <input type="password" class="form-control" name="pass" placeholder="Contraseña" id="pass"  required>
       <i class="fa fa-lock"></i>
     </div>
      
     <input type="submit" name="login" id="login" value="Iniciar sesion" class="log-btn">
     
    </form>
    <center>
      <br><a class="link" href="registro.html">Registrate</a><br>
      <a class="link" href="recupass.html" id="old">¿Olvidaste tu contraseña?</a>
      </center>
   </div>
</div>
</div>
</body>
</html>
