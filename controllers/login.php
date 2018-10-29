<?php
$server_name=$_SERVER['SERVER_NAME'];
session_start();
if($_POST['submit'])
{
    require_once './models/members.php';
    $login=login($_POST['email'],$_POST['pass']);
    if($login)
    {
        $_SESSION['user_info']=$login;
        $_SESSION['user_info']['login']=1;
        header("location: http://$server_name/dashboard.php");
    }else{
        header("location: http://$server_name/index.php?act=login");
    }
}else{  
    require_once './views/login.php';
}
?>