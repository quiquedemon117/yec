$(document).on('ready', function ()
{
    $("#oculto3").hide();

    $("#ocultar3").click(function (event) {
        event.preventDefault();
        $("#oculto3").hide("slow");
    });

    $("#mostrar3").click(function (event) {
        event.preventDefault();
        $("#oculto3").show(1000);
    });
});

$(document).on('ready', function ()
{
    $("#oculto2").hide();

    $("#ocultar2").click(function (event) {
        event.preventDefault();
        $("#oculto2").hide("slow");
    });

    $("#mostrar2").click(function (event) {
        event.preventDefault();
        $("#oculto2").show(1000);
    });
});


$(document).on('ready', function ()
{
    $("#oculto").hide();

    $("#ocultar").click(function (event) {
        event.preventDefault();
        $("#oculto").hide("slow");
    });

    $("#mostrar").click(function (event) {
        event.preventDefault();
        $("#oculto").show(1000);
    });
});



