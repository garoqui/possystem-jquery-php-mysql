$(document).ready(function(){

	$('#btnbuscar').click(function(){
	
	$.ajax({
	type:'POST',
	
	data:$("#busqueda").serialize(),
	url:'muestraentrada.php',
		success: function(data)
		{
		
		$('#entradas').html(data);
		
		}
	
	}
	
	
	
	
	)
	
	});
	
	
});