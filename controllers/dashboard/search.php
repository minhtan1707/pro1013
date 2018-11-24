<?php
    require_once './models/member.php';
if(isset($_POST['search-members']))
{
    $results=member_search('%'.$_POST['search-members'].'%');
    if($results)
    {
        $title ='Danh sách thành viên';
        $subview='dashboard/member/search.php';
        require_once './views/dashboard/layout.php';
    }else{
        $_SESSION['alert']['message']="Không tìm thấy thành viên";
        $_SESSION['alert']['class']='warning';
        header('location: dashboard.php');
    }

  
}else{
    header('location: dashboard.php');
}
?>