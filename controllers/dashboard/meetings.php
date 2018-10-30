<?php
$act=$_GET['act']?$_GET['act']:'';
$meeting_id=$_GET['id']?$_GET['id']:'';

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

}

function meetting_list()
{

}

function edit()
{

}

?>