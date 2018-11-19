<?php
$act=isset($_GET['act'])?$_GET['act']:'';
$task_id=isset($_GET['id'])?$_GET['id']:'';

switch($act){
    case 'task-list':
    task_list();
    break;

    case 'edit':
    edit();
    break;

    default:
    home();

}

function home()
{
    require_once './models/task.php';
    $tasks=get_task_member_id($_SESSION['user_info']['member_id']);
    $finished_tasks=get_task_member_id($_SESSION['user_info']['member_id'],'1');
    $unfinished_tasks=get_task_member_id($_SESSION['user_info']['member_id'],'0');
    $closed_tasks=get_task_closed($_SESSION['user_info']['member_id'],date('Y-m-d'));
    $title ='Nhiệm vụ';
    $subview='dashboard/task/home.php';
    require_once './views/dashboard/layout.php';
}

function task_list()
{

}

function edit()
{
    
}

?>