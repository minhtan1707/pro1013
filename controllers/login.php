<?php
$server_name=$_SERVER['SERVER_NAME'];
session_start();
if($_SESSION['user_info']['login'] == 1)
{
    header("location: dashboard.php");
}
else{
    if($_POST['email'])
    {
        require_once './models/member.php';
        //kiểm tra thông tin login
        $email=$_POST['email'];
        $password=$_POST['password'];
        $login=login($email,$password);
        // print_r($login);
        if($login)
        {
            //nếu đúng thông tin cho $_SESSION['user_info']['login'] = 1
            
            $_SESSION['user_info']=$login;
            $_SESSION['user_info']['login']=1;
            header("location: dashboard.php");
        }else{
            //sai thông tin trả lại về trang login
    
            header("location: index.php?act=login");
        }
    }else{  
        require_once './views/login.php';
    }
}

?>