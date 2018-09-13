$(document).ready(function(){
	
	$('#entrar').click(function(){
		
		var miarray=[];
		var codigo="";
		var cantidad="";
		var entrega="";
		var recibe="";
		var total="";
			entrega1=$('#entrega' ).attr('value');
	recibe1=$('#recibe' ).attr('value');
	if ((entrega1 !=0) && (recibe1 !=0))
		{
	$( "#listaprod1 li" ).each(function( index ) {
		
		
  
  codigo=$( this).find('#micod' ).text();
  	cantidad=$( this).find('#cantidad' ).text();
  	entrega=$('#entrega' ).attr('value');
	recibe=$('#recibe' ).attr('value');
 	total=$('#gtotal' ).text();
 	
	vr1=codigo+"-"+cantidad+"-"+entrega+"-"+recibe+"-"+total;
	alert(vr1);
 	miarray.push(vr1);	
	});
//$.each(miarray,function(index,contenido)
	//{
	//alert(miarray[index]);	
	//});


	
var miJSON = JSON.stringify(miarray); 

$.ajax({
            type: 'POST',
         dataType:'text',
            url: 'insertarent.php',
			cache: false,
            data: {datos: miJSON},
           
           success: function(data){
				//window.open("insertar.php","Factura","width:600, height:500");
               //$('#resultado').html(data);
				window.location.href = 'recibir1.php?id='+data;     
            },
            error: function(e){
                 alert('error');
            }
    });

//$.post('recibir.php',{
	//datos:"miJSON"
	//},
	//function(exito)
	//{
//$('#resultado').html(exito);
//window.open("recibir.php","Factura","width:600, height:500");
	//}


//);
//$.post( "test.php", { name: "John", time: "2pm" } );


//***************************


		}
		else
		{
		alert("Debe seleccionar quien recibe y quien entrega")	
		}

	});
	
	
});