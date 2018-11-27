<?php
$server_name=$_SERVER['SERVER_NAME'];
session_start();
if(isset($_SESSION['user_info']) && $_SESSION['user_info']['login'] == 1)
{
    header("location: dashboard.php");
}
else{
    if(isset($_POST['email']))
    {
        require_once './models/member.php';
        require_once './models/announcement.php';
        require_once './models/task.php';
        //kiểm tra thông tin login
        $email=check($_POST['email']);
        $password=check($_POST['password']);
        $login=get_member_email($email);
        $password=substr_replace($password,$email,0,3);
        $password=substr_replace($password,$login['member_name'],-2);
        $hash=md5($password);
        $pass=preg_split("/\./",$login['pass']);
        if($pass[2]==$hash)
        {
            //nếu đúng thông tin cho $_SESSION['user_info']['login'] = 1
            
            $_SESSION['user_info']=$login;
            $_SESSION['user_info']['login']=1;

            $announcements=get_task_member_id($_SESSION['user_info']['member_id']);
            foreach($announcements as $announcement)
            {
                $task_created_at=strtotime($announcement['task_created_at']);
                $last_logged_out=strtotime($_SESSION['user_info']['last_logged_out']);
                if($task_created_at > $last_logged_out){
                    $_SESSION['announcement'][$announcement['task_id']]=$announcement;
                }
            }
            header("location: dashboard.php");
        }else{
            //sai thông tin trả lại về trang login
    
            header("location: index.php?act=login");
        }

        // require_once './models/member.php';
        // //kiểm tra thông tin login
        // $email=check($_POST['email']);
        // $password=($_POST['password']);
        // $login=login($email,$password);
        // // print_r($login);
        // if($login)
        // {
        //     //nếu đúng thông tin cho $_SESSION['user_info']['login'] = 1
            
        //     $_SESSION['user_info']=$login;
        //     $_SESSION['user_info']['login']=1;
        //     header("location: dashboard.php");
        // }else{
        //     //sai thông tin trả lại về trang login
    
        //     header("location: index.php?act=login");
        // }
    }else{  
        require_once './views/login.php';
    }
}

?>