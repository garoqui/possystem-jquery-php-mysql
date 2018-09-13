<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 ie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8 ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>TRIBU STREETWEAR</title>
    
 


		
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>



<link rel='stylesheet' id='colabs-css-css'  href='css/colabs-css.css?ver=4.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='colabs-mmenu-css'  href='css/jquery.mmenu.css?ver=4.5.3' type='text/css' media='all' />

<link rel='stylesheet' id='main-style-css'  href='css/style.css?ver=4.5.3' type='text/css' media='all' />
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js' type='text/javascript'></script>
<script type='text/javascript' src='js/jquery.js?ver=1.11.1'></script>
<script type='text/javascript' src='js/jquery-migrate.min.js?ver=1.2.1'></script>



<script type="text/javascript" src="js/mostrarusu.js"></script>
<script  src="js/vista1.js"></script>
<script>
function validar()
{
var nombre=$('#nombre1').val().trim();
var apellido1=$('#apellido1').val().trim();
var iden=$('#iden').val().trim();
var cargo=$('#cargo').val();
var sexo=$('#sexo').val();
var alias=$('#alias').val().trim();






if (nombre === '') {
        alert('El campo nombre esta vacio');
    } else {
        if (apellido1 === '') {
        alert('El apellido esta vacio');
    			} 
				else
				{
				 if (iden === '') {
       				 alert('La identificacion esta vacia');
    				}
				else
					{
					if (cargo === '0') {
       				 alert('Debe seleccionar un cargo');
    				}	
					else
					{
						if (sexo === '0')
						{
						 alert('Debe seleccionar el sexo');	
						}
						else
						{	
							if (alias === '')
							{
						 	alert('Debe digitar el alias');	
							}
							
							
							else
							{				
							$("#ajax-contact-form").submit();	
							}
						}
					}
					}
				}
		
    }

}



</script>


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="index, nofollow" />





<!-- Custom Favicon -->
<link rel="shortcut icon" href="images/favicon.png"/>


      <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
</head>
  
<body class="archive tax-product_cat term-converse term-73 woocommerce woocommerce-page gecko alt-style-default">
<?php
	 // echo "<input type='text'>".$_GET['id']."</input>";
	  $usuid=$_GET['id'];
	  include ("connect.php");
	  $consulta=$con->query("Select * from usuarios where id_usuario=".$usuid);
	  while($resultado=$consulta->fetch_array())
	  {
		$id= $resultado[0]; 
		$imagen= $resultado[10]; 
		$nom1=$resultado[1]; 
		$nom2=$resultado[2]; 
		$ape1=$resultado[3]; 
		$ape2=$resultado[4]; 
		$iden=$resultado[5]; 
		$alias=$resultado[8]; 
		$valcargo=$resultado[6];
		$valsexo=$resultado[7];
		$cu=$resultado[11];
		$mu=$resultado[12];
		$pr=$resultado[13];
		$rf=$resultado[14];
		$af=$resultado[15];
		$re=$resultado[16];
		$rv=$resultado[17];
		$fa=$resultado[18];
	  }
	  
	  echo"<script>
	  $(document).ready(function()
	  {
		$('#id').val('".$id."'); 
		$('#vistaPrevia1').attr('src','empleados/".$imagen."'); 
		$('#nombre1').val('".$nom1."'); 
		$('#nombre2').val('".$nom2."'); 
		$('#apellido1').val('".$ape1."'); 
		$('#apellido2').val('".$ape2."'); 
		$('#iden').val('".$iden."');
		$('#alias').val('".$alias."');
		$('#cargo option[value=".$valcargo."]').attr('selected','selected');
		$('#sexo option[value=".$valsexo."]').attr('selected','selected');
		$('#cu option[value=".$cu."]').attr('selected','selected');
		$('#mu option[value=".$mu."]').attr('selected','selected');
		$('#pr option[value=".$pr."]').attr('selected','selected');
		$('#rf option[value=".$rf."]').attr('selected','selected');
		$('#af option[value=".$af."]').attr('selected','selected');
		$('#re option[value=".$re."]').attr('selected','selected');
		$('#rv option[value=".$rv."]').attr('selected','selected');
		$('#fa option[value=".$fa."]').attr('selected','selected');
	  });
	  
	  </script>";
	  mysqli_close($con); 
	   ?>

