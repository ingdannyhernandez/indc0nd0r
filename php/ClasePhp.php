<?php 
 include_once("coneccion.php");
  //implementamos la clase cola
 class ClasePhp
 	{
 	//constructor 
  	function ClasePhp()
		{
  		}
	function VerificarIngreso($usuario,$clave)
		{
		//creamos el objeto $con a partir de la clase de coneccion
   		$con = new coneccion;
		//usamos el metodo conectar para realizar la conexion
   		$query="SELECT * FROM usuario  WHERE usuario ='".$usuario."' AND clave ='".$clave."'";
		if($con->conectar()==true)
			{
			$result = @mysql_query($query);
			$total = mysql_num_rows($result);
    		if (!$result)
     			return false;
    		else
     			return $total;
   			}
		}
	function menuDinamico($fkusuario)
		{
		//creamos el objeto $con a partir de la clase de coneccion
   		$con = new coneccion;	
		//usamos el metodo conectar para realizar la conexion
   		if($con->conectar()==true)
			{
 			$query="SELECT modulos.id, modulos.descripcion, modulos.direccion, modulos.interfaz, modulos.orden, modulos.superior, usuario_tipousuario.fkusuario
FROM modulos INNER JOIN ((tipo_usuario INNER JOIN usuario_tipousuario ON tipo_usuario.id = usuario_tipousuario.fktipo_usuario) INNER JOIN permisos ON tipo_usuario.id = permisos.fk_tipousuario) ON modulos.id = permisos.fk_tipomodulo
GROUP BY modulos.id, modulos.descripcion, modulos.direccion, modulos.interfaz, modulos.orden, modulos.superior, usuario_tipousuario.fkusuario
HAVING (((usuario_tipousuario.fkusuario)=".$fkusuario."))
ORDER BY modulos.orden;
"; //consulta
			$result = @mysql_query($query); //se evalua la consulta 
			//$DatosDeTabla = mysql_fetch_row($result);//paso los resultados a un vector
				if (!$result)
     			return false;
    		else
     			return $result;
			}	
		}							
	function DatosDeTablaUnFiltro($tabla,$campoFiltrar,$valorFiltrado)
		{
		//creamos el objeto $con a partir de la clase de coneccion
   		$con = new coneccion;	
		//usamos el metodo conectar para realizar la conexion
   		if($con->conectar()==true)
			{
 			$query="SELECT * FROM  ".$tabla."  WHERE ".$campoFiltrar."='".$valorFiltrado."'"; //consulta
			$result = @mysql_query($query); //se evalua la consulta 
			$DatosDeTabla = mysql_fetch_row($result);//paso los resultados a un vector
				if (!$result)
     			return false;
    		else
     			return $DatosDeTabla;
			}	
		}
function listarTabla($tabla, $orden)
		{
		//creamos el objeto $con a partir de la clase de coneccion
   		$con = new coneccion;	
		//usamos el metodo conectar para realizar la conexion
   		if($con->conectar()==true)
			{
    		$query="SELECT * FROM ".$tabla." order by ".$orden.";";  
			
			$result = @mysql_query($query);
    		if (!$result)
     			return false;
    		else
     			return $result;
   			}
		}
		
		function GuardarUsuario($nombres,$apellidos,$correo,$celular,$usuario,$clave,$remoto,$foto)
		{
		//creamos el objeto $con a partir de la clase de coneccion
   		$con = new coneccion;	
		//usamos el metodo conectar para realizar la conexion
   		if($con->conectar()==true)
			{
				$sql= "insert into usuario(id,nombres,apellidos,correo,celular,usuario,clave,remoto,foto) values ('','$nombres','$apellidos','$correo','$celular','$usuario','$clave','$remoto','$foto');";			
		
				$result = @mysql_query($sql); //se evalua la consulta 
			//$DatosDeTabla = mysql_fetch_row($result);//paso los resultados a un vector
				if (!$result)
     			return false;
    		else
     			return $result;
			}	
		}	
		
		
		
		
																																																																																																																																																																			
	}
?>