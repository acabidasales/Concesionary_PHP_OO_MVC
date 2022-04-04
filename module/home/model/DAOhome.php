<?php

$path = $_SERVER['DOCUMENT_ROOT'] . '/Concesionary_PHP_OO_MVC/';
    include($path . "model/connect.php");

class DAOHome {
    function selectMultiple($select) {
        $conexion = connect::con();
        $res = $select;
        $retrArray = array();
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $retrArray[] = $row;
            }
        }
        connect::close($conexion);
        return $retrArray;
    }

    function selectBoolean($select) {
        $conexion = connect::con();
        $res = $select;
        if ($res) {
            connect::close($conexion);
            return true;
        }else {
            connect::close($conexion);
            return false;
        }
    }
    function home_slide_general(){
        $selSlide = $DAOHome -> selectMultiple("SELECT ID, Marca, Modelo, Matricula, IMG FROM Coches ORDER BY ID DESC LIMIT 5");
        if (!empty($selSlide)) {
            return $selSlide;
        }else {
            return $error;
        }// end_else
    }

    function home_slide_marca() {
        $sql = "SELECT * FROM marca LIMIT 10";
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

    function home_slide_tipo() {
        $sql = "SELECT * FROM tipo ORDER BY emision LIMIT 10";
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

    function home_slide_categoria() {
        $sql = "SELECT * FROM categoria LIMIT 10";
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
}