<?php
	class connect{
		public static function con(){
			$host = 'localhost';  
    		$user = "antoni";                     
    		$pass = "root";                             
    		$db = "concesionario";                        
    		$tabla="coches";
    		
    		$conexion = mysqli_connect($host, $user, $pass, $db)or die(mysql_error());
			return $conexion;
		}
		public static function close($conexion){
			mysqli_close($conexion);
		}
	}