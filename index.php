<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once 'library/security.php';
$url=isset($_GET['url'])?$_GET['url']:'';
    
switch($url){
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