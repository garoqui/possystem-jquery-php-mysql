<?php
include ("connect.php");
$fecini=$_POST['datepicker'];
$fecfin=$_POST['datepicker1'];
$porciones=explode("/",$fecini);
$porciones1=explode("/",$fecfin);

$confecini=$porciones[2]."-".$porciones[0]."-".$porciones[1]." 00:00:00";
$confecfin=$porciones1[2]."-".$porciones1[0]."-".$porciones1[1]." 24:00:00";
echo $confecini;
echo $confecfin;
$consulta=$con->query("Select * from entradas where fecha >= '".$confecini."' and fecha<= '".$confecfin."'");
//echo "Select * from facturas1 where fecha >= '".$confecini."' and fecha<= '".$confecfin."'";
$resultado="<ul><li><div class='f1e'>Factura</div><div class='v1e'>Valor</div><div class='d1e'>Fecha</div><div class='r1e'>Acción</div></li>";
while($resu=$consulta->fetch_array())
{
$idfac=$resu[0];
$total=$resu[2];
$fecha=$resu[4];
$anulada=$resu[6];
if($anulada==0)
{
$resultado=$resultado. "<li><div class='f1'>".$idfac."</div><div class='v1'>".$total."</div><div class='d1'>".$fecha."</div><div class='r1'><a href='recibiranuent.php?id=".$idfac."'>Anular</a></div></li>
";
}
else
{
$resultado=$resultado. "<li style='background:green;'><div class='f1'>".$idfac."</div><div class='v1'>".$total."</div><div class='d1'>".$fecha."</div><div class='r1'><a href='#".$idfac."'>Factura Anulada</a></div></li>	";
}
}
$resultado=$resultado."</ul>";
$resultado=$resultado."<script>
$(document).ready(function(){
$('.modi').click(function()
{
var id=$(this).attr('id');
var id=id.substr(1)	
$(location).attr('href','mostrarproducto.php?id='+id);         	
});
	
});


</script>";

echo $resultado;
?>