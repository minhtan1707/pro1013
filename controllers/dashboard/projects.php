<?php
$act=isset($_GET['act'])?$_GET['act']:'';
$pro_id=isset($_GET['id'])?$_GET['id']:'';
switch($act){
    case 'detail':
    project_detail();
    break;

    case 'add':
    add();
    break;

    case 'edit':
    edit();
    break;

    case 'new-task':
    new_task();
    break;

    case 'new-meeting':
    new_meeting();
    break;

    case 'member-list':
    member_list();
    break;

    case 'meeting-list':
    meeting_list();
    break;

    default:
    home();

}

function home()
{
 
    // print_r($_SESSION['user_info']);
    require_once './models/project.php';
    $projects=get_project_member_id($_SESSION['user_info']['member_id'])!=NULL?get_project_member_id($_SESSION['user_info']['member_id']):'';
    // print_r($projects);
    $title ='Dự án';
    $subview='dashboard/project/home.php';
    require_once './views/dashboard/layout.php';
}

function add()
{
    $title ='Thêm dự án';
    $subview='dashboard/project/add.php';
    require_once './views/dashboard/layout.php';
}

function edit()
{

}

function project_detail()
{
    require_once './models/project.php';
    require_once './models/member.php';
    $project=get_project_id($_GET['id']);
    $team_lead=get_member_id($project['pro_leader']);
    $project_details=get_project_detail_id($_GET['id']);
    
    $title ='Chi tiết dự án';
    $subview='dashboard/project/project-detail.php';
    require_once './views/dashboard/layout.php';
}

function new_task()
{

}

function new_meeting()
{

}

function member_list()
{

}

function meeting_list()
{
    
}
?>