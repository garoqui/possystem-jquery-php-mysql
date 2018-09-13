<?php
include ('connect.php');
$sentencia=$con->query('select * from productos');

while($filarespu=$sentencia->fetch_array())
				{
				$var=$filarespu[1];	
				}
$sentencia->close();

$resultado="
<div class='cajaprod1'>
<div class='product-header'>
	<h3 class='product-title'><a href='http://demo.colorlabsproject.com/sneakersaddict-woocommerce/shop/converse-brown-green/'>'.$var.'</a></h3>
	<div class='product-price'>
		
			
			<a href='http://demo.colorlabsproject.com/sneakersaddict-woocommerce/shop/converse-brown-green/'><span class='amount'>&#36;23000.00</span> </a>					
		</div>
		<div class='product-meta'>
		
		<div class='product-category'>
			 <a href='http://demo.colorlabsproject.com/sneakersaddict-woocommerce/product-category/converse/' rel='tag'>Converse</a>		</div>
			 
			 <div class='product-thumbnail'>
		<a href='#'>
			
			<img  class='pp' src='http://demo.colorlabsproject.com/sneakersaddict-woocommerce/files/2012/02/photo3-304x314.jpg' alt='photo3' title='Converse Brown Green' class='producto' />		</a>
	</div><!-- product-thumbnail -->
			 
	</div><!-- .product-meta -->	
	
		
</div><!-- .product-header -->
</div><!-- .cajaprod -->


<div class='cajaprod1'>
<div class='product-header'>
	<h3 class='product-title'><a href='http://demo.colorlabsproject.com/sneakersaddict-woocommerce/shop/converse-brown-green/'>Converse Brown Green</a></h3>
	<div class='product-price'>
		
			
			<a href='http://demo.colorlabsproject.com/sneakersaddict-woocommerce/shop/converse-brown-green/'><span class='amount'>&#36;23000.00</span> </a>					
		</div>
		<div class='product-meta'>
		
		<div class='product-category'>
			 <a href='http://demo.colorlabsproject.com/sneakersaddict-woocommerce/product-category/converse/' rel='tag'>Converse</a>		</div>
			 
			 <div class='product-thumbnail'>
		<a href='#'>
			
			<img  class='pp' src='http://demo.colorlabsproject.com/sneakersaddict-woocommerce/files/2012/02/photo3-304x314.jpg' alt='photo3' title='Converse Brown Green' class='producto' />		</a>
	</div><!-- product-thumbnail -->
			 
	</div><!-- .product-meta -->	
	
		
</div><!-- .product-header -->
</div><!-- .cajaprod -->




";
echo $resultado;
?>
