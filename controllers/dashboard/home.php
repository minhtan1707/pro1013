<?php
    require_once './models/meeting.php';
    require_once './models/task.php';
    require_once './models/project.php';
    $all_task=get_task_member_id($_SESSION['user_info']['member_id']);
    $count_task=isset($all_task)?count($all_task):'0';
    $all_project=get_project_member_id($_SESSION['user_info']['member_id'],$_SESSION['user_info']['member_id']);
    $count_project=isset($all_project)?count($all_project):'0';
    $all_meeting=get_meeting($_SESSION['user_info']['member_id']);
    $count_meeting=isset($all_meeting)?count($all_meeting):'0';
    $tasks=get_task_member_id($_SESSION['user_info']['member_id'],'0');
    $meeting=get_meeting($_SESSION['user_info']['member_id'],'1');
    $title ='Bảng điều khiển';
    $subview='dashboard/home.php';
    require_once './views/dashboard/layout.php';

?>