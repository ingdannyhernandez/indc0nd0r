<?php
include_once("../php/coneccion.php");
$Objconexion=new coneccion;
$conex= $Objconexion->conectar();

$descripcion = $_POST["descripcion"];




$sql= "insert into tipo_usuario(descripcion) values ('$descripcion');";			
			


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
