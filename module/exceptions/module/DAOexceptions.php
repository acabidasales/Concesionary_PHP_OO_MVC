<?php
    include("model/connect.php");
    
	class DAOexceptions{
		function e404($error){
        	$sql = " INSERT INTO exceptions (TYPE, DESCR, DATE)"
        		. " VALUES ('404', '$error', CURRENT_TIMESTAMP)";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function e503($error){
			$sql = " INSERT INTO exceptions (TYPE, DESCR, DATE)"
        		. " VALUES ('503', '$error', CURRENT_TIMESTAMP)";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;;
		}
		function select_all_exceptions(){
			$sql = "SELECT * FROM exceptions ORDER BY ID ASC";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
			connect::close($conexion);
			// $data = 'hola DAO select_all_cars';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
            return $res;
		}
	}