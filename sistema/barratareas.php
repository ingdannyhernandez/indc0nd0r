<?php 
@$formulario=$_SESSION["formulario"];
@$ACTIVARBOTONGUARDAR=$_SESSION["ACTIVARBOTONGUARDAR"];
@$DESACTIVARBOTONGUARDAR=$_SESSION["DESACTIVARBOTONGUARDAR"];



?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<div class="barratareas"  >
     
	    <li> <a onClick="cargaMenu('tabla_registro_usuario.php')" class="bnuevo" onMouseover="showhint('CREAR NUEVO <?php echo $formulario?>', this, event, '150px')"></a></li>
        
		<li> <?php if ($DESACTIVARBOTONGUARDAR=="SI"){ ?><a href=""class="guardarg "onMouseover="showhint('BOTON DESACTIVADO', this, event, '135px')" ></a><?php }else {?><a class="bguardar" onMouseover="showhint('GUARDAR <?php echo $formulario?>', this, event, '150px')" ></a><?php }?></li>
        
		<li> <a href=""class="bactualizar" onMouseover="showhint('ACTUALIZAR <?php echo $formulario?>', this, event, '135px')" ></a></li>
		<li> <a href=""class="beliminar" onMouseover="showhint('ELIMINAR <?php echo $formulario?>', this, event, '115px')"></a></li>
		<li> <a href=""class="bbuscar" onMouseover="showhint('BUSCAR <?php echo $formulario?>', this, event, '107px')"></a></li>
		<li> <a href=""class="bcancelar" onMouseover="showhint('CANCELAR <?php echo $formulario?>', this, event, '123px')"></a></li>
        <li> <a href=""class="primero" onMouseover="showhint('IR AL PRIMER <?php echo $formulario?>', this, event, '137px')"></a></li>
        <li> <a href=""class="retroceder" onMouseover="showhint('RETROCEDE', this, event, '70px')"></a></li>
        <li> <a href=""class="avanzar"onMouseover="showhint('AVANZAR', this, event, '55px')"></a></li>
        <li> <a href=""class="ultimo" onMouseover="showhint('IR Al ULTIMO <?php echo $formulario?>', this, event, '135px')"></a></li>     

   <span class="lineabtareas">.</span><hr>	
</div>
</body>
</html>