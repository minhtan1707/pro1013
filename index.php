<?php
if(isset($_GET['act'])){
    $act=$_GET['act'];
    

        switch($act){
            case 'register':
            require_once 'controllers/register.php';
            break;

            case 'login':
            require_once 'controllers/login.php';
            break;
    
        }
}else{
    require_once 'controllers/index.php';
}
?>