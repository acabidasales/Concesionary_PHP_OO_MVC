<?php
	$path = $_SERVER['DOCUMENT_ROOT'] . '/Concesionary_PHP_OO_MVC/';
    include($path . "model/connect.php");
    
	class DAOcars{
		function insert_cars($datos){
			$NBast=$datos['NBast'];
        	$Marca=$datos['Marca'];
        	$Modelo=$datos['Modelo'];
        	$Motor=$datos['Motor'];
        	$TComb=$datos['TComb'];
        	$Caballos=$datos['Caballos'];
        	$Kilometros=$datos['Kilometros'];
        	$Matricula=$datos['Matricula'];
			$DatosAd=$datos['DatosAd'];
			$fecha=$datos['fecha'];
			foreach ($datos['EXTRA'] as $val) {
        	    $EXTRA=$EXTRA."$val:";
        	}
			$IMG=$datos['IMG'];
        	$sql = " INSERT INTO coches (NBast, Marca, Modelo, Motor, TComb, Caballos, Kilometros, Matricula, DatosAd, fecha, EXTRA, IMG)"
        		. " VALUES ('$NBast', '$Marca', '$Modelo', '$Motor', '$TComb', '$Caballos', '$Kilometros', '$Matricula', '$DatosAd', '$fecha', '$EXTRA', '$IMG')";
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function select_all_cars(){
			$sql = "SELECT * FROM coches ORDER BY ID ASC";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
			connect::close($conexion);
			// $data = 'hola DAO select_all_cars';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
            return $res;
		}
		
		function select_cars($ID){
			$sql = "SELECT * FROM coches WHERE ID='$ID'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
		
		function update_cars($datos){
			$ID=$datos['ID'];
        	$Marca=$datos['Marca'];
        	$Modelo=$datos['Modelo'];
        	$Motor=$datos['Motor'];
        	$TComb=$datos['TComb'];
        	$Caballos=$datos['Caballos'];
        	$Kilometros=$datos['Kilometros'];
			$DatosAd=$datos['DatosAd'];
			$fecha=$datos['fecha'];
			foreach ($datos['EXTRA'] as $val) {
        	    $EXTRA=$EXTRA."$val:";
        	}
			$IMG=$datos['IMG'];
        	
        	$sql = " UPDATE coches SET ID='$ID', Marca='$Marca', Modelo='$Modelo', Motor='$Motor', TComb='$TComb', Caballos='$Caballos', Kilometros='$Kilometros',"
        		. " DatosAd='$DatosAd', fecha='$fecha', EXTRA='$EXTRA', IMG='$IMG' WHERE ID='$ID'";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function delete_cars($ID){
			$sql = "DELETE FROM coches WHERE ID='$ID'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
		function load_dummies() {
			//IDEA: dummies que no eliminen
			$alter = "DELETE FROM coches";
			$delete = "ALTER TABLE coches AUTO_INCREMENT = 1";
			$sql = "INSERT INTO coches (NBast, Marca, Modelo, Motor, TComb, Caballos, Kilometros, Matricula, DatosAd, fecha, EXTRA, IMG)" . "VALUES 
					( '123123124', 'Mercedes', 'GT5', 'Mercedes V4', 'Gasolina', '450', '1000', '9990 HFH', 'A', '13/06/2021', 'Cristales Tintados:Papeleo en regla', 'mercedesgt5.jpeg'),
					( '123456764', 'Alpine', 'A12', 'Renaul12', 'Electrico', '450', '123', '1256 HYA', 'A', '13/06/2021', 'Cristales Tintados:Papeleo en regla', 'alpinea12.jpg'),
					( '432342342', 'Toyota', 'Supra GT5', 'Toyota V4', 'Gasolina', '760', '12000', '4580 GFR', 'A', '13/06/2021', 'Cristales Tintados:Papeleo en regla', 'toyotasupragt5.jpg');";

			$conexion = connect::con();
			$res = mysqli_query($conexion, $alter);
			$res = mysqli_query($conexion, $delete);
			$res = mysqli_query($conexion, $sql);
			connect::close($conexion);
			return $res;
	}
	function load_dummiesnodelete() {
		//$alter = "DELETE FROM coches";
		//$delete = "ALTER TABLE coches AUTO_INCREMENT = 1";
		$sql = "INSERT INTO coches (NBast, Marca, Modelo, Motor, TComb, Caballos, Kilometros, Matricula, DatosAd, fecha, EXTRA, IMG)" . "VALUES 
					( '123123124', 'Mercedes', 'GT5', 'Mercedes V4', 'Gasolina', '450', '1000', '9990 HFH', 'A', '13/06/2021', 'Cristales Tintados:Papeleo en regla', 'mercedesgt5.jpeg'),
					( '123456764', 'Alpine', 'A12', 'Renaul12', 'Electrico', '450', '123', '1256 HYA', 'A', '13/06/2021', 'Cristales Tintados:Papeleo en regla', 'alpinea12.jpg'),
					( '432342342', 'Toyota', 'Supra GT5', 'Toyota V4', 'Gasolina', '760', '12000', '4580 GFR', 'A', '13/06/2021', 'Cristales Tintados:Papeleo en regla', 'toyotasupragt5.jpg');";

		$conexion = connect::con();
		/* $res = mysqli_query($conexion, $alter);
		$res = mysqli_query($conexion, $delete); */
		$res = mysqli_query($conexion, $sql);
		connect::close($conexion);
		return $res;
}
	}