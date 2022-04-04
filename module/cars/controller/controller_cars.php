<?php
    $path = $_SERVER['DOCUMENT_ROOT'] . '/Concesionary_PHP_OO_MVC/';
    include($path . "module/cars/model/DAOCars.php");
    
    //session_start();
    
    switch($_GET['op']){
        case 'list';
            // $data = 'hola crtl car';
            // die('<script>console.log('.json_encode( $data ) .');</script>');

            try{
                $daocars = new DAOcars();
            	$rdo = $daocars->select_all_cars();
            }catch (Exception $e){
                $callback = 'index.php?page=exceptions&op=503&error=Error_en_el_list';
                //$callback = 'index.php?module=exception&op=503&id=list_dao_exception';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=exceptions&op=503&error=Error_en_el_SQL';
                //$callback = 'index.php?module=exception&op=503&id=list_rdo_exception';
			    die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/cars/view/list.php");
    		}
            break;
            
        case 'create';
            // $data = 'hola crtl car create';
            // die('<script>console.log('.json_encode( $data ) .');</script>');

            include("module/cars/model/validate_cars.php");
            
            
            $check = true;
            
            if ($_POST){
                // $data = 'hola create post car';
                // die('<script>console.log('.json_encode( $data ) .');</script>');
                $check = validate();
                if ($check){
                    $_SESSION['ID']=$_POST;
                    try{
                        $daocars = new DAOcars();
    		            $rdo = $daocars->insert_cars($_POST);
                    }catch (Exception $e){
                        $callback = 'index.php?page=exceptions&op=503&error=Error_en_el_insert';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){
            			echo '<script language="javascript">alert("Registrado en la base de datos correctamente")</script>';
            			$callback = 'index.php?page=controller_cars&op=list';
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
            			$callback = 'index.php?page=exceptions&op=503&error=Error_en_el_SQL';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }
            }
            include("module/cars/view/create.php");
            break;
            
        case 'update';
            include("module/cars/model/validate_cars.php");
            
            $check = true;
            
            if ($_POST){
                //$check=validate();
                if ($check){
                    $_SESSION['ID']=$_POST;
                    try{
                        $daocars = new DAOcars();
    		            $rdo = $daocars->update_cars($_POST);
                    }catch (Exception $e){
                        $callback = 'index.php?page=exceptions&op=503&error=Error_en_el_update';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){
            			echo '<script language="javascript">alert("Actualizado en la base de datos correctamente")</script>';
            			$callback = 'index.php?page=controller_cars&op=list';
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
            			$callback = 'index.php?page=exceptions&op=503&error=Error_en_el_SQL';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }
            }
            
            try{
                $daocars = new DAOcars();
            	$rdo = $daocars->select_cars($_GET['ID']);
            	$car=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=exceptions&op=503&error=Error_en_el_selectcars';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=exceptions&op=503&error=Error_en_el_SQL';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
        	    include("module/cars/view/update.php");
    		}
            break;
            
        case 'read';
            // $data = 'hola crtl car read';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
            try{
                $daocars = new DAOcars();
            	$rdo = $daocars->select_cars($_GET['ID']);
            	$car=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=exceptions&op=503&error=Error_en_el_selectcars';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            if(!$rdo){
    			$callback = 'index.php?page=exceptions&op=503&error=Error_en_el_SQL';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/cars/view/read.php");
    		}
            break;
            
        case 'delete';
            if (isset($_POST['delete'])){
                try{
                    $daocars = new DAOcars();
                	$rdo = $daocars->delete_cars($_GET['ID']);
                }catch (Exception $e){
                    $callback = 'index.php?page=exceptions&op=503&error=Error_en_el_delete';
    			    die('<script>window.location.href="'.$callback .'";</script>');
                }
            	
            	if($rdo){
        			echo '<script language="javascript">alert("Borrado en la base de datos correctamente")</script>';
        			$callback = 'index.php?page=controller_cars&op=list';
    			    die('<script>window.location.href="'.$callback .'";</script>');
        		}else{
        			$callback = 'index.php?page=exceptions&op=503&error=Error_en_el_SQL';
			        die('<script>window.location.href="'.$callback .'";</script>');
        		}
            }
            
            include("module/cars/view/delete.php");
            break;
            
            case 'dummies';
            if (isset($_POST['dummies'])){
                try{
                    $daocars = new DAOcars();
                	$rdo = $daocars->load_dummies();
                }catch (Exception $e){
                    $callback = 'index.php?page=exceptions&op=503&error=Error_en_el_load_dummies';
    			    die('<script>window.location.href="'.$callback .'";</script>');
                }
            	
            	if($rdo){
        			echo '<script language="javascript">alert("Datos cargados y eliminados correctamente")</script>';
        			$callback = 'index.php?page=controller_cars&op=list';
    			    die('<script>window.location.href="'.$callback .'";</script>');
        		}else{
        			$callback = 'index.php?page=exceptions&op=503&error=Error_en_el_SQL';
			        die('<script>window.location.href="'.$callback .'";</script>');
        		}
            }

            include("module/cars/view/dummies.php");
            break;

            case 'dummies2';
            if (isset($_POST['dummies2'])){
                try{
                    $daocars = new DAOcars();
                	$rdo = $daocars->load_dummiesnodelete();
                }catch (Exception $e){
                    $callback = 'index.php?page=exceptions&op=503&error=Error_en_el_dummies2';
    			    die('<script>window.location.href="'.$callback .'";</script>');
                }
            	
            	if($rdo){
        			echo '<script language="javascript">alert("Datos cargados correctamente")</script>';
        			$callback = 'index.php?page=controller_cars&op=list';
    			    die('<script>window.location.href="'.$callback .'";</script>');
        		}else{
        			$callback = 'index.php?page=exceptions&op=503&error=Error_en_el_SQL';
			        die('<script>window.location.href="'.$callback .'";</script>');
        		}
            }
            
            include("module/cars/view/dummies2.php");
            break;

        case 'read_modal':

            try{
                $daocars = new DAOCars();
                $rdo = $daocars->select_cars($_GET['ID']);
            }catch (Exception $e){
                echo json_encode("error");
                exit;
            }
            if(!$rdo){
                echo json_encode("error");
                exit;
            }else{
                $car=get_object_vars($rdo);
                echo json_encode($car);
                //echo json_encode("error");
                exit;
            }
            break;
            
        default;
            include("view/inc/error404.php");
            break;
    }