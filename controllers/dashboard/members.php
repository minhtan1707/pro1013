<?php
$act=$_GET['act']?$_GET['act']:'';
$member_id=$_GET['id']?$_GET['id']:'';

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
    echo 'đây là page members';
}

function edit()
{

}

function logout()
{
    session_start();
    unset($_SESSION['user_info']);
    header("location: dashboard.php");
}
?>