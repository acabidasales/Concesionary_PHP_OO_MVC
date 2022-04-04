<?php

$path = $_SERVER['DOCUMENT_ROOT'] . '/Concesionary_PHP_OO_MVC/';
    include($path . "model/connect.php");

class DAOShop {
    function shop_list($num_pag, $num_items) {
        $sql = "SELECT * FROM coches ORDER BY count DESC LIMIT $num_pag, $num_items";
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);

        $retrArray = array();
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $retrArray[] = $row;
            }
        }

        return $retrArray;
    }

    function select_one($id){
        $sql = "SELECT * FROM coches WHERE ID='$id'";
        $connection = connect::con();

        $res = mysqli_query($connection, $sql)->fetch_object();
        connect::close($connection);
        return $res;
    }

    function select_one_car($id){
        $sql = "SELECT coches.ID, coches.NBast, coches.Marca, coches.Modelo, coches.Motor, coches.Caballos, coches.Kilometros, coches.Matricula, coches.DatosAd, coches.Categoria, coches.Tipo, coches.precio , imagenes.ruta_imagen FROM coches, imagenes WHERE coches.ID = '$id' AND imagenes.id_coche = '$id' GROUP BY imagenes.ruta_imagen";
        $conexion = connect::con();

        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);

        $retrArray = array();
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $retrArray[] = $row;
            }
        }

        return $retrArray;
    }

    function select_images($id){
        $sql = "SELECT * FROM imagenes WHERE id_coche='$id'";
        $conexion = connect::con();

        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);

        $retrArray = array();
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $retrArray[] = $row;
            }
        }

        return $retrArray;
    }

    function filters($filter, $num_pag, $num_items){
        $consulta = "SELECT * FROM coches c";

        for ($i = 0; $i < count($filter); $i++) {
            if ($i == 0) {
                $consulta.= " WHERE c." . $filter[$i][0] . "=" . "'" . $filter[$i][1] . "'";
            } else {
                $consulta.= " AND c." . $filter[$i][0] . "=" . "'" . $filter[$i][1] . "'";
            }
        }


        $consulta .= " LIMIT $num_pag, $num_items";
        $conexion = connect::con();
        $res = mysqli_query($conexion, $consulta);
        connect::close($conexion);

        $retrArray = array();
        if ($res -> num_rows > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $retrArray[] = $row;
            }
        }
        $i = 0;
        return $retrArray;
    }

    function select_filters(){
        $sql = "SELECT * FROM coches";
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);

        $retrArray = array();
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $retrArray[] = $row;
            }
        }

        return $retrArray;
    }

    function select_marcas(){
        $sql = "SELECT marca.nombre_marca FROM marca";
        $conexion = connect::con();

        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);

        $retrArray = array();
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $retrArray[] = $row;
            }
        }

        return $retrArray;
    }

    function select_combustible(){
        $sql = "SELECT tipo.nombre_tipo FROM tipo";
        $conexion = connect::con();

        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);

        $retrArray = array();
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $retrArray[] = $row;
            }
        }

        return $retrArray;
    }

    function search($search){
        $consulta = "SELECT * FROM coches";
        
        if ( $search[0]['city'][0] != "no") {
            $consulta.= " WHERE city=" . "'" . $search[0]['city'][0] . "'";
            if ($search[1]['Marca'][0] != "no") {
                $consulta.= " AND Marca=" . "'" .$search[1]['Marca'][0]. "'";
                if ($search[2]['Modelo'][0] != "no"){
                    $consulta.= " AND Modelo=" . "'" .$search[2]['Modelo'][0]. "'";
                }
            }
        }else {
            if ($search[1]['Marca'][0] != "no") {
                $consulta.= " WHERE Marca=" . "'" .$search[1]['Marca'][0]. "'";
                if ($search[2]['Modelo'][0] != "no"){
                    $consulta.= " AND Modelo=" . "'" .$search[2]['Modelo'][0]. "'";
                }
            }else {
                if ($search[2]['Modelo'][0] != "no"){
                    $consulta.= " WHERE Modelo=" . "'" .$search[2]['Modelo'][0]. "'";
                }
            }
        }


        $conexion = connect::con();
        $res = mysqli_query($conexion, $consulta);
        connect::close($conexion);

        $retrArray = array();
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $retrArray[] = $row;
            }
        }

        return $retrArray;
    }

    function update_count($id){
        $sql = "UPDATE coches SET count=count + 1 WHERE ID=$id";
        $conexion = connect::con();

        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);

        return $res;
    }

    function order_by($valor){
        $sql = "SELECT * FROM coches ORDER BY $valor DESC";
        $conexion = connect::con();

        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);

        $retrArray = array();
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $retrArray[] = $row;
            }
        }

        return $retrArray;
    }

    function select_count(){
        $sql = "SELECT COUNT(*) AS n_coches FROM coches";
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        return $res;
    }

    function select_count_filters($filter){
        $sql = "SELECT COUNT(*) AS n_coches FROM coches";
        if ($filter[0] != 'no') {
            $sql .= " WHERE Marca = " . "'" . $filter[0] . "'";
            if ( $filter[1] != 'no') {
                $sql .= " AND Tipo = " . "'" . $filter[1] . "'";
            }
        }else {
            $sql .= " WHERE Tipo = " . "'" . $filter[1] . "'";
        }
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        return $res;
    }

    function select_relacionados($marca, $id){
        $sql = "SELECT * FROM coches WHERE Marca LIKE '$marca' AND ID <> '$id'";
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        $retrArray = array();
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $retrArray[] = $row;
            }
        }

        return $retrArray;
    }

    function count_relacionados($marca, $id){
        $sql = "SELECT COUNT(*) AS 'contador' FROM coches WHERE Marca LIKE " . "'" . $marca . "'" . " AND ID <> $id";
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        $retrArray = array();
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $retrArray[] = $row;
            }
        }

        return $retrArray;
    }

    function select_load_likes($username){
        $sql = "SELECT ID_car FROM likes WHERE username='$username'";
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        return $res;
    }

    function select_likes($id_car, $username){
        $sql = "SELECT username, ID_car FROM likes WHERE username='$username' AND ID_car='$id_car'";
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        return $res;
    }

    function insert_likes($id_car, $username){
        $sql = "INSERT INTO likes (username, ID_car) VALUES ('$username','$id_car')";
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        return $res;
    }

    function delete_likes($id_car, $username){
        $sql = "DELETE FROM likes WHERE username='$username' AND ID_car='$id_car'";
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        return $res;
    }
}