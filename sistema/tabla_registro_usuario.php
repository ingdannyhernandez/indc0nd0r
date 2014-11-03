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
   			    <input type="text" name="descripcion" id="descripcion" required autofocus onkeypress="return pasarConEnter(this, event)">
   			 </p>
			 	 <p>
   			    	<label for="nombre">Apellidos</label>
   			   		 <input type="text" name="descripcion" id="descripcion" required autofocus onkeypress="return pasarConEnter(this, event)">
   			     </p>
            		 <p>
   			    		<label for="nombre">Foto</label>
   			    		<input type="file" name="descripcion" id="descripcion" required  size="20" autofocus onkeypress="return pasarConEnter(this, event)"><br>
   			 
					</p>
                
       </fieldset>
  
   				 <fieldset>
 					 <legend>Datos de Contacto</legend><br>
           			  <p>
   			    		<label for="nombre">Correo</label>
   			   		    <input type="text" name="descripcion" id="descripcion" required autofocus onkeypress="return pasarConEnter(this, event)">
   			          </p>
						 <p>
   			    			<label for="nombre">N° celular</label>
   			   			    <input type="text" name="descripcion" id="descripcion" required autofocus onkeypress="return pasarConEnter(this, event)">
   			           	 </p>
              </fieldset>
           
   					 <fieldset>
  						<legend>Datos de Usuario</legend><br>
               				 <p>
   			   					 <label for="nombre">Usuario</label>
   			    				 <input type="text" name="descripcion" id="descripcion" required autofocus onkeypress="return pasarConEnter(this, event)">
   			 				</p>
								 <p>
   			    					<label for="nombre">Clave</label>
   			    					<input type="text" name="descripcion" id="descripcion" required autofocus onkeypress="return pasarConEnter(this, event)">
   			 					 </p>
                    </fieldset>
            
    							<fieldset>
 									 <legend>Nivel de Usuario</legend><br>
              							 <p>
   			   								 <label for="nombre">Remoto</label>
   			    							 <input type="text" name="descripcion" id="descripcion" required autofocus onkeypress="return pasarConEnter(this, event)"><br>
   			 							</p>
                  							 <p>
   			    								<label for="nombre">Nivel</label>
   			    								<input type="text" name="descripcion" id="descripcion" required autofocus onkeypress="return pasarConEnter(this, event)">
   			 								</p>
               				 </fieldset>
              
    <form>

</div>

</body>
</html>