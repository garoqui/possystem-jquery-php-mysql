$(document).ready(function(){

	$('#btnbuscar').click(function(){
	
	$.ajax({
	type:'POST',
	
	data:$("#busqueda").serialize(),
	url:'anularentrada.php',
		success: function(data)
		{
		
		$('#entradas').html(data);
		
		}
	
	}
	
	
	
	
	)
	
	});
	
	
});