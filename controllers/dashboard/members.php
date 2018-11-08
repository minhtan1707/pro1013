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
    $title ='Thông tin tài khoản';
    $subview='dashboard/member/home.php';
    require_once './views/dashboard/layout.php';
}

function edit()
{
    $title ='Chỉnh sửa tài khoản';
    $subview='dashboard/member/edit.php';
    require_once './views/dashboard/layout.php';
}

function logout()
{
    session_start();
    unset($_SESSION['user_info']);
    header("location: dashboard.php");
}
?>