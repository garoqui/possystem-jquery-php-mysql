<?php
include ("connect.php");
$consulta=$con->query("Select * from productos");
$resultado="";
while($resu=$consulta->fetch_array())
{
$idusu=$resu[0];
$img=$resu[2];
if ($img=="")
{
	
$vimg="No_Image.png";	
}
else
{
$vimg=$img;
}


$resultado=$resultado. "<div class='conusu'><div class='imgusu'><image class='imgusu1' src='productos/".$vimg."'>
<div><p><h3>".$resu[1]." ".$resu[3]."</h3></p></div>
<div><a href='#' class='modi' id='m".$idusu."'>Modificar</a></div><div><a href='#' style='color:red' class='eli' id='e".$idusu."'>Eliminar</a></div></div>

</div>



";	
}

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