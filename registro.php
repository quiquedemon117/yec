<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Despacho contable</title>
        <link rel="shortcut icon" href="imagenes/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="fonts/style.css">
        <link rel="stylesheet" href="css/fondo.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/new.css">
        <link href="css/footer.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
    </head>
    <body>
        <div class="container">

            <header>
                <div class="row">
                    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                        <div class="container">

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

                                    <li><a target="_blank" href="acerca.jsp">Acerca</a></li>
                                    <li><a target="_blank" href="http://yanetescalona.blogspot.mx/">Blog</a></li>
                                    <li><a target="_blank" href="cursos.jsp">Cursos</a></li>
                                    <li><a target="_blank" href="sobremi.jsp">Sobre Mi</a></li>

                                </ul>                                        
                                <form name="buscar" action="" class="navbar-form navbar-left" role="search" onSubmit="return busgoo();">
                                    <div class="form-group">
                                        <input name="buscar1" id="search" type="text" class="form-control" placeholder="Buscar...">
                                    </div>
                                    <button type="submit" class="btn btn-default glyphicon glyphicon-search"></button>
                                </form>
                                <ul class="nav navbar-nav navbar-right">                                            


                                    <li><center><button type="button" class="btn btn-link navbar-btn"><a href="login.php">Iniciar sesion</a></button></center></li>


                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>


            </header>






            <br>
            <br>
            <br>
            <br>


            <div class="container">

                <div class="row">
                    <div class="col-lg-6 col-xs-12 col-sm-6 col-md-6">

                        <img class="center-block visible-xs" src="imagenes/Logomujer.png" style="width: 50%;">
                        <img class="center-block hidden-xs" src="imagenes/Logomujer.png">
                    </div>




                    <div class="col-lg-6 col-xs-12 col-sm-6 col-md-6">
                        <br>
                        <form type="POST" action="registrousu.php" onsubmit="return validacion(); var usuario = 'me@example.com'; validarEmail(usuario);">
                            <div class="form-group">
                                <label>Usuario (Correo Electronico):</label>
                                <input type="text" class="form-control" id="user7" style="float:left;" name="usuario"/>
                                <div id="resultado"></div>

                            </div>

                            <div class="form-group">
                                <label>Contraseña:</label>
                                <input type="password" class="form-control" id="contraseña7" name="contraseña"/>

                            </div>
                            <div class="form-group">
                                <label>Nombre(s):</label>
                                <input type="text" class="form-control" id="nombre7"  name="nombre"/>
                            </div>
                            <div class="form-group">
                                <label>Apellidos:</label>
                                <input type="text"  class="form-control" id="apellidos7" name="apellidos"/>
                            </div>
                            <div class="form-group">
                                <label>Lo que yo necesito es?:</label>
                                <select class="form-control" name="tipo" id="tipo7">
                                    <option value="">Seleccione una opción</option>
                                    <option value="Captura Contable">Captura Contable</option>
                                    <option value="Seguros">Seguros</option>
                                    <option value="Cursos">Cursos</option>
                                </select>
                            </div>
                            <button type="submit" id="submit" class="btn btn-primary naranja col-xs-12" value="Añadir" name="registrar">Registrar</button>
                        </form>
                    </div>
                </div>
                <br class="visible-xs">

                <div id="tabla"></div>


                <br class="visible-lg"/>
                <br class="visible-lg"/>
                <br class="visible-lg"/>
                <br class="visible-lg"/>
                <br class="visible-lg"/>
                <br class="visible-lg"/>
                <br class="visible-lg"/>

                <footer class="footer"> 
                    <div class="container-1">
                        <div class="container">
                            <div class="row row-no-padding">
                                <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4">
                                    <br>
                                    <p class="panel-title p">Av. Sur Depto. 1, Manzana 12, Lote 3.</p>
                                    <p class="panel-title p">Solidaridad, Playa del Carmen, Quitana Roo.</p>
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
                                <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4" style="float: right;">
                                    <div class="caja-redes">

                                        <span class="span text-center">Visitanos en nuestras redes sociales</span><br>
                                        <a href="#" title="Facebook" class="icon-button"><span class="icon-facebook"></span></a>
                                        <a href="#" title="Twitter" class="icon-button"><span class="icon-twitter"></span></a>
                                        <a href="#" title="Google+" class="icon-button"><span class="icon-google-plus"></span></a>
                                        <a href="#" title="Youtube" class="icon-button"><span class="icon-youtube"></span></a>
                                        <a href="#" title="Blogger" class="icon-button"><span class="icon-blogger2"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        </div>
    </div>
</body>
<noscript><p>Bienvenido</p><p>La página que estás viendo requiere para su funcionamiento el uso de JavaScript. Si lo has deshabilitado intencionadamente, por favor vuelve a activarlo.</p></noscript>
<script src="dist/sweetalert.min.js"></script>
<script src="js/jquery-latest.js"></script>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/validacion_de_campos.js" type="text/javascript"></script>
<script src="js/busqueda.js" type="text/javascript"></script>
<script type="text/javascript">
                        $(document).ready(function () {
                            $('#user').blur(function () {

                                $('#resultado').html('<img class="loader" src="imagenes/loader.gif" alt="">').fadeOut(5000);

                                var user = $(this).val();
                                var dataString = 'user=' + user;

                                $.ajax({
                                    type: "POST",
                                    url: "usuexiste.jsp",
                                    data: dataString,
                                    success: function (data) {
                                        $('#resultado').fadeIn(5000).html(data);

                                    }
                                });
                            });
                        });
</script>
</html>
