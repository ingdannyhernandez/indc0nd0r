<?php
include_once("../php/coneccion.php");
$Objconexion=new coneccion;
$conex= $Objconexion->conectar();

$nombres      = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$correo  = $_POST["correo"];
$celular     = $_POST["celular"];
$usuario     = $_POST["usuario"];
$clave     = $_POST["clave"];
$remoto     = $_POST["remoto"];
$foto     = $_POST["foto"];



$sql= "insert into usuario(id,nombres,apellidos,correo,celular,usuario,clave,remoto,foto) values ('','$nombres','$apellidos','$correo','$celular','$usuario','$clave','$remoto','$foto');";			
			


$resultado= mysql_query($sql);
	if($resultado)
	{
		
		echo"<script type='text/javascript'>
			alert('Registro Guardado');
			history.back();
			</script>";
	
	}
     else
	 {
		 echo mysql_error();
		 
	  }
//cerrar conexion
mysql_close();

?>
