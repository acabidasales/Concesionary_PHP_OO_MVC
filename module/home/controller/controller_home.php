<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/Concesionary_PHP_OO_MVC/";
include ($path . 'module/home/model/DAOhome.php');
if (isset($_SESSION["tiempo"])) {  
    $_SESSION["tiempo"] = time(); //Devuelve la fecha actual
}

/* die('<script>console.log('.json_encode( "PNjadgnka" ) .');</script>'); */
switch ($_GET['op']) {
    case 'list';
        include ('module/home/view/home.html');
        break;
    case 'Home_Marcas';

        $daohome = new DAOHome();
        $rdo = $daohome->home_slide_marca();
        echo json_encode($rdo);
        
        break;

    case 'Home_Categorias';

        $daohome = new DAOHome();
        $rdo = $daohome->home_slide_categoria();
        echo json_encode($rdo);
        
        break;

    case 'Home_Tipos';

        $daohome = new DAOHome();
        $rdo = $daohome->home_slide_tipo();
        echo json_encode($rdo);
        
        break;

    default;
        $callback = 'index.php?page=exceptions&op=503&error=Error_en_el_controller_home';
        die('<script>window.location.href="'.$callback .'";</script>');
        break;
}