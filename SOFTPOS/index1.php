<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 ie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8 ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<?php
	include("fpdf.php");
	?>
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


<script type="text/javascript" src="js/funciones.js"></script>

<script>
function eli() {
	

	$(this).parent('li').remove();
		alert("12132");
	//$(this).parent('.lifact').remove();
	
}
$(document).on('click','.remove', function(){
        $(this).parent().parent('li').remove();
		var menos=$(this).prev().text();
		var mtotal=$('#gtotal').text();
		$('#gtotal').text(mtotal-menos);
		
		
    });

</script>
<script>


$(document).ready(function(){
	var grantotal=0;
	$('#gtotal').text(0);
	$("#botonera1").hide();
	$("#centro").hide();
	
	$(".pp").click(function(){
		var imagen=$(this).attr("src");
	var varsrc="'"+imagen+"'";
	var id=$(this).attr("id");
	var pr=$(this).attr("value");
	
	//var precio=$(idprecio).val();
	$("#prodsen").append("<img id='imgtemp' value='"+id+"' src="+imagen+">");
	$("#precio").text(pr);
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
	var codigo=$("#imgtemp").attr("value");
	var total=canti*precio;
	$("#listaprod").append("<li class='lifact' id='lifact'><div class='formgroup'><img class='imagenfact' src="+img+"><label id='micod'>"+codigo+"</label><label id='cantidad'>"+canti+"</label><label id='valor'>"+precio+"</label><label class='ltotal' id='ltotal'>"+total+"</label><button class='btn btn-default remove'>X</button></div></li>'");	
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
	

</script>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="index, nofollow" />





<!-- Custom Favicon -->
<link rel="shortcut icon" href="images/favicon.png"/>


      <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
</head>
  
<body class="archive tax-product_cat term-converse term-73 woocommerce woocommerce-page gecko alt-style-default">
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
<div id="centro">







	<div id="prodsen"><div class="product-header">
		<h3 class="product-title"><a href="http://demo.colorlabsproject.com/sneakersaddict-woocommerce/shop/converse-brown-green/">Converse Brown Green</a></h3>
		<div class="product-price">
			
			
			<span class="amount" id="precio" >23000</span> </a>					
		</div>
	</div><!-- .product-header --></div>
	<div id="teclado">
		<div ><input type="text" placeholder="Cantidad" id="inpcant"></div>
		<div id="numeros">
        <input type="button" class= "num" value="1">
        <input type="button" class= "num" value="2">
        <input type="button" class= "num" value="3">
        <input type="button" class= "num" value="4">
        <input type="button" class= "num" value="5">
        <input type="button" class= "num" value="6">
        <input type="button" class= "num" value="7">
        <input type="button" class= "num" value="8">
        <input type="button" class= "num" value="9">
        <input type="button" class= "num" value="0">
        <input type="button" id="borrar" value="BORRAR">
         



		</div>
        <div id="botonera"><input value="ACEPTAR" type="submit" id="aceptar"><input value="CANCELAR" type="submit" id="cancelar">
	</div>
</div>
</div>
<div id="seleccion">
	
<div class="productos" >	
<?php
include ('connect.php');
$sentencia=$con->query('select * from productos');
echo "<div class='product-item column col4' id='productos'>";
while($filarespu=$sentencia->fetch_array())
				{
				$cod=$filarespu[0];
				$var=$filarespu[1];	
				$img=$filarespu[2];
				$precio=$filarespu[3];
				echo "

<div class='cajaprod1'>
<div class='product-header'>
	<h3 class='product-title'><a href='http://demo.colorlabsproject.com/sneakersaddict-woocommerce/shop/converse-brown-green/'>".$var."</a></h3>
	<div class='product-price'>
		
			
			<a ><span class='amount' id=p".$cod." val=".$precio.">&#36;".$precio."</span> </a>					
		</div>
		<div class='product-meta'>
		
		
			 
			 <div class='product-thumbnail'>
		<a href='#'>
			
			<img  id='".$cod."' value=".$precio." class='pp' src='productos/".$img."'  />		</a>
	</div><!-- product-thumbnail -->
		<!--<div class='product-category'>
			 <a href='http://demo.colorlabsproject.com/sneakersaddict-woocommerce/product-category/converse/' rel='tag'>".$var."</a>		</div>-->	 
	</div><!-- .product-meta -->	
	
		
</div><!-- .product-header -->
</div><!-- .cajaprod -->



";
				}
				echo "</div>";
$sentencia->close();

?>


</div><!-- #productos-->
<div id='factura'>
	<div class='titulofact'>VISTA PREVIA DE LA FACTURA</div>
	<ul class='listaprod' id='listaprod'>	</ul>
	<div class='totales'><li>TOTAL:<label id='gtotal'></label></li></div>
	<div id='botonera1'><input value='PAGO EN EFECTIVO' type='submit' id='facturar'><input value='PAGO EN CREDITO' type='submit' id='facturarcre'><input value='CANCELAR' type='submit' id='cancelar'></div>
    
</div><!-- #factura -->

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