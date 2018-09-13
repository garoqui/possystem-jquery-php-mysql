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
var nombre=$('#nombre').val().trim();
var porma=$('#porma').val().trim();
var detal=$('#detal').val().trim();
var urlarchivo1=$('#url-archivo1').val().trim();
if (nombre === '') {
        alert('El campo nombre esta vacio');
    } else {
        if (porma === '') {
        alert('El valor por mayor esta vacio');
    			} 
				else
				{
				 if (detal === '') {
       				 alert('El valor detal esta vacio');
    				}
				else
					{
					if (urlarchivo1 === '') {
       				 alert('Debe seleccionar una imagen');
    				}	
					else
					{
						if (!/^([0-9])*$/.test(porma))
						{
						 alert('Debe digitar un numero en el precio al por mayor');	
						}
						else
						{	
							if (!/^([0-9])*$/.test(detal))
							{
						 	alert('Debe digitar un numero en el precio al detal');	
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
	  $consulta=$con->query("Select * from productos where id_producto=".$usuid);
	  while($resultado=$consulta->fetch_array())
	  {
		$id= $resultado[0]; 
		$imagen= $resultado[2]; 
		$des=$resultado[1]; 
		$detal=$resultado[3]; 
		$mayor=$resultado[4]; 
		$cantidad=$resultado[5];
		
	  }
	  
	  echo"<script>
	  $(document).ready(function()
	  {
		$('#id').val('".$id."'); 
		$('#vistaPrevia1').attr('src','productos/".$imagen."'); 
		$('#nombre').val('".$des."'); 
		$('#porma').val('".$mayor."'); 
		$('#detal').val('".$detal."'); 
		$('#cantidad').val('".$cantidad."'); 
		
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
      <div class="menu-secondary-menu-container"><ul id="menu-secondary-menu" class="menu"><li id="menu-item-1950" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1950"><a href="index.php">Inicio</a></li>
<li id="menu-item-1951" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1951"><a href="pormayor.php">Facturar al por Mayor</a></li>
<li id="menu-item-2212" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat current-menu-item menu-item-2212"><a href="aldetal.php">Facturar al Detal</a></li>



<li id="menu-item-2188" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2188"><a href="mantenimiento.php" id="mantenimiento">Mantenimiento</a>
<ul class="sub-menu" id="subman">
	<li id="menu-item-2189" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2189"><a href="crearusuario.php">Crear Usuarios</a></li>
    <li id="menu-item-2189" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2189"><a href="modificarusuario.php">Modificar Usuarios</a></li>
    <li id="menu-item-2190" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2190"><a href="producto.php">Crear Producto</a></li>
	<li id="menu-item-2190" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2190"><a href="modificarproducto.php">Productos</a></li>
	<li id="menu-item-2191" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2191"><a href="reimprimir.php">Reimprimir Factura</a></li>
    <li id="menu-item-2191" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2191"><a href="anular.php">Anular Factura</a></li>
   
    
</ul>
</li>

<li id="menu-item-2188" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2188"><a href="#">Reportes</a>
<ul class="sub-menu">
	<li id="menu-item-2189" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2189"><a href="existencias.php">Existencias</a></li>
	<li id="menu-item-2190" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2190"><a href="ventas.php">Ventas</a></li>
	
    
    
    
</ul>
</li>
</ul></div><!-- .menu -->



      </div>
          
  </div><!-- .main-nav -->

  <div class="container">

<div class="main row">
	<div id="content" class="column col12">
	  <div id="container"><div id="content" role="main">		
		



<div class="row product-list" >

<div id="seleccion">
	

	<div class="cajaform">
	
	
		<div class="form-group form-row-wide">
       
          <div id="botonera">
      
            <form id="ajax-contact-form" action='updateprod.php' class="form-horizontal"  method='post' enctype ="multipart/form-data" >
      <div class="cajaprod">
       <input class="tprod" id="id" name="id"   type="hidden">
    	<div class="product-header">
		<h3 class="product-title"><a href="http://demo.colorlabsproject.com/sneakersaddict-woocommerce/shop/converse-brown-green/">Selecione la imagen</a></h3>
		
		</div><!-- .product-header -->
   	<div class="foto">
   
<input name="url-archivo1" class="url-archivo" id="url-archivo1" type="text"><label class="cargar" id="cargar">
<input id="archivo1" name="archivo1" accept="image/*" type="file">
<img class="vistaPrevia" id="vistaPrevia1" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" alt="">  </label>

<div class="bottom"><input id="cancelar1" value="Cancelar Imagen" type="button"></div>
</div>
<!-- end foto -->

				    </div>
                    <div class="controls">				      
				      <input class="tprod" id="nombre" name="nombre" placeholder="Nombre del Producto:"   type="text">
                      <input class="tprod" id="porma" name="porma" placeholder="Precio al por Mayor:"  type="text">
                      <input class="tprod" id="detal" name="detal" placeholder="Precio al Detal:"  type="text">
                      <input class="tprod" id="cantidad" name="cantidad" placeholder="Catidad en inventario:"  type="text">
                      <input id="guardar" value="GUARDAR" type="button" onClick="validar();">
                      </div>
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