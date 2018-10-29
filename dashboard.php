<?php
session_start();
if(!isset($_SESSION['login']) || $_SESSION['login'] == 0)
{
    require_once 'controllers/login.php';
}else{
    if(isset($_GET['page'])){
        $page=$_GET['page'];
        
    
            switch($page){
        
                case 'create-task':
                require_once 'controllers/dashboard/create-task.php';
                break;
        
                case 'tasks':
                require_once 'controllers/dashboard/tasks.php';
                break;
    
                case 'edit-profile':
                require_once 'controllers/dashboard/edit-profile.php';
                break;
    
                case 'new-project':
                require_once 'controllers/dashboard/new-project.php';
                break;

                default:
                require_once '404.php';
            }
    }else{
        require_once 'controllers/dashboard/home.php';
    }
}

?>