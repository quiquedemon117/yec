function asd() {

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
                                $("#result").hide();
                                $(location).attr('href', '../clientes/clientes.php');
                            } 
                            
                            else if (data == "2"){
                                $("#result").hide();
                                $(location).attr('href', 'admin.php');
                            }
                            
                            else {
                                $("#result").html("El usuario o contraseña son incorrectos");
                            }
                        }
                    });
                }
            }


