<?php
session_start(); //start session
require('../usuarios/sesion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
  <meta name="theme-color" content="#101010">
	<title>Admin</title>
  <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="../../sweetalert/sweetalert.css">
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,div-btn100,600,700,300italic,div-btn100italic,600italic">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.div-btn1.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
    <style type="text/css">   
  a:link   
  {   
   text-decoration:none;   
  }   
  </style>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           </button>
           <a href="admin.php" class="navbar-brand">Panel de administración</a> 
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li id="mc"><a href="#" id="div-btn1">Mis clientes</a></li>
            <li id="ma"><a href="#" id="div-btn2">Archivos</a></li>
            <li id="cu"><a href="#" id="div-btn3">Cursos</a></li>
            <li id="ex"><a href="#" id="div-btn4">Examenes</a></li>
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
  <hr>
</div>  
</div>

<div id="div-results"></div><br>

<div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-xs">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">E-mail</h4>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Enviar correo</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="correo.php" method="POST" accept-charset="latin1" enctype="multipart/form-data" onsubmit="return checkSize(31457280)">
              <div class="form-group">
              <?php echo '<input type="text" class="form-control" placeholder="Para:" id="para" name="para" value="'.$_SESSION['user'].'" required>'; ?> 
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Asunto:" name="asunto" required>
              </div>
              <div class="form-group">
                <textarea type="text" placeholder="Mensaje:" id="compose-textarea" class="form-control" style="height: 200px" name="mensaje" required></textarea>
              </div>
              <div class="form-group">
                <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> Adjuntar
                  <input type="hidden" name="MAX_FILE_SIZE" value="31457280">
                  <input name="userfile[]" type="file" multiple="multiple" id="upload">
                </div>
                <p class="help-block">Max. 30MB</p>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="button" class="btn btn-default" id="limpiar"><i class="fa fa-pencil"></i> Borrar</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Enviar</button>
              </div>
              </form>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        </div>
        <div class="modal-footer">
<!--           <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button> -->
        </div>
      </div>
    </div>
  </div>
</div>

<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Liberar curso</h4>
      </div>
      <div class="modal-body">
        <center>
          <p>Cursos disponibles para el usuario:</p>
          <?php
          echo '<input type="text" name="nombre_full" class="form-control" readonly="readonly" value="'.$nombre_full.'"><br>'; 
          ?>
        </center>
        <?php
        include_once('../database/conexion.php');
        $sas = "SELECT product_name, product_price FROM cursos";
        $res = mysqli_query($con, $sas);
        echo "<table class='table'>";
        echo "<tr class='info'>";   
        echo "<th>Nombre del curso</th>";
        echo "<th>Precio</th>";
        echo "<th>Estado</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_row($res)){
        echo "<tr>";
        echo "<td>".$row[0]."</td>";
        echo "<td>$ ".$row[1]."</td>";
        echo "<td>No liberado</td>"; 
        } 
        echo "</tr>";  
        echo "</table>";
        echo"<br>";
        echo '<form action="admin.php" method="get" accept-charset="utf-8">';     
        echo '<center><select class="form-control selectpicker" name="curso" required>';
        echo "<option value=''>Seleccione una curso</option>";
        $saz = "SELECT product_name, product_price FROM cursos";
        $rez = mysqli_query($con, $saz);
        while ($lamp = mysqli_fetch_array($rez)) {
        echo "<option value=".$lamp[0].">".$lamp[0]."</option>";
          }
        echo '</select>';
        echo "<br>";
        echo '<button type="submit" class="btn btn-success">Liberar Curso</button></center>'; 
        echo '</form>';   
        ?>
        <?php
          if(isset($_GET["curso"])){
            $karina = mysqli_query($con, "SELECT `clientes`.`id_cliente`, `cursos`.`product_name` FROM `clientes` , `cursos` WHERE id_cliente = '$id_cliente'");
            $kari = mysqli_fetch_array($karina);
            $insert = "INSERT INTO venta (cliente_id, curso_id) VALUES ('$kari[0]', '$kari[1]')";
            if(mysqli_query($con, $insert)){
              echo '<script>swal({ title: "Bien", text: "Se libero el curso correctamente", type: "success" }, function(){ window.location.href = "admin.php"; });</script>';
            }else{
              echo '<script>swal({ title: "Oops", text: "¡Error! Algo anda mal, type: "error" }, function(){ window.location.href = "admin.php"; });</script>';
            }
          }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
</div>
</body>
    <script src="bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <script type="text/javascript" src="../../js/dashboard.js"></script>
    <script src="../../js/highcharts/highcharts.js"></script>
    <script src="../../js/highcharts/highcharts-more.js"></script>
    <script src="../../js/highcharts/solid-gauge.js"></script>
    <script src="../../js/admin.js" type="text/javascript"></script>
    <script src="../../sweetalert/sweetalert.min.js" type="text/javascript"></script>
    <script src="bower_components/fastclick/lib/fastclick.js" type="text/javascript"></script>
    <script src="dist/js/adminlte.min.js" type="text/javascript"></script>
    <script type="text/javascript" charset="utf-8" async defer>
      $(document).ready(function() {
  $('#limpiar').click(function() {
    $('input[type="text"]').val('');
    $('textarea[type="text"]').val('');
  });
});
    </script>
    <script type="text/javascript">
function checkSize(max_img_size)
{
    var input = document.getElementById("upload");
    // check for browser support (may need to be modified)
    if(input.files && input.files.length == 1)
    {           
        if (input.files[0].size > max_img_size) 
        {
            swal("The file must be less than " + (max_img_size/1024/1024) + "MB");
            return false;
        }
    }

    return true;
}
</script>

</html>