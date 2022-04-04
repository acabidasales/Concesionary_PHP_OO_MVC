<?php
    $path = $_SERVER['DOCUMENT_ROOT'] . '/Concesionary_PHP_OO_MVC/';
    include($path . "model/connect.php");
    
    class DAOSearch{
        function select_marca(){
			$sql = "SELECT DISTINCT Marca FROM coches";
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }

        function select_modelo(){
            $sql = "SELECT DISTINCT Modelo FROM coches";
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }

        function select_marca_modelo($marca){
            $sql = "SELECT DISTINCT Modelo FROM coches WHERE Marca='$marca'";
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }

        function select_auto_marca($auto, $marca){
            $sql = "SELECT city FROM coches WHERE Marca='$marca' AND city LIKE '$auto%'";
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }

        function select_auto_marca_modelo($auto, $marca, $modelo){
            $sql = "SELECT city FROM coches WHERE Marca='$marca' AND Modelo='$modelo' AND city LIKE '$auto%'";
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }

        function select_auto_modelo($auto, $modelo){
            $sql = "SELECT city FROM coches WHERE Modelo='$modelo' AND city LIKE '$auto%'";
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }

        function select_auto($auto){
            $sql = "SELECT city FROM coches WHERE city LIKE '$auto%'";
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }
        
    }

?>