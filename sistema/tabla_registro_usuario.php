<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>REGISTRO DE USUARIO</title>
<link href="../estilo.css" rel="stylesheet" type="text/css">
</head>
<?php 
include("barratareas.php");
?>
 <div class="rusuario">
    <span class="texto1">Registro Perfil</span><hr>
    			<form name="form1" method="post" action="verificarIngreso.php"><br>
                
   			    
                <p>
   			    <label for="nombre">Nombre</label>
   			    <input type="text" name="descripcion" id="descripcion" required="required" autofocus onkeypress="return pasarConEnter(this, event)"><br>
   			 
</p>

                  <p>
                  <input name="submit" type="submit" class="boton1" value="INGRESAR">
                  </p>
   			  </form>
   			</div>
</html>