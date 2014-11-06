<?php
include_once("../php/coneccion.php");
include_once("../php/ClasePhp.php");
$Objconexion=new coneccion;
$conex= $Objconexion->conectar();
$ObjPhp= new ClasePhp;

$nombres      = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$correo  = $_POST["correo"];
$celular     = $_POST["celular"];
$usuario     = $_POST["usuario"];
$clave     = $_POST["clave"];
$remoto     = $_POST["remoto"];
$foto     = $_POST["foto"];
		
		


$resultado=$ObjPhp->GuardarUsuario($nombres,$apellidos,$correo,$celular,$usuario,$clave,$remoto,$foto);
	if($resultado)
	{
		
		echo"<script type='text/javascript'>
			alert('Registro Guardado');
			history.back();
			</script>";
	
	}
    


?>
