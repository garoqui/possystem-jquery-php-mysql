
var grantotal=0;

$(document).ready(function(){
	$('#gtotal').text(0);
	$("#botonera1").hide();
	$("#centro").hide();
	
	$("#pp").click(function(){
	var imagen=$(this).attr("src");
	var varsrc="'"+imagen+"'";
	$("#prodsen").append("<img id='imgtemp' src="+imagen+">");
	
	$("#centro").show();
	$("#seleccion").hide();
	});
	
	$(".num").click(function(){
		var cant=$("#inpcant").val();
		var cant=cant+$(this).val();
		$("#inpcant").val(cant);
	});
	
	$("#borrar").click(function(){
		$("#inpcant").val("");
		
	});
	
	$("#aceptar").click(function()
	{
	grantotal=parseInt($('#gtotal').text());
	var cont=cont+1;	
	var img=$("#imgtemp").attr("src");
	var canti=$("#inpcant").val();
	var precio=$("#precio").text();
	var total=canti*precio;
	$("#listaprod").append("<li class='lifact' id='lifact'><div class='formgroup'><img class='imagenfact' src="+img+"><label id='cantidad'>"+canti+"</label><label id='valor'>"+precio+"</label><label class='ltotal' id='ltotal'>"+total+"</label><button class='btn btn-default remove'>X</button></div></li>'");	
	$("#centro").hide();
	$("#seleccion").show();
	$("#imgtemp").remove();
	$("#inpcant").val("");
	$("#botonera1").show();
	//var grantotal=0;
	var ltotal=0;
	
	//$( "#listaprod li" ).each(function( index ) {
	
	//ltotal1=	$( '.ltotal' ).text();
	//ltotal=parseInt(ltotal1);
	grantotal=grantotal+total;
	//grantotal=grantotal+ltotal;	
	
		//alert(grantotal);
	$('#gtotal').text(grantotal);
  //alert( index + ": " + $( '#ltotal' ).text() );
	//});
	
		
	});
	
	$("#cancelar").click(function(){
	$("#centro").hide();
	$("#seleccion").show();	
	$("#imgtemp").remove();
		
		
	});
	
	
	
	
});
	