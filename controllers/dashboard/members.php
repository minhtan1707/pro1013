<?php
$act=isset($_GET['act'])?$_GET['act']:'';
$member_id=isset($_GET['id'])?$_GET['id']:'';

switch($act){
    case 'edit':
    edit();
    break;

    case'member-detail':
    member_detail();
    break;

    case 'logout':
    logout();
    break;
    
    default:
    home();

}

function home()
{
    require_once './models/project.php';
    require_once './models/task.php';
    $projects=get_project_member_id($_SESSION['user_info']['member_id'],$_SESSION['user_info']['member_id']);
    $tasks=get_task_member_id($_SESSION['user_info']['member_id'],'0');
    $title ='Thông tin tài khoản';
    $subview='dashboard/member/home.php';
    require_once './views/dashboard/layout.php';
}

function edit()
{
    require_once './models/member.php';
    if(isset($_POST['submit'])){
        if($_FILES["profile_picture"]["name"]!="")
        {
            $image=$_FILES["profile_picture"]["name"]; 
            $folder="./static/images/users/";
            move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $folder.$image);
        }else{
            $image=$_SESSION['user_info']['profile_picture'];
        }
        if($_POST['pass']==""){
            $pass=$_SESSION['user_info']['pass'];
        }else{
            $pass=$_POST['pass'];
        }
        update_member($_SESSION['user_info']['member_id'],$_POST['member_name'],$_POST['email'],$pass,$image,$_POST['about'],$_POST['title'],$_POST['phone']);
        $_SESSION['user_info']=$_POST;
        $_SESSION['user_info']['login']=1;
        $_SESSION['user_info']['profile_picture']=$image;
        header('Location:dashboard.php?page=members');
    }else{
        $user_info=get_member_id($_SESSION['user_info']['member_id']);
        $title ='Chỉnh sửa tài khoản';
        $subview='dashboard/member/edit.php';
        require_once './views/dashboard/layout.php';
    }

}

function logout()
{
    session_start();
    unset($_SESSION['user_info']);
    header("location: dashboard.php");
}
?>