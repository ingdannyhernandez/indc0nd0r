<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

	<title>PROCON</title>
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<link href="estilo.css" rel="stylesheet" type="text/css">
  <link href="image/favicon.png" type="text/css" rel="shortcut icon"/>
  <script type="text/javascript" language="javascript" src="funciones.js"></script>
</head>

<body>
	<header>
		<img src="image/logo.png" width="192" height="57">
            
	</header>
    <hr><!--linea debajo de la imagen-->
<content>
  <div class="formClave">
    <h1>Conectar con PROCON</h1>
    			<form name="form1" method="post" action="verificarIngreso.php">
   			    
                <p>
   			    <label for="usuario">Usuario</label>
   			    <input type="text" name="usuario" id="usuario" required="required" autofocus onkeypress="return pasarConEnter(this, event)"><br>
   			 
</p>

		        <p>
		          <label for="clave">Contraseña</label>
		          <input type="password" name="clave" id="clave" required="required" onkeypress="return pasarConEnter(this, event)"><br>

                 </p>
                  <p>
                  <input name="submit" type="submit" class="boton1" value="INGRESAR">
                  </p>
   			  </form>
   			</div>
</content>
<footer></footer>
</body>
</html> 