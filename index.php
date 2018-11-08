<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    $act=isset($_GET['act'])?$_GET['act']:'';
    

        switch($act){
            case 'register':
            require_once 'controllers/register.php';
            break;

            case 'login':
            require_once 'controllers/login.php';
            break;
            
            default:
            require_once 'controllers/index.php';
        }

    

?>