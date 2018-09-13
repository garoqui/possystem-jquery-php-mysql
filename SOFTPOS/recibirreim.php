<?php
include("connect.php");
$id=$_GET['id'];
include("fpdf.php");

class Mipdf extends FPDF
{
public function Header()
	{
	//$this-> Image("images/logo.gif", 70,10,60,20);
	$this-> SetFont("Arial", "B", 20);
	$this->Cell(0,15, 'TRIBU STREETWEAR',0,1,'C');
	$this-> SetFont("Arial", "B", 10);
	$this->Cell(0,5,'NIT 52.834.531-8',0,2,'C');
	$this->Cell(0,5,'Carrera 10# 9-37 Local 2046',0,2,'C');
	$this->Cell(0,5,'Regimen Simplificado',0,2,'C');
	$this->Ln(10);
	
	}
	
}

$consulta=$con->query("Select * from facturas1 where id=".$id);
while($result=$consulta->fetch_array())
{
$dato10=$result[10];


$dato1=$result[0];
$dato2=$result[1];	
$dato3=$result[3];	
$dato6=$result[6];	
	//echo $dato1;
}

$mipdf=new Mipdf();
$mipdf->AddPage();
$dato1="Recibo de Caja Numero:".$dato1;
$dato6="Fecha de Compra:".$dato6;
//$mipdf->Cell(170,40,'Numero:' ,0,0,'C');
$mipdf->Cell(0,5,$dato1,0,1,'L');
$mipdf->Cell(0,5,$dato6,0,1,'L');
$mipdf-> SetFont("Arial", "B", 10);
$mipdf->Cell(45,5,'PRODUCTO',1,0,'C');
$mipdf->Cell(45,5,'CANTIDAD',1,0,'C');
$mipdf->Cell(45,5,'VR UNIT.',1,0,'C');
$mipdf->Cell(45,5,'TOTAL ',1,1,'C');

$confact=$con->query("select * from det_facturas where id_fac=".$id);
			
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
				$mipdf->Cell(45,5,$nombreprod,1,0,'C');
				$mipdf->Cell(45,5,$cantprod,1,0,'C');
				$mipdf->Cell(45,5,$uniprod,1,0,'C');
				$mipdf->Cell(45,5,$totprod,1,0,'C');				
				
					
			}
			$mipdf->Ln(10);
			$stotal="SUBTOTAL:".$dato2;
			$mipdf->Cell(180,5,$stotal,1,1,'R');

			//$ttotal="TOTAL:".$dato3;
			//$mipdf->Cell(180,5,$ttotal,1,0,'R');

			$ttotal="TOTAL:".$dato3;
			$mipdf->Cell(180,5,$ttotal,1,0,'R');

$mipdf->Output();
$actualizar=$con->prepare("UPDATE facturas1 SET impresa=1 where id=".$id);
$actualizar->execute();
$actualizar->close();

?>