<div id='resultado'></div>
<div class="main-container">

  <div class="navigation container top-nav">    
    <div class="nav-collapse collapse">
      <div class="row">
        <div class="menu-primary-menu-container"></div><!-- .menu -->      </div><!-- .row -->
    </div>
  </div><!-- .top-nav -->

  <div id="header" class="container">
    <div class="row">
      
      <a href="#main-menu-slide" class="btn-navbar collapsed">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <h1 class="logo">
      <a href="index.php" title="Tribu POS"><img src="images/logo.png" alt="Tribu POS" /></a>      </h1>
    </div>
  </div><!-- #header -->
  <div class="navigation container main-nav">
    <div class="row">
      <div class="menu-secondary-menu-container">
        <ul id="menu-secondary-menu" class="menu">
          <li id="menu-item-1950" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1950"><a href="index.php">Inicio</a></li>
          <li id="menu-item-1951" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1951"><a href="pormayor.php">Facturar al por Mayor</a></li>
          <li id="menu-item-2212" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat current-menu-item menu-item-2212"><a href="aldetal.php">Facturar al Detal</a></li>
          <li id="menu-item-2212" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2188"><a href="entrada.php">Entrada de Almacen</a>
            <ul class="sub-menu">
              <li id="menu-item-2189" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2189"><a href="entrada.php">Generar</a></li>
              <li id="menu-item-2190" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2190"><a href="anularent.php">Anular Entrada</a></li>
              <li id="menu-item-2190" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2190"><a href="reimprimirent.php">Reimprimir Entrada</a></li>
            </ul>
          </li>
          <li id="menu-item-2188" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2188"><a href="mantenimiento.php" id="mantenimiento">Mantenimiento</a>
            <ul class="sub-menu" id="subman">
              <li id="menu-item-2189" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2189"><a href="crearusuario.php">Crear Usuarios</a></li>
              <li id="menu-item-2189" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2189"><a href="modificarusuario.php">Modificar Usuarios</a></li>
              <li id="menu-item-2190" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2190"><a href="producto.php">Crear Producto</a></li>
              <li id="menu-item-2190" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2190"><a href="modificarproducto.php">Productos</a></li>
              <li id="menu-item-2191" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2191"><a href="reimprimir.php">Reimprimir Factura</a></li>
              <li id="menu-item-2191" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2191"><a href="anular.php">Anular Factura</a> </li>
            </ul>
          </li>
          <li id="menu-item-2188" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2188"><a href="#">Reportes</a>
            <ul class="sub-menu">
              <li id="menu-item-2189" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2189"><a href="existencias.php">Existencias</a></li>
              <li id="menu-item-2190" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2190"><a href="ventas.php">Ventas</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- .menu -->
    </div>
  </div>
  <!-- .main-nav -->

  <div class="container">

<div class="main row">
	<div id="content" class="column col12">
	  <div id="container"><div id="content" role="main">		
		



<div class="row product-list" >

<div id="seleccion">
	

	<div class="cajaform">
	
	
		<div class="form-group form-row-wide">
       
          <div id="botonera">
      
             <form id="ajax-contact-form" action='updateusu.php' class="form-horizontal"  method='post' enctype ="multipart/form-data" >
      <input type='hidden' id="id" name="id"></input>
      <div class="cajaprod">
      
    	<div class="product-header">
		<h3 class="product-title"><a href="http://demo.colorlabsproject.com/sneakersaddict-woocommerce/shop/converse-brown-green/">Selecione la imagen</a></h3>
		
		</div><!-- .product-header -->
   	<div class="foto">
   
<input name="url-archivo1" class="url-archivo" id="url-archivo1" type="text"><label class="cargar" id="cargar">

	  <input id='archivo1' name='archivo1' accept='image/*' type='file'>
<img class='vistaPrevia' id='vistaPrevia1' src="" alt=''>  </label>

