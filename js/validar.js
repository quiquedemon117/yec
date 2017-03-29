function validarup() {
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
}

function recupass() {
    var p1 = document.getElementById("user").value;

    var espacios = false;
    var cont = 0;

    while (!espacios && (cont < p1.length)) {
        if (p1.charAt(cont) == " ")
            espacios = true;
        cont++;
    }

    if (p1.length == 0 || espacios) {
        swal({title: "Oops...!", text: "Coloque su Usuario por favor!", type: "error", confirmButtonText: "OK"});
        return false;
    }
}

function adios() {
    swal({title: "Oops...!", text: "Adios!", type: "error", confirmButtonText: "OK"});
    window.opener = null;
    window.close();
    return false;
}