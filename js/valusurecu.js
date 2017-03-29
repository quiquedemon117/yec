$(document).ready(function () {
            $('#user').submit(function () {

                $('#Info').html('<img class="imgsas" src="imagenes/loader.gif" />').fadeOut(3000);

                var user = $(this).val();
                var dataString = 'user=' + user;

                $.ajax({
                    type: "POST",
                    url: "usuexiste.jsp",
                    data: dataString,
                    success: function (data) {
                        $('#Info').fadeIn(3000).html(data);
                    }
                });
            });
        });