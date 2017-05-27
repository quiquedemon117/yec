function aslo(){
    $(document).ready(function(){
    var p1 = $("#pass").val();
    var p2 = $("#pass2").val();

    if(p1 != p2){
        swal({ title: 'Oops...', text: 'Las contraseñas no coinciden', type: 'error' }, function(){ window.location.href = 'registro.html'; });
    }
});
}