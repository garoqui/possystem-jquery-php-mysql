<?php

include ("connect.php");
$nombre=$_POST["nombre"];
$file=$_FILES['archivo1']['name'];
$porma=$_POST["porma"];
$detal=$_POST["detal"];

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
	if(file_exists('productos/'.$file))
					{
						 $codigo_fecha = date("YmdHis"); 
					  $no_aleatorio = rand(100, 999);
					  $codigo = $codigo_fecha.$no_aleatorio;
					  $file=$codigo.$file;
						
					}

move_uploaded_file($_FILES['archivo1']['tmp_name'],"productos/".$file);



$txt="INSERT INTO productos (DES_PRODUCTO,IMG_PRODUCTO,VALOR_DETAL,VALOR_MAYOR) values ('".$nombre."','".$file."',".$porma.")";
//echo $txt;
$sentencia=$con->prepare("INSERT INTO productos (DES_PRODUCTO,IMG_PRODUCTO,VALOR_DETAL,VALOR_MAYOR) values ('".$nombre."','".$file."',".$porma.",".$detal.".)");
$sentencia->execute();
$sentencia->close();
Header( "Location: mensajes.php?msg=3" );
}

?>