<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin-Despacho contable</title>
        <link rel="shortcut icon" href="imagenes/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="fonts/style.css">
        <link rel="stylesheet" href="css/fondo.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/new.css">
        <link href="css/footer.css" rel="stylesheet">
        <link href="css/tablas.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">

    <div style="position: absolute; padding-left: 90%; ">
        <form class="form-group form-inline" action="logout.jsp">
            <button type="submit" class="btn btn-link" id="cerrar">Cerrar sesion</button>
        </form>
    </div>
</head>
<body>
    <div class="container">
        <h2>Panel de administración</h2>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Usuarios</a></li>
            <li><a data-toggle="tab" href="#menu1">Archivos</a></li>
            <li><a data-toggle="tab" href="#menu2">Correo</a></li>
            <li><a data-toggle="tab" href="#menu3">Mantenimiento</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <form action="buscar.php" method="post" accept-charset="utf-8">
                    <br>
                    <div class="col-lg-3">
                        <div class="input-group">
                            
                            <input type="text" name="busqueda" class="form-control" id="busqueda" value="" placeholder="" maxlength="30" autocomplete="off" onKeyUp="buscar();" />

                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Buscar</button>
                            </span>
                        </div>
                    </div>
                </form>
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
<script src="dist/sweetalert.min.js"></script> 
<script src="js/jquery-latest.js"></script>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/funciones_ajax.js" type="text/javascript"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script type="text/javascript">
    $('#flash').on('click', function () {
        document.getElementById('destinatario').value=hola;
    });
</script>
<script>
$(document).ready(function() {
    $("#resultadoBusqueda").html('<p>JQUERY VACIO</p>');
});

function buscar() {
    var textoBusqueda = $("input#busqueda").val();
 
     if (textoBusqueda != "") {
        $.post("buscar.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
            $("#resultadoBusqueda").html(mensaje);
         }); 
     } else { 
        $("#resultadoBusqueda").html('<p>JQUERY VACIO</p>');
        };
};
</script>
</html>
