<?php

	

if($_POST)
{
	include ("connect.php");

	
$con->autocommit(false);
$total=0;
$resultado1="";
$usuario="TEMP";
$cantidad=0;
   //recibo los datos y los decodifico con PHP
   $misDatos = json_decode($_POST["datos"]);
   foreach($misDatos as $valor)
   {
	  
   	$item = explode("-", $valor);
	$micod=$item[0];
	$cantidad=$item[1];
	$recibe=$item[2];
	$entrega=$item[3];
	
	 
	$maximo=$con->query("SELECT MAX(id_entrada) as maximonum from entradas");
	while($maxfac=$maximo->fetch_array())
	{
	$numfact=$maxfac[0]+1;	
	}
	$txt="INSERT INTO det_entrada(id_entrada,id_producto,cantidad) values(".$numfact.",".$micod.",".$cantidad.")";			
	$sentencia=$con->prepare("INSERT INTO det_entrada(id_entrada,id_producto,cantidad) values(".$numfact.",".$micod.",".$cantidad.")");
	
	$sentencia->execute();
	$sentencia->close();
	$total=$total+$cantidad;
	
	
	
   }
   
   $sentencia1=$con->prepare("INSERT INTO entradas (punto_de_venta,cantidad,recibe,entrega) values ('1','".$total."','".$recibe."','".$entrega."')");
   $sentencia1->execute();
   $sentencia1->close();
   $con->commit();
   echo $numfact;
   }
else{
   echo "No recibí datos por POST";
}
?> 