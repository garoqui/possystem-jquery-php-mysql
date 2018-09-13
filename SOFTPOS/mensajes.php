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
<link rel='stylesheet' id='uniformcss-css'  href='css/uniform.css?ver=4.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='main-style-css'  href='css/style.css?ver=4.5.3' type='text/css' media='all' />
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js' type='text/javascript'></script>
<script type='text/javascript' src='js/jquery.js?ver=1.11.1'></script>
<script type='text/javascript' src='js/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='js/plugins.js?ver=4.5.3'></script>




<script type="text/javascript" src="js/jquery.numeric.js"></script>



<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="index, nofollow" />





<!-- Custom Favicon -->
<link rel="shortcut icon" href="images/favicon.png"/>


      <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
</head>
  
<body class="archive tax-product_cat term-converse term-73 woocommerce woocommerce-page gecko alt-style-default">
<div id='resultado'></div>
<div class="main-container"><!-- .top-nav -->

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

	
       
</div>
</div>
<div id="seleccion">
	


<div id='mensaje'><?php
if (isset($_GET['msg']))
{
	$msg=$_GET['msg'];
	switch ($msg)
	{
	case 1:
	echo "<p>Usuario Creado Correctamente</p><image class='ver' src='images/original.jpg'>";
	break;
	
	case 2:
	
	echo "<p>Usuario Modificado Correctamente</p><image class='ver' src='images/original.jpg'>";
	break;
	
	case 3:
	
	echo "<p>Producto Creado Correctamente</p><image class='ver' src='images/original.jpg'>";
	break;
	
	case 4:
	
	echo "<p>Producto Modificado Correctamente</p><image class='ver' src='images/original.jpg'>";
	break;
	
	case 5:
	
	echo "<p>Factura Anulada Correctamente</p><image class='ver' src='images/original.jpg'>";
	break;
	
	case 6:
	
	echo "<p>Entrada Anulada Correctamente</p><image class='ver' src='images/original.jpg'>";
	break;
	
	}
	
}
else
{
echo "no";	
}



 ?></div>
    
    



</div><!-- #seleccion -->

</div>


		</div></div>		
		<!-- .pagination -->
		
				

			</div><!-- #content -->
</div><!-- .main -->

	</div><!-- .container -->

	<div id="footer" class="container">
		<div class="row">
					<div id="colabs_about-3" class="widget column col4 widget_colabs_about">        
        		<div class="page-widget">
		<h3 class="widget-title">		About		</h3> 		<p>Cras tristique odio lacus, in dapibus odio. In sodales malesuada ante nec cursus. Nulla erat mi, tincidunt vitae viverra id, volutpat non sapien. Integer non nunc nec leo scelerisque ornare sed eget est. Proin mattis rutrum risus. In non</p>		<p><a class="more" href="http://demo.colorlabsproject.com/sneakersaddict-woocommerce/about/">View more</a></p>
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

</div>
<!-- .main-container -->

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