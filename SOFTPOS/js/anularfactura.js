$(document).ready(function(){

	$('#btnbuscar').click(function(){
	
	$.ajax({
	type:'POST',
	
	data:$("#busqueda").serialize(),
	url:'anulafactura.php',
		success: function(data)
		{
		
		$('#facturas').html(data);
		
		}
	
	}
	
	
	
	
	)
	
	});
	
	
});