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
$total=0;
$consulta=$con->query("Select * from entradas where id_entrada=".$id);
while($result=$consulta->fetch_array())
{



$dato1=$result[0];
$dato2=$result[1];	
$dato3=$result[2];
$dato4=$result[3];
$dato5=$result[4];	
$dato6=$result[5];
$dato7=$result[6];
	
	//echo $dato1;
}

				$busqueda1=$con->query("select * from usuarios where id_usuario='".$dato4."'" );
				
				while($nomusu=$busqueda1->fetch_array())
				{
					$recibe1=$nomusu[1];
					$recibe2=$nomusu[3];
					
				}
				$busqueda2=$con->query("select * from usuarios where id_usuario='".$dato6."'" );
				
				while($nomusu1=$busqueda2->fetch_array())
				{
					$entrega1=$nomusu1[1];
					$entrega2=$nomusu1[3];
					
				}



$mipdf=new Mipdf();
$mipdf->AddPage();
$dato1="Entrada de Almacen Numero: ".$dato1;
$dato6="Fecha de Entrada: ".$dato5;
$nomrec="Recibe: ".$recibe1." ".$recibe2;
$noment="Entrega: ".$entrega1." ".$entrega2;
//$mipdf->Cell(170,40,'Numero:' ,0,0,'C');
$mipdf->Cell(0,5,$dato1,0,1,'L');
$mipdf->Cell(0,5,$dato6,0,1,'L');
$mipdf->Cell(0,5,$nomrec,0,1,'L');
$mipdf->Cell(0,5,$noment,0,1,'L');
$mipdf->Cell(0,5,"",0,1,'L');
$mipdf-> SetFont("Arial", "B", 10);
$mipdf->Cell(135,5,'PRODUCTO',1,0,'C');
$mipdf->Cell(45,5,'CANTIDAD',1,1,'C');


//$mipdf->Cell(45,5,'TOTAL ',1,1,'C');

$confact=$con->query("select * from det_entrada where id_entrada=".$id);
			
			while($resuconfact=$confact->fetch_array())
			{
				
				
				$desprod=$resuconfact[2];
				$cantprod=$resuconfact[2];
				
				$busqueda=$con->query("select des_producto from productos where id_producto=".$desprod);
				while($nomprod=$busqueda->fetch_array())
				{
					$nombreprod=$nomprod[0];
					
				}
				
				
				$mipdf->Cell(135,5,$nombreprod,1,0,'C');
				$mipdf->Cell(45,5,$cantprod,1,1,'C');
				$total=$total+$cantprod;
					
				
					
			}
			$mipdf->Ln(10);
			
			

			//$ttotal="TOTAL:".$dato3;
			//$mipdf->Cell(180,5,$ttotal,1,0,'R');

			$ttotal="TOTAL:".$total;
			$mipdf->Cell(180,5,$ttotal,1,0,'R');

$mipdf->Output();
$actualizar=$con->prepare("UPDATE facturas1 SET impresa=1 where id=".$id);
$actualizar->execute();
$actualizar->close();

?>