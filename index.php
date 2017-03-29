<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Despacho contable</title>
        <link rel="shortcut icon" href="imagenes/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="fonts/style.css">
        <link rel="stylesheet" href="css/fondo.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/new.css">
        <link href="css/footer.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
        <link rel="stylesheet" type="text/css" href="css/cajaderedes.css">
    </head>
    <body>
        <div class="container">
            <div class="container">
                <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collased" data-toggle="collapse" data-target="#navbar-1">
                            <span class="sr-only">Menu</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <button class="btn btn-link navbar-brand firma-navbar-3"><a href="index.jsp" >Yanet EScalona</a></button>
                    </div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar-1">
                        <ul class="nav navbar-nav">

                            <li><a target="_blank" href="acerca.php">Acerca</a></li>
                            <li><a target="_blank" href="http://yanetescalona.blogspot.mx/">Blog</a></li>
                            <li><a target="_blank" href="cursos.php">Cursos</a></li>
                            <li><a target="_blank" href="sobremi.php">Sobre Mi</a></li>

                        </ul>                                        
                        <form name="buscar" action="" class="navbar-form navbar-left" role="search" onSubmit="return busgoo();">
                            <div class="form-group">
                                <input name="buscar1" id="search" type="text" class="form-control" placeholder="Buscar...">
                            </div>
                            <button type="submit" class="btn btn-default glyphicon glyphicon-search"></button>
                        </form>
                        <ul class="nav navbar-nav navbar-right">                                            

                            <li style="right: 20px;"><button type="button" class="btn btn-link navbar-btn" ><a href="registro.php">Registro</a></button></li>
                            <li style="right: 20px;"><button type="button" class="btn btn-link navbar-btn"><a href="login.php">Iniciar sesion</a></button></li>
                            

                        </ul>
                    </div>
                </nav>
            </div>

            <br/>
            <br/>

            <div class="row">
                <header id="myCarousel" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for Slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <!-- Set the first background image using inline CSS below. -->
                            <div class="fill" style="background-image:url('imagenes/slider/4.jpg');"><div class="espacio"/></div></div>
                        <div class="carousel-caption centerlol">
                            <div class="form form-gropug" style="padding:30px; background-color: rgba(253, 163, 102, .5) ; position: relative; float:top; margin: 0 auto;">
                                <label for="">Captura Contable</label><br>
                                <hr>
                                <p>Nuestra amplia gama de servicios en el área de contabilidad están dirigidos a clientes de todos los tamaños y tipos de negocio.</p>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Set the second background image using inline CSS below. -->
                        <div class="fill" style="background-image:url('imagenes/slider/5.jpg');"><div class="espacio"/></div></div>
                    <div class="carousel-caption centerlol">
                        <div class="form form-gropug" style="padding:30px; background-color: rgba(253, 163, 102, .5) ; position: relative; float:inside; margin: 0 auto;">
                            <label for="">Seguros</label><br>
                            <hr>
                            <p>Nuestro enfoque de auditoría se adapta a las características y necesidades particulares de cada cliente y consiste en la aplicación de las más modernas técnicas de auditoría.</p>

                        </div>
                    </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('imagenes/slider/6.jpg');"><div class="espacio"/></div></div>
            <div class="carousel-caption centerlol">
                <div class="form form-gropug" style="padding:30px; background-color: rgba(253, 163, 102, .5) ; position: relative; float:inside; margin: 0 auto;">
                    <label for="">Cursos</label><br>
                    <hr>
                    <p>Ayudamos a nuestros clientes a mejorar, fortalecer y desarrollar la forma de gestionar a sus empleados dentro de su empresa.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>
</div>


