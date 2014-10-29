<?php 	
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
<link href="../estilo.css" rel="stylesheet" type="text/css" media="all">
<script type="text/javascript" language="javascript" src="../funciones.js"></script>
<title>menu</title>
</head>

<body>
<?php 			
	
		
			//conecto a la clase que tiene las funciones php
	include_once("../php/ClasePhp.php");
	//creo una instancia a la clase
	$ObjPhp=new ClasePhp;
	//busco si existe un usuario con esa informacion
    $result=$ObjPhp->menuDinamico($_SESSION["usuario"]); 
	
	 $Modulos = array();

 while($row = mysql_fetch_assoc($result)){ 
 $Modulos[$row['id']] = array("superior" => $row['superior'], "descripcion" =>                       
 $row['descripcion'], "direccion" => $row['direccion'] );   
  }

 function createTree($array, $currentParent, $currLevel = 0, $prevLevel = -1) {

foreach ($array as $categoryId => $category) {

if ($currentParent == $category['superior']) {                       

    if ($currLevel > $prevLevel) echo " <ol class='tree'> "; 

    if ($currLevel == $prevLevel) echo " </li> </a> ";

    echo ' <li>
	 <label onClick="cargaMenu(&quot;'.$category['direccion'].'&quot;)" for="subfolder2">'.$category['descripcion'].'</label> <input type="checkbox" id="subfolder2"/>
';

    if ($currLevel > $prevLevel) { $prevLevel = $currLevel; }

    $currLevel++; 

    createTree ($array, $categoryId, $currLevel, $prevLevel);

    $currLevel--;               
    }   

}

if ($currLevel == $prevLevel) echo " </li>  </ol> ";

}   
?>
<div id="content" class="general-style1">
<?php
 if(mysql_num_rows($result)!=0)
 {
?>
<?php 
createTree($Modulos, 0); ?>
<?php
}
?>

</body>
</html>