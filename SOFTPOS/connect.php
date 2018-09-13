<?php

$con=new mysqli('localhost','root','1234','sofpos');
$con->query("SET NAMES 'utf8'");


if($con->connect_errno > 0){
    die('Imposible conectarse con la base de datos: [' . $con->connect_error . ']');
}
else
{
	
	$aprob=1;
}
?>