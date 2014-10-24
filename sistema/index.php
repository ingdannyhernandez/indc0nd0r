<?php 	
session_start();
     if (isset($_SESSION["usuario"]))
	     {
    	// el tiempo transcurrido 
    	$fechaGuardada = $_SESSION["ultimoAcceso"]; 
    	$ahora = date("Y-n-j H:i:s"); 
    	$tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaGuardada)); 
		//comparamos el tiempo transcurrido 
     	if($tiempo_transcurrido >= 60000) 
			{ 
     		//si pasaron 10 minutos o más 
      		session_destroy(); // destruyo la sesión 
      		header("Location: ../index.php?opcion=desconectado"); //envío al usuario a la pag. de autenticación 
      		//sino, actualizo la fecha de la sesión 
	   		}
		else 	
			{ 
    		$_SESSION["ultimoAcceso"] = $ahora; 
   			} 
		 }
		else
		{
		header('Location: ../index.php');
		exit;
		}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<title>PROCON</title>
<link rel="stylesheet" type="text/css" href="../normalize.css">
<link href="../estilo.css" rel="stylesheet" type="text/css" media="all">
<script type="text/javascript" language="javascript" src="../funciones.js"></script>
</head>

<body>
<header>
<div class="logo"></div>
 <div class="titulo"> <center> BIENVENIDOS A PROCON</center></div>
 
 <div class="sesion">
  <?php @$opcion2=$_GET["opcion2"];
switch ($opcion2)
{
default:
include("sesion.php");
} ?></div>



<div class="menu">
    <ul class="nav">
      <li>prueba</li>
      <li>prueba2</li>
      <li>prueba3</li>
      <li>prueba4</li>
    </ul>

  </div>




<div class="icono"></div>
</header>

  <div class="principal">
          <?php
@$opcion=$_GET["opcion"];
$_SESSION["opcion"]=$opcion;
switch ($opcion)
{
case "tablaactividad":
include("tablaactividad.php");
break;

default:
include("inicio.php");
}
?>
</div>

<footer>.</footer>
</body>
</html>