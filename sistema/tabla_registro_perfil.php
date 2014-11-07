<?php 
session_start(); 
$_SESSION["DESACTIVARBOTONGUARDAR"]="NO";
$_SESSION["formulario"]="PERFIL";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="normalize.css">
<link href="../estilo.css" rel="stylesheet" type="text/css">
 <link href="image/favicon.png" type="text/css" rel="shortcut icon"/>

<title>Documento sin título</title>
</head>

<body>
<?php 
include("barratareas.php");
?>	

  <div class="rusuario">
              <span class="texto1">Registro de Perfil</span><hr>
    			<form name="form1" method="post" action="guardarperfil.php"><br>
                <p>
   			    <label for="nombre">Nombre</label>
   			    <input type="text" name="descripcion" id="descripcion" required autofocus onkeypress="return pasarConEnter(this, event)"><br>
   			 
				</p>

                  <p>
                  <input name="submit" type="submit" class="boton1" value="GUARDAR">
                  </p>
   			  </form>
   		</div>

</body>
</html>