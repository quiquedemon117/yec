<!DOCTYPE html>
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
    <body class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form method="post" action="">
                        <br><br>
                        <span class="glyphicon glyphicon-user barato"></span>
                        <h2 class="form-signin-heading" style="font-family: 'Impactante', serif;">Inicio de sesion</h2>
                        <br><br>
                        <div class="form-group">
                            <label for="user">Usuario o Email</label>
                            <input type="text" name="user" id="user" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pass">Contraseña</label>
                            <input type="password" name="pass" id="pass" class="form-control">
                        </div>
                        <br><br>
                        <div class="form-group">
                            <input type="button" name="login" id="login" value="Iniciar sesion" class="btn btn-success">
                        </div>
                        <br>
                        <span id="result"></span>
                    </form>
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
    <script src="js/validar.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $('#login').click(function () {

                var p1 = document.getElementById("user").value;
                var p2 = document.getElementById("pass").value;

                var espacios = false;
                var cont = 0;

                while (!espacios && (cont < p1.length)) {
                    if (p1.charAt(cont) == " ")
                        espacios = true;
                    cont++;
                }

                if (p1.length == 0 || p2.length == 0 || espacios) {
                    swal({title: "Oops...!", text: "Los campos de usuario y contraseña no pueden estar vacios!", type: "error", confirmButtonText: "OK"});
                    return false;
                }

                var user = $('#user').val();
                var pass = $('#pass').val();
                if ($.trim(user).length > 0 && $.trim(pass).length > 0) {
                    $.ajax({
                        url: "logueo.php",
                        method: "POST",
                        data: {user: user, pass: pass},
                        cache: "false",
                        beforeSend: function () {
                            $('#login').val("Conectando...");
                        },
                        success: function (data) {
                            $('#login').val("Iniciar sesion");
                            if (data == "1") {
                                $(location).attr('href', 'clientes.php');
                            } 
                            
                            else if (data == "2"){
                                $(location).attr('href', 'admin.php');
                            }
                            
                            else {
                                $("#result").html("<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Error!</strong> El usuario o contraseña son incorrectas.</div>");
                            }
                        }
                    });
                }
                ;
            });
        });
    </script>
</html>

