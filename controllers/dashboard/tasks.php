<?php
$act=$_GET['act']?$_GET['act']:'';
$task_id=$_GET['id']?$_GET['id']:'';

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
    echo 'đây là page tasks';
}

function task_list()
{

}

function edit()
{
    
}

?>