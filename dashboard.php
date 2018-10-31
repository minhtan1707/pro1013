<?php
session_start();
$server_name=$_SERVER['SERVER_NAME'];
//kiểm tra đã login chưa
// if(!isset($_SESSION['user_info']['login']) || $_SESSION['user_info']['login'] == 0)
// {

//     //$_SESSION['user_info']['login'] == 0 là chưa login, trả về trang login

//     header("location: http://$server_name/dashboard.php");
// }else{

    //$_SESSION['user_info']['login'] == 1 là đã login, vào dashboard

        $page=$_GET['page']?$_GET['page']:'';
            switch($page){
        
                case 'tasks':
                require_once 'controllers/dashboard/tasks.php';
                break;
    
                case 'meetings':
                require_once 'controllers/dashboard/meetings.php';
                break;
    
                case 'projects':
                require_once 'controllers/dashboard/projects.php';
                break;

                case 'members':
                require_once 'controllers/dashboard/members.php';
                
                default:
                require_once 'controllers/dashboard/home.php';
            }

// }

?>