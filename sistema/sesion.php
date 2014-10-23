<?php
     if (isset($_SESSION["usuario"]))
	    {
		$usuario=$_SESSION["usuario"];
		}
		else
		{
		$usuario=0;	
		}
	//incluir el archivo que tiene la clase
    include_once("../php/ClasePhp.php");
	//instanciar objeto
	$objPhp=new ClasePhp;
		//constantes fijas
	$tabla="usuario";
	$campoFiltrar="id";
	$valorFiltrado=$usuario;
	
@$DatosDeTablaUnFiltro=$objPhp->DatosDeTablaUnFiltro($tabla,$campoFiltrar,$valorFiltrado);
?>		
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="../estilo.css" rel="stylesheet" type="text/css" media="all">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>
<span class="cuadroTexto"><img src="img/User.png" alt="" width="20" height="20" /><?php echo utf8_encode($DatosDeTablaUnFiltro[1].' '.$DatosDeTablaUnFiltro[2].'');?>
<a href="../salir.php">           Cerrar Sesión</a>
</span><span class=""></span>
</body>
</html>