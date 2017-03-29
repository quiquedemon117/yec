<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <title>Recupass</title>
    </head>
    <body>
        <div class="container">
            <form name="form1" action="recupass.jsp" role="form" id="formulario" class="form-group col-md-offset-4 col-md-3" style="text-align: center; padding-top: 15%;" onsubmit="return validacion();">
            <span class="icon icon-mail4" style="font-size: 300%;"></span>
            <label class="label-default">Coloque su correo para recuperar su contraseña</label>
            <input class="form-control" type="text" name="user" id="user">
            <div id="resultado"></div>
            <br>
           
            <input class="btn btn-primary" type="submit" value="Enviar">
            <div id="Info"></div>
        </form>
        <div id="Info"></div>
        </div>
    </body>
    <script src="dist/sweetalert.min.js"></script>
    <script src="js/jquery-latest.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript">
   
    $('#user').submit(function(){

        $('#resultado').html('<img class="loader" src="imagenes/loader.gif" alt="">').fadeOut(5000);

        var user = $(this).val();        
        var dataString = 'user='+user;

        $.ajax({
            type: "POST",
            url: "usuexiste.jsp",
            data: dataString,
            success: function(data) {
                $('#resultado').fadeIn(5000).html(data);
                
            }
        });
    });              
    
</script>
</html>

