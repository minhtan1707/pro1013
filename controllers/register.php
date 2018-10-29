<?php
$server_name=$_SERVER['SERVER_NAME'];
if($_POST['submit']){
    require_once './models/members.php';
    insert_member($_POST['name'],$_POST['email'],$_POST['password']);
    header("location: http://$server_name/index.php?act=login");
}else{
    require_once './views/register.php';
}
?>