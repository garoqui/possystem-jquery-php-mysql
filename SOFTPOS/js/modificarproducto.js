$(document).ready(function(){

	
	$.ajax({
	type:'POST',
	dataType:'text',
	url:'muestraproducto.php',
		success: function(data)
		{
		
		$('#usuarios').html(data);
		
		}
	
	}
	
	
	
	
	)
	
	
	
	
});