<div class="container">
    <div class="row sepa" id='valores'>
        <div class="panel panel-default col-md-6">
            <div class="panel-heading" id="val">MISIÓN</div>
            <div class="panel-body">
                <span class="capitalLetter" style='color:#9F918E;'>C</span><p>ompartir la satisfacción  y libertad de ser Empresario, logar la trascendencia como profesional Integro, colaborar a tu autonomía por medio de mis cursos, seguros y servicios contables.</p><br>

            </div>

        </div>
        
        <div class="panel panel-default col-md-6">
            <div class="panel-heading" id="val">VISIÓN</div>
            <div class="panel-body">
                <span class="capitalLetter" style='color:#63C3C2;'>S</span><p>é que no soy eterna, pero puedo ayudarte a ser mejor y a que disfrutes el placer de existir.</p><br><br>
            </div>
        </div>
        <div class="panel panel-default col-md-offset-4 col-md-4">
            <div class="panel-heading" id="val">VALORES</div>
            <div class="panel-body" id="list">
                <ol>
                    <li style="float:left;">
                        <span class="capitalLetter" style='color:#EAA2B8;'>A</span><div style='float:right;'><br /><br /><p>MOR</p></div>
                        <p>DISCIPLINA</p>
                        <p>EDUCACIÓN</p>
                        <p>RESPETO</p>
                    </li>
                    <li style="float:right;">
                        <p>SERVICIO</p>
                        <p>TRABAJO EN EQUIPO</p>
                        <p>DIALOGO</p>
                        <p>FAMILIA</p>
                    </li>
                </ol>                          
            </div>
        </div>
    </div>
</div>
<center>
    <div class="container video1">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">

                <h2>Motivate a seguir superandote</h2>
                <!--                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/nz823LtQgkc"></iframe>
                                            </div>-->
                <div class="embed-responsive embed-responsive-16by9">
                    
                   <iframe width="560" height="315" src="https://www.youtube.com/embed/7BG88HMRVUc" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div><br/>
        <h3 class="retrato">Presidenta y Cofundadora:</h3>
        <img class=""  src="imagenes/contadora-coach-empresaria.jpg" width="400px" alt="" id="retrato"><br><br><br><br>
    </div>

    <!--<p class="titulo">Cristi Yanet Escalona Cruz</p>-->

</center>
<br class="col-sm-12"/>
<br class="col-sm-12"/>
<br class="col-sm-12"/>
<br class="col-sm-12"/>
<br class="col-sm-12"/>
<br class="col-sm-12"/>
<br class="col-sm-12"/>
<br class="col-sm-12"/>


<footer class="footer">
    <div class="container-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4">
                    <br>
                    <address>
                    <p class="panel-title p">Av. Sur Depto. 1, Manzana 12, Lote 3.</p>
                    <p class="panel-title p">Solidaridad, Playa del Carmen, Quitana Roo.</p>
                    </address>
                    <span class="text-center span"><a href="aviso.jsp">Aviso de Privacidad</a></span>
                </div>
                <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4" style="padding: 5px; float: right;">
                    <a href="index.jsp"><button class="btn btn-link btn-group-justified">
                            <span class="icon-mail"></span>
                            <label>Nuestro E-MAIL</label><br>
                            <label>quiquedemon117@gmail.com</label>
                        </button></a>
                    <a href="index.jsp"><button class="btn btn-link btn-group-justified">
                            <span class="icon-phone"></span>
                            <label>Llamanos</label><br>
                            <label>917-37-48972</label>
                        </button></a>
                </div>
                <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4" style="float: right;"><br>
                    <div class="caja-redes">
                        <a href="https://www.facebook.com/CristiEscalona1/" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
                        <a href="https://twitter.com/CristiEscalona" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
                        <a href="#" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
                        <a href="#" class="icon-button youtube"><i class="icon-youtube"></i><span></span></a>
                        <a href="http://yanetescalona.blogspot.mx/" class="icon-button blogger2"><i class="icon-blogger2"></i><span></span></a>
                    </div>
                    <span id="siteseal"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=EAxEKGVHpdN1wZau0CR21sDwhJtXgbqHIjB7cgvJY1ZuvO3t4cFRzEgLctmY"></script></span>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
    </body>
    <script src="js/jquery-latest.js"></script>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/ie10-viewport-bug-workaround.js"></script>
<script src="js/ie-emulation-modes-warning.js"></script>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<script src="js/busqueda.js" type="text/javascript"></script>
<script src="dist/sweetalert.min.js"></script>
<script>
                                        $('.carousel').carousel({
                                            interval: 4000 //changes the speed
                                        });
</script>
</html>