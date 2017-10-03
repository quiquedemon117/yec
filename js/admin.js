$(document).ready(function() {

		$('#div-btn1').click(function(){

			$.ajax({
	            type: "POST",
	            //data: dataString,
	            url: "clientes.php",
	       		success: function(a) {

	       			$('#div-results').html(a);

	          	}
			});
		});

		$('#div-btn2').click(function(){

			$.ajax({
	            type: "POST",
	            url: "misarchivos.php",
	       		success: function(a) {

	       			$('#div-results').html(a);

	          	}
			});
		});

		$('#div-btn3').click(function(){

			$.ajax({
	            type: "POST",
	            url: "cursos.php",
	       		success: function(a) {

	       			$('#div-results').html(a);

	          	}
			});
		});

		$('#div-btn4').click(function(){

			$.ajax({
	            type: "POST",
	            url: "examenes.php",
	       		success: function(a) {

	       			$('#div-results').html(a);

	          	}
			});
		});


$('#mc').click( function(){
		$('#ma').removeClass('active');
		$('#cu').removeClass('active');
		$('#ex').removeClass('active');
		$('#mc').addClass('active');
});

$('#ma').click(function(){
		$('#mc').removeClass('active');
		$('#cu').removeClass('active');
		$('#ex').removeClass('active');
		$('#ma').addClass('active');
}); 

$('#cu').click(function(){
		$('#mc').removeClass('active');
		$('#ma').removeClass('active');
		$('#ex').removeClass('active');
		$('#cu').addClass('active');
}); 

$('#ex').click(function(){
		$('#mc').removeClass('active');
		$('#cu').removeClass('active');
		$('#ma').removeClass('active');
		$('#ex').addClass('active');
}); 


	});

