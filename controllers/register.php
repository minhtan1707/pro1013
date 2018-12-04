<?php
if(isset($_POST['name'])){
    $name= check($_POST['name']);
    $email= check($_POST['email']);
    $password= check($_POST['password']);
    $pass_hash= hash_password($password,$email,$name);
    require_once './models/member.php';
    // echo $pass_hash;
    // print_r(preg_split("/\./",$pass_hash));
    // echo " ".$hash;
    //echo $email;
    $check_email=get_member_email($email);
    if($check_email)
    {
        header("location: index.php?act=register");
    }else{
        $_SESSION['alert']['message']="Đăng ký thành công, bạn đã có thể đăng nhập";
        $_SESSION['alert']['class']='success';
        insert_member($name,$email,$pass_hash);
        header("location: index.php?act=login");
    }
}else{
    require_once './views/register.php';
}

// require_once './models/member.php';
// insert_member('Tan Nguyen','minhtan1707@gmail.com','rasengan');
?>
