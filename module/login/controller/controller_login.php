<?php
    $path = $_SERVER['DOCUMENT_ROOT'] . "/Concesionary_PHP_OO_MVC/";
    include ($path . "module/login/model/DAO_login.php");
    include ($path . "module/login/model/validate_register.php");
    include ($path . "view/inc/JWT.php");
    if (isset($_SESSION["tiempo"])) {  
        $_SESSION["tiempo"] = time(); //Devuelve la fecha actual
    }
    session_start();

    switch($_GET['op']){
        case 'login_view';
            include("module/login/view/login.html");
            break;

        case 'register_view';
            include("module/login/view/register.html");
            break;

        case 'login':
            try{
                $dao = new DAOLogin();
                $rdo = $dao->select_user($_POST['username']);
                $jwt = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/Concesionary_PHP_OO_MVC/jwt.ini");
                $header = $jwt['header'];
                $secret = $jwt['secret'];
                /* $header = '{"typ":"JWT", "alg":"HS256"}';
                $secret = 'maytheforcebewithyou'; */
                $payload = '{"iat":"'.time().'","exp":"'.time() + (60*60).'","name":"'.$rdo["username"].'"}';
                $JWT = new JWT;
                $token = $JWT->encode($header, $payload, $secret);
            }catch (Exception $e){
                echo json_encode("error catch");
                exit;
            }
            if(!$rdo){
                echo json_encode("error rdo");
                exit;
            }else{
                if (password_verify($_POST['password'],$rdo['password'])) {
					$_SESSION['username'] = $rdo["username"];
					$_SESSION['tiempo'] = time();
                    echo json_encode($token);
                    exit;
				}else {
                    echo json_encode("error tocken");
                    exit;
				}
            }
            break;
        
        case 'register':
            $check = validate($_POST['email']);
            if ($check){ 
                try{
                    $dao = new DAOLogin();
                    $rdo = $dao->insert_user($_POST['username'], $_POST['email'], $_POST['password']);
                }catch (Exception $e){
                    echo json_encode("error");
                    exit;
                }
                if(!$rdo){
                    echo json_encode("error");
                    exit;
                }else{
                    echo json_encode("ok");
                    exit;
                }
            }else{ 
                echo json_encode("error");
                exit;
            }
            break;
            
        case 'logout':
            $_SESSION["tiempo"] = "";
            $_SESSION["username"] = "";
            /* setcookie("PHPSESSID", time() - 3600, "/"); */
            session_destroy();


            echo json_encode('Done');
            break;

        case 'data_user':
                $jwt = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/Concesionary_PHP_OO_MVC/jwt.ini");
                $secret = $jwt['secret'];
                $token = $_POST['token'];

                $JWT = new JWT;
                $json = $JWT->decode($token, $secret);  
                $json = json_decode($json, TRUE);

                $dao = new DAOLogin();
                $rdo = $dao->select_data($json['name']);
                echo json_encode($rdo);
                exit;
            break;

        case 'actividad':
                if (!isset($_SESSION["tiempo"])) {  
                        echo "inactivo";
                } else {  
                    if((time() - $_SESSION["tiempo"]) >= 10) {  
                        echo "inactivo"; 
                        exit();
                    }else{
                        echo "activo";
                        exit();
                    }
                }
                break;
    
        case 'controluser':
                if (!isset ($_SESSION['type'])||($_SESSION['type'])!='admin'){
                    if(isset ($_SESSION['type'])&&($_SESSION['type'])!='admin'){
                        echo 'okay';
                        exit();
                    }
                    echo 'no';
                    exit();
                }
                break;
        case 'refresh_token':
                try{
                    $jwt = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/Concesionary_PHP_OO_MVC/jwt.ini");
                    $secret = $jwt['secret'];
                    $token = $_POST['token'];
                    $JWT = new JWT;
                    $json = $JWT->decode($token, $secret);
                    $payload = '{"iat":"'.time().'","exp":"'.time() + (60*60).'","name":"'.$json.'"}';
                    $JWT = new JWT;
                    $token = $JWT->encode($header, $payload, $secret);
                }catch (Exception $e){
                    echo json_encode("error catch");
                    exit;
                }
            break;

        case 'refresh_cookie':
            session_regenerate_id();
            break;
        default;
            include("view/inc/error404.php");
            break;
    }

?>