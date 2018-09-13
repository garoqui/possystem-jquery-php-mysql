<?php

include ("connect.php");
$nombre1=$_POST["nombre1"];
$nombre2=$_POST["nombre2"];
$apellido1=$_POST["apellido1"];
$apellido2=$_POST["apellido2"];
$inden=$_POST["iden"];
$cargo=$_POST["cargo"];
$sexo=$_POST["sexo"];
$alias=$_POST["alias"];
$pass=$_POST["pass"];
$cu=$_POST["cu"];
$mu=$_POST["mu"];
$pr=$_POST["pr"];
$rf=$_POST["rf"];
$af=$_POST["af"];
$re=$_POST["re"];
$rv=$_POST["rv"];
$fa=$_POST["fa"];

if(!empty($_FILES['archivo1']))
{
$file=$_FILES['archivo1']['name'];

function checkExtension($extension)
    {
        //aqui podemos añadir las extensiones que deseemos permitir
        $extensiones = array("jpg","png","gif","jpeg");
        if(in_array(strtolower($extension), $extensiones))
        {
            return TRUE;
        }else{
            return FALSE;
        }
    }
$trozos = explode(".", $file);
$varexp=end($trozos);
if (checkExtension($varexp) === TRUE)
{
	if(file_exists('empleados/'.$file))
					{
						 $codigo_fecha = date("YmdHis"); 
					  $no_aleatorio = rand(100, 999);
					  $codigo = $codigo_fecha.$no_aleatorio;
					  $file=$codigo.$file;
						
					}

move_uploaded_file($_FILES['archivo1']['tmp_name'],"empleados/".$file);

}


$txt="INSERT INTO usuarios (P_NOMBRE,S_NOMBRE,P_APELLIDO,S_APELLIDO,IDEN_USUARIO,CARGO_USUARIO,SEXO_USUARIO,ALIAS_USUARIO,PASS_USUARIO,FOTO_USUARIO,CU,MU,PR,RF,AF,RE,RV,FA) values ('".$nombre1."','".$nombre2."','".$apellido1."','".$apellido2."','".$inden."','".$cargo."','".$sexo."','".$alias."','".$pass."','".$file."','".$cu."','".$mu."','".$pr."','".$rf."','".$af."','".$re."','".$rv."','".$fa."')";
$sentencia=$con->prepare($txt);
$sentencia->execute();
$sentencia->close();
//Header( "Location: mensajes.php" );
}

$txt="INSERT INTO usuarios (P_NOMBRE,S_NOMBRE,P_APELLIDO,S_APELLIDO,IDEN_USUARIO,CARGO_USUARIO,SEXO_USUARIO,ALIAS_USUARIO,PASS_USUARIO) values ('".$nombre1."','".$nombre2."','".$apellido1."','".$apellido2."','".$inden."','".$cargo."','".$sexo."','".$alias."','".$pass."')";
header('location:mensajes.php?msg=1');
?>