<div class="bottom"><input id="cancelar1" value="Cancelar Imagen" type="button"></div>
</div>
<!-- end foto -->

				    </div>
                    <div class="controls">				      
				      <input class="tprod" id="nombre1" name="nombre1" placeholder="Primer Nombre del Usuario:"   type="text">
                      <input class="tprod" id="nombre2" name="nombre2" placeholder="Segundo Nombre del Usuario:"   type="text">
                      <input class="tprod" id="apellido1" name="apellido1" placeholder="Primer Apellido del Usuario:"   type="text">
                      <input class="tprod" id="apellido2" name="apellido2" placeholder="Segundo Apellido del Usuario:"   type="text">
                       <input class="tprod" id="iden" name="iden" placeholder="Identificacion del Usuario:"   type="text">
                      
                      <input class="tprod" id="alias" name="alias" placeholder="Alias:"  type="text">
                      
                       <div><label>Seleccione el Cargo: </label>
                        <select id="cargo" name="cargo">
                       <?php
					   include ('connect.php');
					   $cargos=$con->query('Select * from cargos');
					   while($resucar=$cargos->fetch_array())
					   {
						$valcargo=$resucar[0];
						$descargo=$resucar[1];
						echo "<option value=".$valcargo.">".$descargo."</option>"; 
						  
					   }
					   
					   ?>
                       
                     
                       
                       
                       </select></div>
                       <div style="float:left;padding-top:10px;"><label>Seleccione el Sexo:  </label><select id="sexo" name="sexo">
                       <option value="F">FEMENINO</option>
                       <option value="M">MASCULINO</option>
                       
                       
                       </select></div>
                       <div><p style="padding-top:20px;"><h3>PERMISOS</h3></p>
                        <div class="contchk"><label>Crear Usuario: </label><select id="cu" name="cu" ><option value='0'>NO</option><option value='1'>SI</option></select></div>
                         <div class="contchk"><label>Modificar Usuario: </label><select id="mu" name="mu" ><option value='0'>NO</option><option value='1'>SI</option></select></div>
                         <div class="contchk"><label>Productos: </label><select id="pr" name="pr" ><option value='0'>NO</option><option value='1'>SI</option></select></div>
                          <div class="contchk1"><label>Reimprimir Factura: </label><select id="rf" name="rf" ><option value='0'>NO</option><option value='1'>>SI</option></select></div>
                         <div class="contchk1"><label>Anular Factura: </label><select id="af" name="af" ><option value='0'>NO</option><option value='1'>SI</option></select></div>
                         <div class="contchk1"><label>Reporte Eistencias: </label><select id="re" name="re" ><option value='0'>NO</option><option value='1'>SI</option></select></div>
                       <div class="contchk1"><label>Reporte de Ventas: </label><select id="rv" name="rv" ><option value='0'>NO</option><option value='1'>SI</option></select></div>
                      <div class="contchk1"><label>Facturar: </label><select id="fa" name="fa" ><option value='0'>NO</option><option value='1'>SI</option></select></div></div>
                      <div style="width:100%;float:left;padding:10px;"><input id="guardar" value="GUARDAR" type="button" onClick="validar();"></div>
             </form>
             </div>
</div>
    
	</div><!-- product-thumbnail -->
   
    
    
   </div> 

</div><!-- .productos -->


		</div></div>		
		<!-- .pagination -->
		
				

			</div><!-- #content -->
