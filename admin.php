<?php
session_start();
$server_name=$_SERVER['SERVER_NAME'];
//kiểm tra đã login chưa
if($_SESSION['user_info']['admin'] != 1)
{

    //$_SESSION['user_info']['login'] == 0 là chưa login, trả về trang login

    header("location: http://$server_name");
}else{

    //$_SESSION['user_info']['login'] == 1 là đã login, vào dashboard

    if(isset($_GET['page'])){
        $page=$_GET['page'];
            switch($page){
        
                case 'tasks':
                require_once 'controllers/admin/tasks.php';
                break;
    
                case 'meetings':
                require_once 'controllers/admin/meetings.php';
                break;
    
                case 'project':
                require_once 'controllers/admin/projects.php';
                break;

                case 'members':
                require_once 'controllers/admin/members.php';

            }
    }else{
        require_once 'controllers/admin/home.php';
    }
}

?>