<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
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
    </head>
    <body>
        
        <div class="container">
        <h2>Bienvenido</h2>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
            <li><a data-toggle="tab" href="#menu1">Cursos</a></li>
            <li><a data-toggle="tab" href="#menu2">Comprar</a></li>
            <li><a data-toggle="tab" href="#menu3">Ayuda</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                        <center><img src="imagenes/arbol.png" alt=""></center>        
                <br>
                <br>
                <div id="resultadoBusqueda"></div>
            </div>
            <div id="menu1" class="tab-pane fade">
                <h3>Sistema de archivos</h3>
                <form action="archivo" enctype="MULTIPART/FORM-DATA" method="post">
                    <input type="file" name="file" /><br/>
                    <input type="submit" value="Upload" />
                </form>

            </div>
            <div id="menu2" class="tab-pane fade">
                <h3>Email</h3>
                <a href=""></a>
                <form action="email" enctype="multipart/form-data" method="post">
                    <table>
                        <tr>

                            <td>Para:</td>
                            <td><input name="para" type="text" id="destinatario" value=""></td>
                        </tr>
                        <tr>
                            <td>Asunto:</td>
                            <td><input name="asunto" type="text"></td>
                        </tr>
                        <tr>
                            <td>Mensaje:</td>
                            <td><textarea name="mensaje" cols="40" rows="10"></textarea></td>
                        </tr>
                        <tr>
                            <td>Adjuntar archivo</td>
                            <td><input name="archivo" type="file"/></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Enviar correo"></td>
                        </tr>
                    </table>
                </form>               
            </div>
            <div id="menu3" class="tab-pane fade">
                <h3>Menu 3</h3>
                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <button class="btn btn-danger">Cuidado</button>
            </div>
        </div>
    </div>

    </body>
    <script src="js/jquery-latest.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="dist/sweetalert.min.js"></script>
</html>
