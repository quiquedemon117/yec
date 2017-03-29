function busgoo() {
var cadena1 = "https://www.google.com/#q=";
var cadena2 = document.getElementById("search").value;
var cadena3 = cadena1 + cadena2;

if(cadena2 == ""){
    swal({title: "Oops...!", text: "El campo de busqueda esta vacio!", type: "error", confirmButtonText: "OK"});
    return false;
}
else if(cadena3){
    window.open(cadena3);
}
}