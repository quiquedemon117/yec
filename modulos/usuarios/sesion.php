<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://controlseguridadyalegria.com/sweetalert/sweetalert.css">
    <style type="text/css" media="screen">
      img{
      max-width: 800px;
      display: block;
      margin-left: auto;
      margin-right: auto;
      }
    </style>
    <script src="https://controlseguridadyalegria.com/sweetalert/sweetalert.min.js" type="text/javascript" charset="utf-8"></script>
  <title>Prohibido</title>
</head>
<body>
<?php
   session_start();
   $_SESSION['user'] = $user;
   if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
   } else {
      echo "<img src='https://controlseguridadyalegria.com/images/prohibido.jpg' alt='prohibido' title='Prohibido estar aqui' width='100%''><script> swal({
  title: 'No puedes entrar aqui',
  text: '¡Debes iniciar sesion primero!',
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#DD6B55',
  confirmButtonText: 'Iniciar sesion!',
  closeOnConfirm: false
},
function(){
  window.location.href='https://controlseguridadyalegria.com/modulos/usuarios/login.php';
}) </script>";
  exit;
  }
   
  $now = time();
   
  if($now > $_SESSION['expire']) {
  session_destroy();
   
  echo "Su sesion a terminado,
  <a href='http://localhost/yec/modulos/usuarios/login.php'>Necesita iniciar sesion</a>";
  exit;
  }
  ?>
</body>
</html>