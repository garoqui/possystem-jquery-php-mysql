$(document).ready(function(){

	
	$.ajax({
	type:'POST',
	dataType:'text',
	url:'muestrausuario.php',
		success: function(data)
		{
		
		$('#usuarios').html(data);
		
		}
	
	}
	
	
	
	
	)
	
	
	
	
});