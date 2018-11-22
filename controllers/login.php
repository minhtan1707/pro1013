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