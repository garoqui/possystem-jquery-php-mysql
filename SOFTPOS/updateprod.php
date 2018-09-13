<?php

include ("connect.php");
$id=$_POST["id"];
$nombre=$_POST["nombre"];
$porma=$_POST["porma"];
$detal=$_POST["detal"];
$cantidad=$_POST["cantidad"];


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
	if(file_exists('productos/'.$file))
					{
						 $codigo_fecha = date("YmdHis"); 
					  $no_aleatorio = rand(100, 999);
					  $codigo = $codigo_fecha.$no_aleatorio;
					  $file=$codigo.$file;
						
					}

move_uploaded_file($_FILES['archivo1']['tmp_name'],"productos/".$file);

}


$txt="UPDATE productos SET DES_PRODUCTO='".$nombre."',img_producto='".$file."',valor_detal='".$detal."',valor_mayor='".$porma."',cantidad='".$cantidad."' where id_producto=".$id;
echo $txt;
$sentencia=$con->prepare($txt);
$sentencia->execute();
$sentencia->close();
Header( "Location: mensajes.php?msg=4" );
}


?>