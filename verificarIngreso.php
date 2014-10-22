<?php 
ob_start();
session_start(); 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>VERIFICAR INGRESO</title>
</head>
<body>
<?php 
	//recibo las variables de acceso
   @$usuario=$_POST["usuario"];
   @$clave=$_POST["clave"];
  
			
	//conecto a la clase que tiene las funciones php
	include_once("php/ClasePhp.php");
	//creo una instancia a la clase
	$ObjPhp=new ClasePhp;
	//busco si existe un usuario con esa informacion
    $verifica_ingreso=$ObjPhp->VerificarIngreso($usuario,$clave); 
	

		
   	
	if ($verifica_ingreso == 0)  
	   {
?>
		<script language=Javascript> 
		alert('USUARIO O CLAVE INCORRECTO');
		location.href="index.php";
        
        </script>
<?php 
   die();}
  	else 
	{

	//busco los privilegios en la base de datos
	$DatosDeusuario=$ObjPhp->DatosDeTablaUnFiltro("usuario","usuario",$usuario);
	//creo la sesion para establecer la seguridad 
			$_SESSION["usuario"]=$DatosDeusuario[0];
			$_SESSION["usu_mon"]=utf8_encode($DatosDeusuario[1].", ".$DatosDeusuario[2] );
			$_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s"); 
			$cargar="sistema/index.php";

	header("Location: ".$cargar);
   exit;
	}
?>
</body>
</html>
<?php 
ob_end_flush(); 
?>