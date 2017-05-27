<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">

    <title>Tu cuenta-Yanet EScalona</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/clientes.css">
    <link rel="stylesheet" type="text/css" href="../../sweetalert/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/font-awesome.css">
    <script type="text/javascript" src="../../sweetalert/sweetalert-dev.js"></script>
    <script type="text/javascript" src="../../js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../../js/dashboard.js"></script>
    <script src="../../js/highcharts/highcharts.js"></script>
    <script src="../../js/highcharts/highcharts-more.js"></script>
    <script src="../../js/highcharts/solid-gauge.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
  window.location.href='../usuarios/login.html';
}) </script>";
  exit;
  }
   
  $now = time();
   
  if($now > $_SESSION['expire']) {
  session_destroy();
   
  echo "Su sesion a terminado,
  <a href='../usuarios/login.html'>Necesita iniciar sesion</a>";
  exit;
  }
  ?>
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="background-color: #B9090B;">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                     
                             <a href="../../index.html"><img src="../../images/logo.png" width="85%"></a><br>

                </li>
                <li>
                    <a href="#" onclick="micuenta();">Mi cuenta</a>
                </li>
                <li>
                    <a  href="#" onclick="miscursos();">Mis cursos</a>
                </li>
                <li>
                    <a  href="#" onclick="tienda();">Tienda de cursos</a>
                </li>
                <li>
                    <a  href="#" onclick="progreso();">Progreso</a>
                </li>
                <li>
                    <a  href="#" onclick="contactos();">Contacto</a>
                </li>
                <li>
                    <a href="../usuarios/logout.php">Cerrar sesion</a>
                </li>

            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
						<i class="fa fa-envelope" aria-hidden="true" style="float:right; font-size:400%;"></i><br>
                        <div id="home">
                        <center><h1 class="text-center" style="width: 100%;">Bienvenido<br><< <?php echo $_SESSION['nom'];?> >> </h1></center>
                        <center><p>Este es el proceso que llevas actualmente:</p>
                         <div id="container" style="width: 100%; height: 100%; max-width: 350px; margin: 0 auto"></div></center>
                         </div>

                         <div id="miscursos">
                         	<p>Lorem ipsum dolor sit amet, consectetuvadfvafdr adipisicing elit, sed do eiusmod
                         	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                         	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                         	consequat. Duis aute adfvadfvadfirure dafolor in reprehenderit in voluptate velit esse
                         	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                         	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                         </div>

                         <div id="tienda">
                         	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                         	tempor incididunt ut labore et doloradfvadfve magna aliqua. Ut enim ad minim veniam,
                         	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                         	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                         	cillum dolore eu fugiat nulla pariatur. dafvadfvExcepteur sint occaecat cupidatat non
                         	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                         </div>

                         <div id="progreso">
                         	<p>Lorem ipsum dolor sit amet, consectadfvadfetur adipisicing elit, sed do eiusmod
                         	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                         	quis nostrud exercitation ullamco laboris nvadfvadfisi ut aliquip ex ea commodo
                         	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                         	cillum dolore euvadfvadf fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                         	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                         </div>

                         <div id="contacto">
                         	<p>Lorem ipsum dolor sit amet, cdfvansectetur adipisicing elit, sed do eiusmod
                         	tempor incididunt ut laadfvabore et dolore magndfv aliqua. Ut enim ad minim veniam,
                         	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                         	consequat. Ddfvuiadfvas aute irure dolor inadfv reprehenderit in voluptate velit esse
                         	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                         	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                         </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->


    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../js/jquery-2.1.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../asset/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

<script type="text/javascript">
// Uncomment to style it like Apple Watch

if (!Highcharts.theme) {
    Highcharts.setOptions({
        chart: {
            backgroundColor: null
        },
        colors: ['#F62366', '#9DFF02', '#0CCDD6'],
        title: {
            style: {
                color: 'black'
            }
        },
        tooltip: {
            style: {
                color: 'black'
            }
        }
    });
}
// 

Highcharts.chart('container', {

    chart: {
        type: 'solidgauge',
        marginTop: 50
    },

    title: {
        text: '',
        style: {
            fontSize: '24px'
        }
    },

    tooltip: {
        borderWidth: 0,
        backgroundColor: 'none',
        shadow: false,
        style: {
            fontSize: '16px'
        },
        pointFormat: '{series.name}<br><span style="font-size:2em; color: {point.color}; font-weight: bold">{point.y}%</span>',
        positioner: function (labelWidth) {
            return {
                x: 150 - labelWidth / 2,
                y: 180
            };
        }
    },

    pane: {
        startAngle: 0,
        endAngle: 360,
        background: [{ // Track for Move
            outerRadius: '112%',
            innerRadius: '88%',
            backgroundColor: Highcharts.Color(Highcharts.getOptions().colors[0])
                .setOpacity(0.3)
                .get(),
            borderWidth: 0
        }, { // Track for Exercise
            outerRadius: '87%',
            innerRadius: '63%',
            backgroundColor: Highcharts.Color(Highcharts.getOptions().colors[1])
                .setOpacity(0.3)
                .get(),
            borderWidth: 0
        }, { // Track for Stand
            outerRadius: '62%',
            innerRadius: '38%',
            backgroundColor: Highcharts.Color(Highcharts.getOptions().colors[2])
                .setOpacity(0.3)
                .get(),
            borderWidth: 0
        }]
    },

    yAxis: {
        min: 0,
        max: 100,
        lineWidth: 0,
        tickPositions: []
    },

    plotOptions: {
        solidgauge: {
            dataLabels: {
                enabled: false
            },
            linecap: 'round',
            stickyTracking: false,
            rounded: true
        }
    },

    series: [{
        name: 'Cursos',
        data: [{
            color: Highcharts.getOptions().colors[0],
            radius: '112%',
            innerRadius: '88%',
            y: 80
        }]
    }, {
        name: 'Avance empresarial',
        data: [{
            color: Highcharts.getOptions().colors[1],
            radius: '87%',
            innerRadius: '63%',
            y: 65
        }]
    }, {
        name: 'Avance personal',
        data: [{
            color: Highcharts.getOptions().colors[2],
            radius: '62%',
            innerRadius: '38%',
            y: 50
        }]
    }]
},

/**
 * In the chart load callback, add icons on top of the circular shapes
 */
function callback() {

    // Move icon
    this.renderer.path(['M', -8, 0, 'L', 8, 0, 'M', 0, -8, 'L', 8, 0, 0, 8])
        .attr({
            'stroke': '#303030',
            'stroke-linecap': 'round',
            'stroke-linejoin': 'round',
            'stroke-width': 2,
            'zIndex': 10
        })
        .translate(190, 26)
        .add(this.series[2].group);

    // Exercise icon
    this.renderer.path(['M', -8, 0, 'L', 8, 0, 'M', 0, -8, 'L', 8, 0, 0, 8,
            'M', 8, -8, 'L', 16, 0, 8, 8])
        .attr({
            'stroke': '#ffffff',
            'stroke-linecap': 'round',
            'stroke-linejoin': 'round',
            'stroke-width': 2,
            'zIndex': 10
        })
        .translate(190, 61)
        .add(this.series[2].group);

    // Stand icon
    this.renderer.path(['M', 0, 8, 'L', 0, -8, 'M', -8, 0, 'L', 0, -8, 8, 0])
        .attr({
            'stroke': '#303030',
            'stroke-linecap': 'round',
            'stroke-linejoin': 'round',
            'stroke-width': 2,
            'zIndex': 10
        })
        .translate(190, 96)
        .add(this.series[2].group);
});


    </script>

</html>
