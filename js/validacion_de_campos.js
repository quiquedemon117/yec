function validacion() {
    var usuario = document.getElementById("user7").value;
    var contraseña = document.getElementById("contraseña7").value;
    var nombre = document.getElementById("nombre7").value;
    var apellidos = document.getElementById("apellidos7").value;
    var tipo = document.getElementById("tipo7").selectedIndex;

    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;



    if (usuario == "" || !expr.test(usuario)) {
        swal({title: "Oops...!", text: "Olvido colocar su Usuario o El Correo electronico no es valido!", type: "error", confirmButtonText: "OK"});
        return false;
    }

    if (contraseña == "") {
        swal({title: "Oops...!", text: "Olvido colocar su Contraseña!", type: "error", confirmButtonText: "OK"});
        return false;
    }

    if (nombre == "") {
        swal({title: "Oops...!", text: "Olvido colocar su Nombre!", type: "error", confirmButtonText: "OK"});
        return false;
    }

    if (apellidos == "") {
        swal({title: "Oops...!", text: "Olvido colocar su Apellidos!", type: "error", confirmButtonText: "OK"});
        return false;
    }


    if( tipo == null || tipo == 0 ) {
    swal({title: "Oops...!", text: "Olvido seleccionar lo que necesita!", type: "error", confirmButtonText: "OK"});
    return false;
    }


function justNumbers(e) {
    var keynum = window.event ? window.event.keyCode : e.which;
    if ((keynum == 8) || (keynum == 10))
        return true;

    return /\d/.test(String.fromCharCode(keynum));
}
}    


function x(){
    var $file = $('<input type="text" name="file">');
    $file.addClass('file');
    $file.appendTo('#file');
}