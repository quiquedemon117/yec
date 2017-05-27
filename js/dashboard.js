$(document).ready(function(){
$("#micuenta").hide();
$("#miscursos").hide();
$("#tienda").hide();
$("#progreso").hide();
$("#contacto").hide();
});

function micuenta(){
	$("#miscursos").hide();
	$("#tienda").hide();
	$("#progreso").hide();
	$("#contacto").hide();
	$("#home").show();
}

function miscursos(){
	$("#tienda").hide();
	$("#progreso").hide();
	$("#contacto").hide();
	$("#home").hide();
	$("#miscursos").show();
}

function tienda(){
	$("#progreso").hide();
	$("#contacto").hide();
	$("#home").hide();
	$("#miscursos").hide();
	$("#tienda").show();
}

function progreso(){
	$("#tienda").hide();
	$("#contacto").hide();
	$("#home").hide();
	$("#miscursos").hide();
	$("#progreso").show();
}

function contacto(){
	$("#tienda").hide();
	$("#progreso").hide();
	$("#home").hide();
	$("#miscursos").hide();
	$("#contacto").show();
}