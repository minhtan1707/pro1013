<?php
    require_once './models/meeting.php';
    require_once './models/task.php';
    require_once './models/project.php';
    require_once './models/announcement.php';
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $now=date('Y-m-d');
    // $end_date=strtotime($task['end_date']);
    // $end_date=date('Y-m-d',$end_date);

    // $_SESSION['alert']['message']="hello";
    // $_SESSION['alert']['class']='info';
    $all_task=get_task_member_id($_SESSION['user_info']['member_id']);
    $count_task=isset($all_task)?count($all_task):'0';
    $latest_task=$all_task?strtotime($all_task[0]['task_created_at']):'';


    $all_project=get_project_member_id($_SESSION['user_info']['member_id'],$_SESSION['user_info']['member_id']);
    $count_project=isset($all_project)?count($all_project):'0';
    $latest_project=$all_project?strtotime($all_project[0]['project_created_at']):'';


    $all_meeting=get_meeting($_SESSION['user_info']['member_id'],'1');
    $count_meeting=isset($all_meeting)?count($all_meeting):'0';
    $latest_meeting=$all_meeting?strtotime($all_meeting[0]['meeting_created_at']):'';

    $announcements=get_ann($_SESSION['user_info']['member_id']);
    $tasks=get_task_member_id($_SESSION['user_info']['member_id'],'0');
    $meetings=get_meeting($_SESSION['user_info']['member_id']);
    $title ='Bảng điều khiển';
    $subview='dashboard/home.php';
    require_once './views/dashboard/layout.php';

?>