$(document).ready(function(){
	$('#carga').show();
	var myid=$('#inid').val();
	$.get("mostrarpub.php?id="+myid, function(result){
 
 var json=$.parseJSON(result);
 $("#titulo").val(json.dato1);
 $("#corta").val(json.dato2);
  
	  $("#vistaPrevia1").attr('src',json.dato3);
	  jQuery('#cargar1').css('background-image', 'url(images/)');
	   $("#vistaPrevia2").attr('src',json.dato4);
	     jQuery('#cargar2').css('background-image', 'url(images/)');
	    $("#vistaPrevia3").attr('src',json.dato5);
		  jQuery('#cargar3').css('background-image', 'url(images/)');
		 $("#vistaPrevia4").attr('src',json.dato6);
		   jQuery('#cargar4').css('background-image', 'url(images/)');
		  $("#vistaPrevia5").attr('src',json.dato7);
		    jQuery('#cargar5').css('background-image', 'url(images/)');
			$("#editor1").html(json.dato8);
			$("#precioval").val(json.dato9);
			$("#inventario").val(json.dato10);
			$("#select_cate1 option[value='" + json.dato11 + "']").attr("selected","selected");
	  
  
 });
 $('.btnmod').click(function(){
	 $('#grupo1').hide();
	 $('#grupo2').show();
	 $("#id_pais").val('0');
	  $("#id_ciudad").val('0');
	
	 
 });
 $("#country").change(function (){
	 var el=$(this).val();
	 var texto=$(this).find('option:selected').text();
	 $("#id_pais").val(el);
	 $("#reg_pais").val(texto);
	 
	 
	 
 });
 $("#city").change(function (){
	 var cel=$(this).val();
	  var textociu=$(this).find('option:selected').text();
	 $("#id_ciudad").val(cel);
	 $("#reg_ciudad").val(textociu);
	 
	 
 });
	
	
	
});
