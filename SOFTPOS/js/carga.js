$(document).ready(function(){
	$.ajax({
	type:"POST",
	url:"cargar.php",
	success:function(data)
	{
	$('#productos').html(data);	
		
	}
		
		
		
		
	});
	
	
	
});
