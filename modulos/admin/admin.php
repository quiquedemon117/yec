<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="theme-color" content="#F5F5DC">
	<title>Admin</title>
    <link rel="stylesheet" type="text/css" href="../../sweetalert/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/font-awesome.css">
    <link href="../../asset/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/clientes.css">
	<script type="text/javascript" src="../../js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../../sweetalert/sweetalert-dev.js"></script>
    <script type="text/javascript" src="../../js/dashboard.js"></script>
    <script src="../../js/highcharts/highcharts.js"></script>
    <script src="../../js/highcharts/highcharts-more.js"></script>
    <script src="../../js/highcharts/solid-gauge.js"></script>
    <script src="../../js/admin.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
<?php
   session_start();
   $_SESSION['user'] = $user;
   if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
   } else {
      echo "<script> swal({
  title: 'No puedes entrar aqui',
  text: '¡Debes iniciar sesion primero!',
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#DD6B55',
  confirmButtonText: 'Iniciar sesion!',
  closeOnConfirm: false
},
function(){
  window.location.href='../usuarios/login.php';
}) </script>";
  exit;
  }
   
  $now = time();
   
  if($now > $_SESSION['expire']) {
  session_destroy();
   
  echo "Su sesion a terminado,
  <a href='../usuarios/login.php'>Necesita iniciar sesion</a>";
  exit;
  }
  ?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="admin.php">Panel de administración</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li id="mc"><a href="#" id="div-btn1">Mis clientes</a></li>
        <li id="ma"><a href="#"  id="div-btn2">Mis archivos</a></li>
        <li id="cu"><a href="#"  id="div-btn3">Cursos</a></li> 
        <li id="ex"><a href="#"  id="div-btn4">Examenes</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-bell"></span> Notificasiones</a></li>
        <li><a href="../usuarios/logout.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar sesión</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="row">
<div class="col-md-12 text-center">
	<h3>Bienvenida Cristi tu sistema de administracion te saluda</h3>
</div>	
</div>

<div id="div-results"></div>

</body>
</html>