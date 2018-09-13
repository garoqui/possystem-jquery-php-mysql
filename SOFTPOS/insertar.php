<?php
	include("fpdf.php");
class Mipdf extends FPDF
{
public function Header()
	{
	$this-> Image("images/logo.gif", 10,10,20,20);
	$this-> SetFont("Arial", "B", 20);
	$this->Cell(100,10, '".$.',0,0,'C');
	$this->Ln(20);
	
	}
	
}

if($_POST){
	include ("connect.php");

	
$con->autocommit(false);
$resultado1="";
$usuario="TEMP";
$tipo=1; 
$punto=1;
$tipopago=0;
 	$cliente=0;
   //echo "recibo algo POST";
   $itemtex="";
   $valor="";
   $subtotal=0;
   $iva=0;
   //recibo los datos y los decodifico con PHP
   $misDatos = json_decode($_POST["datos"]);
   foreach($misDatos as $valor)
   {
	  
   	$item = explode("-", $valor);
	$micod=$item[0];
	$cantidad=$item[1];
	$valoruni=$item[2];
	$total=$item[3];
	 
	$maximo=$con->query("SELECT MAX(ID) as maximonum from facturas1");
	while($maxfac=$maximo->fetch_array())
	{
	$numfact=$maxfac[0]+1;	
	}
				
	$sentencia=$con->prepare("INSERT INTO det_facturas (id_fac,id_prod,cant_prod,valor_det,valor_total_det) values(".$numfact.",".$micod.",".$cantidad.",".$valoruni.",".$total.")");
	
	$sentencia->execute();
	$sentencia->close();
 $subtotal=$subtotal+$total;
 

   }
   $gtotal=$subtotal+$iva;
   $sentencia1=$con->prepare("INSERT INTO facturas1 (SUBTOTAL,IVA,TOTAL,CLIENTE,PUNTO_DE_VENTA,TIPO_DE_VENTA,USUARIO,TIPO_DE_PAGO) values(".$subtotal.",".$iva.",".$gtotal.",".$cliente.",".$punto.",".$tipo.",'".$usuario."',".$tipopago.")");
	
	$sentencia1->execute();
	$sentencia1->close();
      
   $salida =$misDatos[0];
   $con->commit();
  $consulta=$con->query("Select * from facturas1");
  while($resufac=$consulta->fetch_array())
  {
	$fecha=$resufac[6];  
  }
  $resultado="<div class='facturacont'>
  				<h1>TRIBU STREETWEAR</h1>
				<h2>NIT 52.834.531</h2>
				<p>Carrera 10 #9-37 Local 2046</p>
				<p>Télefono 3521123</p>
				<p>Régimen Simplificado</p>
				<p>Factura No:".$numfact."</p>
				<p>Fecha de Venta:".$fecha."</p>
				<p>________________________________________________________________________________</p>
				<p><div class='enc'><div class='tfacp'>PRODUCTO</div><div class='tfacc'>CANT</div><div class='tfacc'>VR UNI</div><div class='tfacc'>TOTAL</div></div></p>
				<p>________________________________________________________________________________</p>
  			";
			$confact=$con->query("select * from det_facturas where id_fac=".$numfact);
			
			while($resuconfact=$confact->fetch_array())
			{
				$totprod=$resuconfact[5];
				$uniprod=$resuconfact[4];
				$cantprod=$resuconfact[3];
				$desprod=$resuconfact[2];
				
				$busqueda=$con->query("select des_producto from productos where id_producto=".$desprod);
				
				while($nomprod=$busqueda->fetch_array())
				{
					$nombreprod=$nomprod[0];
					
				}
			$resultado1=$resultado1."<p><div class='enc'><div class='tfacp'>".$nombreprod."</div><div class='tfacc'>".$cantprod."</div><div class='tfacc'>".$uniprod."</div><div class='tfacc'>".$totprod."</div></div></p>
				<p>________________________________________________________________________________</p>
				
				
				";	
			}
			$mipdf=new Mipdf();
//$mipdf->Output();	
			$resultado1=$resultado1."<div id='total'><h1>TOTAL:".$total."</h1></div></div>";
 echo $numfact;
  //echo $resultado.$resultado1;
   //echo $salida."fsdf".$cantidad;
}
else{
   echo "No recibí datos por POST";
}
?> 