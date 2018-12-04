<?php
$act=isset($_GET['act'])?$_GET['act']:'';
$act=check($act);
$noti=isset($_GET['from'])?$_GET['from']:'';
$noti=check($noti);
// $task_id=isset($_GET['id'])?$_GET['id']:'';
require_once './library/pagination.php';
$page=isset($_GET['pages'])?$_GET['pages']:1;
$page=check($page);
switch($act){
    // case 'task-list':
    // task_list();
    // break;

    // case 'edit':
    // edit();
    // break;

    default:
    home($page,$noti);

}

function home($page,$noti)
{
    require_once './models/task.php';
    require_once './models/comment.php';
    if($noti)
    {
        unset($_SESSION['announcement']);
    }
    $total_tasks=get_task_member_id($_SESSION['user_info']['member_id']);
    $total= count($total_tasks);
    $limit=4;
    $pagination=pagination($limit,$page,$total);
    extract($pagination);
    $finished_tasks=get_task_member_id($_SESSION['user_info']['member_id'],'1');
    $unfinished_tasks=get_task_member_id($_SESSION['user_info']['member_id'],'0');
    $closed_tasks=get_task_closed($_SESSION['user_info']['member_id'],date('Y-m-d'));
    $comments=get_comment();
    $tasks=get_task_member_id_page($_SESSION['user_info']['member_id'],$limit,$previous_page*$limit);
    $title ='Nhiệm vụ';
    if(isset($_POST['change_status']))
    {
        change_status($_POST['task_id'],$_POST['status']);
        $_SESSION['alert']['message']="Đã thay đổi trạng thái nhiệm vụ";
        $_SESSION['alert']['class']='success';
        header('location: dashboard.php?page=tasks');
    }else if(isset($_POST['add_comment'])){
        insert_comment($_POST['task_id'],$_SESSION['user_info']['member_id'],$_POST['comment_content']);
        header('location: dashboard.php?page=tasks');
    }else{
        $subview='dashboard/task/home.php';
        require_once './views/dashboard/layout.php';
    }

}


?>