function aslo(){
    $(document).ready(function(){
    var p1 = $("#pass").val();
    var p2 = $("#pass2").val();

    if(p1 != p2){
        swal({ title: 'Oops...', text: 'Las contraseñas no coinciden', type: 'error' }, function(){ window.location.href = 'registro.html'; });
    }
});
}

function losa(){
	$(document).ready(function() {    

        var user = $("#user").val();        
        var dataString = 'user='+user;

        $.ajax({
            type: "POST",
            url: "../modulos/usuarios/val_user.php",
            data: dataString,
            success: function(data) {
            	if(data == 'usuario ya registrada'){
                alert('El usuario ya existe intente con otro porfavor');
                }
            }
        });            
}); 
}