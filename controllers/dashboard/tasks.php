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