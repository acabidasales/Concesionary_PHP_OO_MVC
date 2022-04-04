<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/Concesionary_PHP_OO_MVC/";
include ($path . 'module/search/model/DAOsearch.php');

/* die('<script>console.log('.json_encode( "PNjadgnka" ) .');</script>'); */
switch($_GET['op']){
    case 'marca':
        try{
            $dao = new DAOSearch();
            $rdo = $dao->select_marca();
        }catch (Exception $e){
            echo json_encode("error");
            exit;
        }
        if(!$rdo){
            echo json_encode("error");
            exit;
        }else{
            $dinfo = array();
            foreach ($rdo as $row) {
                array_push($dinfo, $row);
            }
            echo json_encode($dinfo);
        }
        break;

    case 'modelo':
        try{
            $dao = new DAOSearch();
            if(empty($_POST['Marca'])){
                $rdo = $dao->select_modelo();
            }else{
                $rdo = $dao->select_marca_modelo($_POST['Marca']);
            }
        }catch (Exception $e){
            echo json_encode("error");
            exit;
        }
        if(!$rdo){
            echo json_encode("error");
            exit;
        }else{
            $dinfo = array();
            foreach ($rdo as $row) {
                array_push($dinfo, $row);
            }
            echo json_encode($dinfo);
        }
        break; 

    case 'autocomplete':
        try{
            $dao = new DAOSearch();
            if (!empty($_POST['Marca']) && empty($_POST['Modelo'])){
                $rdo = $dao->select_auto_marca($_POST['city'], $_POST['Marca']);
            }else if(!empty($_POST['Marca']) && !empty($_POST['Modelo'])){
                $rdo = $dao->select_auto_marca_modelo($_POST['city'], $_POST['Marca'], $_POST['Modelo']);
            }else if(empty($_POST['Marca']) && !empty($_POST['Modelo'])){
                $rdo = $dao->select_auto_modelo($_POST['Modelo'], $_POST['city']);
            }else {
                $rdo = $dao->select_auto($_POST['city']);
            }
        }catch (Exception $e){
            echo json_encode("error");
            exit;
        }
        if(!$rdo){
            echo json_encode("error");
            exit;
        }else{
            $dinfo = array();
            foreach ($rdo as $row) {
                array_push($dinfo, $row);
            }
            echo json_encode($dinfo);
        }
        break; 
    
    default:
        include("view/inc/error/error404.php");
        break;
}