<?php
include('connect.php');
$myid=$_GET['id'];



$actualizar=$con->prepare("update entradas set estado=1 where id_entrada='".$myid."'");
$actualizar->execute();
$actualizar->close();
Header( "Location: mensajes.php?msg=6" );
?>