</div><!-- .main -->

	</div><!-- .container -->

	<div id="footer" class="container">
		<div class="row">
					<div id="colabs_about-3" class="widget column col4 widget_colabs_about">        
        		<div class="page-widget">
		<h3 class="widget-title">		Acerca	de	</h3> 		<p>&nbsp;</p>		<p><a class="more" href="http://demo.colorlabsproject.com/sneakersaddict-woocommerce/about/">View more</a></p>
		</div>
				</div>   
   		<div id="colabs_subscribe-3" class="widget column col4 widget_colabs_subscribe">        <h3 class="widget-title">        Subscribe Our Email		</h3>         <p>Vivamus elit dui, venenatis a convallis a, gravida quis magna. Ut vitae sem et lectus tempor accumsan ut non risus.</p>	   <form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=colorlabs', 'popupwindow', 'scrollbars=no,width=300,height=220');return true">
		<input type="text"  name="email" value="Your Email Here" onclick="this.focus();this.select();"/>
		<input type="hidden" value="colorlabs" name="uri"/>
		<input type="hidden" name="loc" value="en_US"/>
		<input type="submit" value="GO" />
		
	   </form>        
        
		</div>   
   		<div id="colabs_info-2" class="widget column col4 widget_colabs_info">        <h3 class="widget-title">Our Store</h3> <div><p>Flamboyant Square – Seasons Building<br>Jalan Sukajadi 232 Bandung 40153<br>West Java, Indonesia<br>hello@colorlabsproject.com</p></div></div>   
   			
		</div>
		<p class="row copyright">  Copyright &copy; 2016 <a href="http://colorlabsproject.com/themes/SneakersAddict/" title="Sneakers Addict" rel="home">SneakersAddict</a> by <a href="http://colorlabsproject.com/" title="Colorlabs">ColorLabs &amp; Company</a>. All rights reserved.
 <a href="#" class="back-to-top fr" title="Back to Top">Back to Top</a></p>
	</div><!-- #footer -->

	<div id="main-menu-slide">
	  <div class="mm-inner">
			
			<div class="my-account-wrapper clearfix">
			  
			  <div class="mobile-user-data">
			    			      <a href="http://demo.colorlabsproject.com/sneakersaddict-woocommerce/wp-login.php" class="btn btn-red btn-full-color btn-uppercase btn-bold">Login</a>
			      &nbsp;&nbsp;&nbsp;&nbsp;
			      <a href="http://demo.colorlabsproject.com/sneakersaddict-woocommerce/wp-login.php?action=register" class="btn btn-red btn-full-color btn-uppercase btn-bold">Register</a>
			    			  </div>
			</div><!-- .my-account-wrapper -->

	    <div class="menu-primary-menu-container"><ul id="menu-primary-menu-1" class="mobile-menu"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-1854"><a href="http://demo.colorlabsproject.com/sneakersaddict-woocommerce/">Home</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2 current_page_item menu-item-2033"><a href="http://demo.colorlabsproject.com/sneakersaddict-woocommerce/about/">About</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2029"><a href="http://demo.colorlabsproject.com/sneakersaddict-woocommerce/blog/">Blog</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2036"><a href="http://demo.colorlabsproject.com/sneakersaddict-woocommerce/all-archive/">All Archive</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2030"><a href="http://demo.colorlabsproject.com/sneakersaddict-woocommerce/sitemap-2/">Sitemap</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1868"><a href="http://demo.colorlabsproject.com/sneakersaddict-woocommerce/contact-us/">Contact Us</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2062"><a href="http://demo.colorlabsproject.com/sneakersaddict-woocommerce/shortcodes/">Shortcodes</a></li>
</ul></div>	  </div>
	</div>

</div><!-- .main-container -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2809127-58']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- CoLabs Tabs Widget -->
<script type="text/javascript">
jQuery(document).ready(function(){
	// UL = .colabsTabs
	// Tab contents = .inside
	
	var tag_cloud_class = '#tagcloud'; 
	
	//Fix for tag clouds - unexpected height before .hide() 
	var tag_cloud_height = jQuery('#tagcloud').height();
	
	//jQuery('.inside ul li:last-child').css('border-bottom','0px'); // remove last border-bottom from list in tab content
	jQuery('.colabsTabs').each(function(){
		jQuery(this).children('li').children('a:first').addClass('selected'); // Add .selected class to first tab on load
	});
	jQuery('.inside > *').hide();
	jQuery('.inside > *:first-child').show();
	
	jQuery('.colabsTabs li a').click(function(evt){ // Init Click funtion on Tabs
	
		var clicked_tab_ref = jQuery(this).attr('href'); // Strore Href value
		
		jQuery(this).parent().parent().children('li').children('a').removeClass('selected'); //Remove selected from all tabs
		jQuery(this).addClass('selected');
		jQuery(this).parent().parent().parent().children('.inside').children('*').hide();
		
		jQuery('.inside ' + clicked_tab_ref).fadeIn(500);
		 
		 evt.preventDefault();
	
	})
})
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/sneakersaddict-woocommerce\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/sneakersaddict-woocommerce\/product-category\/converse\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View Cart","cart_url":"http:\/\/demo.colorlabsproject.com\/sneakersaddict-woocommerce\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='//demo.colorlabsproject.com/sneakersaddict-woocommerce/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=2.5.5'></script>
<script type='text/javascript' src='//demo.colorlabsproject.com/sneakersaddict-woocommerce/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/sneakersaddict-woocommerce\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/sneakersaddict-woocommerce\/product-category\/converse\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='//demo.colorlabsproject.com/sneakersaddict-woocommerce/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=2.5.5'></script>
<script type='text/javascript' src='//demo.colorlabsproject.com/sneakersaddict-woocommerce/wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min.js?ver=1.4.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/sneakersaddict-woocommerce\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/sneakersaddict-woocommerce\/product-category\/converse\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments"};
/* ]]> */
</script>
<script type='text/javascript' src='//demo.colorlabsproject.com/sneakersaddict-woocommerce/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=2.5.5'></script>
<script type='text/javascript' src='http://demo.colorlabsproject.com/sneakersaddict-woocommerce/wp-includes/js/wp-embed.min.js?ver=4.5.3'></script>



</body>

</html>