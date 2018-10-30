<?php
$server_name=$_SERVER['SERVER_NAME'];
session_start();
if($_POST['submit'])
{
    require_once './models/members.php';
    //kiểm tra thông tin login
    
    $login=login($_POST['email'],$_POST['pass']);
    if($login)
    {
        //nếu đúng thông tin cho $_SESSION['user_info']['login'] = 1

        $_SESSION['user_info']=$login;
        $_SESSION['user_info']['login']=1;
        header("location: http://$server_name/dashboard.php");
    }else{
        //sai thông tin trả lại về trang login

        header("location: http://$server_name/index.php?act=login");
    }
}else{  
    require_once './views/login.php';
}
?>