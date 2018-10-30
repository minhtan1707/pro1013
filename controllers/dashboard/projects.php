<?php
$act=$_GET['act']?$_GET['act']:'';
$pro_id=$_GET['id']?$_GET['id']:'';

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

}

function add()
{

}

function edit()
{

}

function project_detail()
{

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