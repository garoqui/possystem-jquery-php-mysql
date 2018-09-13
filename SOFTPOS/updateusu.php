<?php

include ("connect.php");
$id=$_POST["id"];
$nombre1=$_POST["nombre1"];
$nombre2=$_POST["nombre2"];
$apellido1=$_POST["apellido1"];
$apellido2=$_POST["apellido2"];
$inden=$_POST["iden"];
$cargo=$_POST["cargo"];
$sexo=$_POST["sexo"];
$alias=$_POST["alias"];

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


$txt="UPDATE usuarios SET P_NOMBRE='".$nombre1."',S_NOMBRE='".$nombre2."',P_APELLIDO='".$apellido1."',S_APELLIDO='".$apellido2."',IDEN_USUARIO='".$inden."',CARGO_USUARIO='".$cargo."',SEXO_USUARIO='".$sexo."',ALIAS_USUARIO='".$alias."',FOTO_USUARIO='".$file."',CU='".$cu."',MU='".$mu."',PR='".$pr."',RF='".$rf."',AF='".$af."',RE='".$re."',RV='".$rv."',FA='".$fa."' where id_usuario=".$id;
echo $txt;
$sentencia=$con->prepare($txt);
$sentencia->execute();
$sentencia->close();
header('location:mensajes.php?msg=2');
//Header( "Location: mensajes.php" );
}


?>