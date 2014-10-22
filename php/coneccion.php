<?php 
 //esta clase nos permitira conectarnos a la base de datos
 class coneccion
 {
  var $conect;
  //Método constructor
  function coneccion()
  	{
  	}
  //Método que se encargará de la verificar y realizar
  //la conexión
  function conectar() 
  	{
   	$hostname_conexion = "localhost";
	$database_conexion = "procon";
	$username_conexion = "root";
	$password_conexion = "";
		
   	if(!($con=@mysql_connect($hostname_conexion,$username_conexion,$password_conexion)))
		{
    	echo"Error al conectar a la base de datos"; 
    	exit();
   		}
   	if (!@mysql_select_db($database_conexion,$con)) 
		{
    	echo "Error al seleccionar la base de datos"; 
    	exit();
   		}
   $this->conect=$con;
   return true; 
  	}


	}

?>