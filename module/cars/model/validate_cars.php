<?php

    function validate_NBast($NBast){
        $sql ="SELECT * FROM coches WHERE NBast='$NBast'";

        $conexion = connect::con();
        $resultado = mysqli_query($conexion, $sql);
        $resultado = mysqli_num_rows($resultado);
        connect::close($conexion);
        return $resultado;
    }
    
    function validate_Matricula($Matricula){
        $sql = "SELECT * FROM coches WHERE Matricula='$Matricula'";

        $conexion = connect::con();
        $resultado = mysqli_query($conexion, $sql);
        $resultado = mysqli_num_rows($resultado);
        connect::close($conexion);

        return $resultado;
    }
    
    function validate(){
        // $data = 'hola validate php';
        // die('<script>console.log('.json_encode( $check ) .');</script>');
        // COMPROBAR NO IGUALES
        $check=true;
        
        $v_NBast=$_POST['NBast'];
        $v_Matricula=$_POST['Matricula'];
        
        $r_NBast=validate_NBast($v_NBast);
        $r_Matricula=validate_Matricula($v_Matricula);
        
        if($r_NBast === 1){
            echo '<script language="javascript">
            alert("El numero de bastidor ya existe!");
            </script>';
            $check=false;
        }

        if($r_Matricula === 1){
            echo '<script language="javascript">
            alert("La matricula ya existe!");
            </script>';
            $check=false;
        }
        return $check;
    }
    
?>