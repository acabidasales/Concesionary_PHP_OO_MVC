<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/Concesionary_PHP_OO_MVC/";
include ($path . 'module/shop/model/DAOshop.php');
include ($path . "view/inc/JWT.php");
include ($path . "model/middleware_auth.php");
if (isset($_SESSION["tiempo"])) {  
    $_SESSION["tiempo"] = time(); //Devuelve la fecha actual
}

switch ($_GET['op']) {
    case 'list';
        include ('module/shop/view/shop.html');
        break;
    case 'Shop_List';
        try {
            $daoshop = new DAOShop();
            $rdo = $daoshop->shop_list($_POST['num_pag'], $_POST['num_item']);
            echo json_encode($rdo);
        }catch(Exception $e){
            echo  json_encode($error);
        }
        break;

    case 'Select_One';
        try {
            $daoshop = new DAOShop();
            $rdo = $daoshop->select_one_car($_GET['ID']);
            echo json_encode($rdo);
        }catch(Exception $e){
            echo json_encode($error);
        }
        break;

    case 'Select_Details';

        try {
            $daoshop = new DAOShop();
            $car = $daoshop->select_one($_GET['ID']);
        }catch(Exception $e){
            echo json_encode($error);
        }

        try {
            $daoshop2 = new DAOShop();
            $img = $daoshop->select_images($_GET['ID']);
        }catch(Exception $e){
            echo json_encode($error);
        }

        if(!$car&&!$img) {
            echo json_encode("error");
        }else{
            $res = array();
            $res[0] = $car;
            $res[1][] = $img;
            echo json_encode($res);
        }
        break;

    case 'filter';
        $daoshop = new DAOShop();
        $rdo = $daoshop->filters($_POST['filter'], $_POST['num_pag'], $_POST['num_item']);
        if (!empty($rdo)) {
            echo json_encode($rdo);
        } else {
            echo json_encode("error");
        }
            
        break;
    case 'print_filter';
        try {
            $daoshop = new DAOShop();
            $marcas = $daoshop->select_marcas();
        }catch(Exception $e){
            echo json_encode($e);
        }

        try {
            $daoshop2 = new DAOShop();
            $combustible = $daoshop->select_combustible();
        }catch(Exception $e){
            echo json_encode($e);
        }

        if(!$marcas&&!$combustible) {
            echo json_encode("error");
        }else{
            $res2 = array();
            $res2[0] = $marcas;
            $res2[1][] = $combustible;
            echo json_encode($res2);
        }
        break;

    case 'search';
        /* $res1 = array();
        $res1[0] = $_POST['data_search'][0]['city'][0];
        $res1[1] = $_POST['data_search'][1]['Marca'][0];
        $res1[2] = $_POST['data_search'][2]['Modelo'][0]; */
        $daoshop = new DAOShop();
        $rdo = $daoshop->search($_POST['data_search']);
        if (!empty($rdo)) {
            echo json_encode($rdo);
        } else {
            echo json_encode("error");
        }
            
        break;

    case 'update_count';
        $daoshop = new DAOShop();
        $rdo = $daoshop->update_count($_GET['ID']);
        if (!empty($rdo)) {
            echo json_encode($rdo);
        } else {
            echo json_encode("error");
        }
    break;
    case 'order_by';
        $daoshop = new DAOShop();
        $rdo = $daoshop->order_by($_GET['Orden']);
        if (!empty($rdo)) {
            echo json_encode($rdo);
        } else {
            echo json_encode("error");
        }
            
    break;
    case 'count';    
            try{
                $daoshop = new DAOShop();
                $rdo = $daoshop->select_count();
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

    case 'count_filters';    
            try{
                $daoshop = new DAOShop();
                $rdo = $daoshop->select_count_filters($_GET['datos']);
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
    case 'more_related';
            $daoshop = new DAOShop();
            $rdo = $daoshop->select_relacionados($_POST['related'], $_POST['no_repeat'], $_POST['loadeds'], $_POST['items']);
            echo json_encode($rdo);
            break;

    case 'count_related';
            $daoshop = new DAOShop();
            $rdo = $daoshop->count_relacionados($_POST['related'], $_POST['no_repeat']);
            echo json_encode($rdo);
            break;

    case 'load_likes';    
            try{
                $json = decode::decode_user();

                $dao = new DAOShop();
                $rdo = $dao->select_load_likes($json['name']);

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

    case 'control_likes';    
            try{
                $json = decode::decode_user();

                $dao = new DAOShop();
                $rdo = $dao->select_likes($_GET['id'], $json['name']);
                

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
                if(count($dinfo) === 0){
                    $dao = new DAOShop();
                    $rdo = $dao->insert_likes($_GET['id'], $json['name']);
                    echo json_encode("0");
                }else{
                    $dao = new DAOShop();
                    $rdo = $dao->delete_likes($_GET['id'], $json['name']);
                    echo json_encode("1");
                }
            }
            break;
    default;
        $callback = 'index.php?page=exceptions&op=503&error=Error_en_el_controller_shop';
        die('<script>window.location.href="'.$callback .'";</script>');
        break;
}