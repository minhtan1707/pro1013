<?php
$act=$_GET['act']?$_GET['act']:'';

switch($act){
    case 'edit':
    edit();
    break;

    case 'logout':
    logout();
    break;
    
    default:
    home();

}

function home()
{

}

function edit()
{

}

function logout()
{
    
}
?>