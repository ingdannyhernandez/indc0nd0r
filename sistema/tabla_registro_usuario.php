<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>REGISTRO DE USUARIO</title>
<link href="../estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php 
include("barratareas.php");
?>

<div class="rusuario">
  	 <form name="form1" method="post" action="">
   	 	 <fieldset>
   		 <legend>Datos personales</legend><br>
             <p>
   			    <label for="nombre">Nombre</label>
   			    <input type="text" name="nombres" id="nombres" required autofocus onkeypress="return pasarConEnter(this, event)">
   			 </p>
			 	 <p>
   			    	<label for="apellidos">Apellidos</label>
   			   		 <input type="text" name="apellidos" id="apellidos" required autofocus onkeypress="return pasarConEnter(this, event)">
   			     </p>
            		 <p>
   			    		<label for="foto">Foto</label>
   			    		<input type="file" name="foto" id="foto" required  size="20" autofocus onkeypress="return pasarConEnter(this, event)">
					</p>
                
       </fieldset>
  
   				 <fieldset>
 					 <legend>Datos de Contacto</legend><br>
           			  <p>
   			    		<label for="correo">Correo</label>
   			   		    <input type="text" name="correo" id="correo" required autofocus onkeypress="return pasarConEnter(this, event)">
   			          </p>
						 <p>
   			    			<label for="celular">N° celular</label>
   			   			    <input type="text" name="celular" id="celular" required autofocus onkeypress="return pasarConEnter(this, event)">
   			           	 </p><br><br>
              </fieldset>
           
   					 <fieldset>
  						<legend>Datos de Usuario</legend><br>
               				 <p>
   			   					 <label for="usuario">Usuario</label>
   			    				 <input type="text" name="usuario" id="usuario" required autofocus onkeypress="return pasarConEnter(this, event)">
   			 				</p>
								 <p>
   			    					<label for="clave">Clave</label>
   			    					<input type="text" name="clave" id="clave" required autofocus onkeypress="return pasarConEnter(this, event)">
   			 					 </p><br><br>
                    </fieldset>
            
    							<fieldset>
 									 <legend>Nivel de Usuario</legend><br>
              							 <p>
   			   								 <label for="remoto">Remoto</label>
   			    							 <input type="text" name="remoto" id="remoto" required autofocus onkeypress="return pasarConEnter(this, event)"><br>
   			 							</p>
                  							 <p>
   			    								<label for="nivel">Nivel</label>
   			    								<input type="text" name="nivel" id="nivel" required autofocus onkeypress="return pasarConEnter(this, event)">
   			 								</p><br><br>
               				 </fieldset>
              
    <form>

</div>

</body>
</html>