<?php
$act=isset($_GET['act'])?$_GET['act']:'';
$meeting_id=isset($_GET['id'])?$_GET['id']:'';

switch($act){
    case 'meeting-list':
    meetting_list();
    break;

    case 'edit':
    edit();
    break;

    default:
    home();
}

function home()
{
    require_once './models/meeting.php';
    $meetings=get_meeting($_SESSION['user_info']['member_id']);
    $title ='Cuộc họp';
    $subview='dashboard/meeting/home.php';
    require_once './views/dashboard/layout.php';
}

function meetting_list()
{

}

function edit()
{

}

?>