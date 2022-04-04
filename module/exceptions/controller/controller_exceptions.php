<?php
    include ("module/exceptions/module/DAOexceptions.php");
    
    switch($_GET['op']){
        case '404';
                $daoexceptions = new DAOexceptions();
            	$rdo = $daoexceptions->e404($_GET['error']);
                include("module/exceptions/view/404.php");
            break;
            
        case '503';
                $daoexceptions = new DAOexceptions();
                $rdo = $daoexceptions->e503($_GET['error']);
                include("module/exceptions/view/503.php");
            break;
        
        case 'list';

            try{
                $daoexceptions = new DAOexceptions();
            	$rdo = $daoexceptions->select_all_exceptions();
            }catch (Exception $e){
                $callback = 'index.php?page=exceptions&op=503&error=Error_en_el_list_errores';
                //$callback = 'index.php?module=exception&op=503&id=list_dao_exception';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=exceptions&op=503&error=Error_en_el_SQL';
			    die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/exceptions/view/list.php");
    		}
            break;
            
        default;
            include("view/404.php");
            break;
    }