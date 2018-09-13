<?php
include('connect.php');
$myid=$_GET['id'];



$actualizar=$con->prepare("update facturas1 set estado=1 where id='".$myid."'");
$actualizar->execute();
$actualizar->close();
Header( "Location: mensajes.php?msg=5" );
?>