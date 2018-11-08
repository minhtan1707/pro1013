<?php
if(isset($_POST['name'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    require_once './models/member.php';
    insert_member($name,$email,$password);
    header("location: index.php?act=login");
}else{
    require_once './views/register.php';
}

// require_once './models/member.php';
// insert_member('Tan Nguyen','minhtan1707@gmail.com','rasengan');
?>