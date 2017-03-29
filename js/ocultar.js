$(document).ready(function(){
   var elemento = document.getElementById("target");
   var elemento2 = document.getElementById("target2");
   elemento.style.display = 'none';
		$("#mostrar").on( "click", function() {
			$('#target').show(); //muestro mediante id
			$('.target').show(); //muestro mediante clase
		 });
		$(".ocultar").on( "click", function() {
			$('#target2').hide(); //oculto mediante id
			$('.target2').hide(); //oculto mediante clase
                        
		});
	});
