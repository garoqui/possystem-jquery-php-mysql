$(document).ready(function(){
	$('#cancelar1').click(function()
{
			var total="";
	$( "#listaprod li" ).each(function( index ) {
		$(this).remove();
		$( this).find('#ltotal' ).text();
		
	});
	
	$( '#gtotal').text('0' );
});
	
	$('#facturar').click(function(){
		alert('GH');
		var miarray=[];
		var codigo="";
		var cantidad="";
		var valor="";
		var total="";
	$( "#listaprod li" ).each(function( index ) {
  codigo=$( this).find('#micod' ).text();
  	cantidad=$( this).find('#cantidad' ).text();
  	valor=$( this).find('#valor' ).text();
 	total=$( this).find('#ltotal' ).text();
 	vr1=codigo+"-"+cantidad+"-"+valor+"-"+total;
 	miarray.push(vr1);	
	});
var miJSON = JSON.stringify(miarray); 
$.ajax({
            type: 'POST',
         dataType:'text',
            url: 'insertar.php',
			cache: false,
            data: {datos: miJSON},
           
           success: function(data){
				//window.open("insertar.php","Factura","width:600, height:500");
                //$('#resultado').html(data);
				window.location.href = 'recibir.php?id='+data;     
            },
            error: function(e){
                 alert('error');
            }
    });

	});
	
	
	
	$('#facturarcre').click(function(){
		alert('GH');
		var miarray=[];
		var codigo="";
		var cantidad="";
		var valor="";
		var total="";
	$( "#listaprod li" ).each(function( index ) {
  codigo=$( this).find('#micod' ).text();
  	cantidad=$( this).find('#cantidad' ).text();
  	valor=$( this).find('#valor' ).text();
 	total=$( this).find('#ltotal' ).text();
 	vr1=codigo+"-"+cantidad+"-"+valor+"-"+total;
 	miarray.push(vr1);	
	});
var miJSON = JSON.stringify(miarray); 
$.ajax({
            type: 'POST',
         dataType:'text',
            url: 'insertarcred.php',
			cache: false,
            data: {datos: miJSON},
           
           success: function(data){
				//window.open("insertar.php","Factura","width:600, height:500");
                //$('#resultado').html(data);
				window.location.href = 'recibir.php?id='+data;     
            },
            error: function(e){
                 alert('error');
            }
    });

	});
	
	

	
	
	
	
	
});