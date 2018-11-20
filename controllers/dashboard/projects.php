<?php
$act=isset($_GET['act'])?$_GET['act']:'';
$pro_id=isset($_GET['id'])?$_GET['id']:'';
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
    require_once './models/project.php';
    if(isset($_POST['pro_name'])){
        insert_project($_POST['pro_name'],$_POST['pro_desc'],$_SESSION['user_info']['member_id'],$_POST['pro_start'],$_POST['pro_end']);
        header('location: dashboard.php?page=projects');
    }else{
        // print_r($_SESSION['user_info']);
        $projects=get_project_member_id($_SESSION['user_info']['member_id'],$_SESSION['user_info']['member_id'])!=NULL?get_project_member_id($_SESSION['user_info']['member_id'],$_SESSION['user_info']['member_id']):'';
        // print_r($projects);
        $title ='Dự án';
        $subview='dashboard/project/home.php';
        require_once './views/dashboard/layout.php';
    }

}

function add()
{
    $title ='Thêm dự án';
    $subview='dashboard/project/add.php';
    require_once './views/dashboard/layout.php';
}

function edit()
{

}

function project_detail()
{
    require_once './models/meeting.php';
    require_once './models/project.php';
    require_once './models/member.php';
    require_once './models/task.php';
    $pro_id=$_GET['id'];
    $project=get_project_id($_GET['id']);
    $team_lead=get_member_id($project['pro_leader']);
    $members =  get_member();
    $project_details=get_project_detail_id($_GET['id']);
    $tasks=get_task_pro_id($_GET['id']);
    $title ='Chi tiết dự án';
    $pro_end=date('Y-m-d',strtotime($project['pro_end']));
    $meetings=get_meeting_pro_id($pro_id);
    if(isset($_POST['add_task']))
    {
        insert_task($pro_id,$_POST['task_name'],$_POST['task_desc'],$_POST['assigned_member'],$_POST['end_date']);
        header("location: dashboard.php?page=projects&act=detail&id=$pro_id");
    }
    else if(isset($_POST['add_member']))
    {
        $member_added=get_member_email($_POST['member_added']);
        if($member_added){
            insert_project_detail($pro_id,$member_added['member_id']);
            header("location: dashboard.php?page=projects&act=detail&id=$pro_id");
        }else{
            header("location: dashboard.php?page=projects&act=detail&id=$pro_id");
        }
        
    }
    else if(isset($_POST['edit_task']))
    {
        update_task($_POST['task_id'],$_POST['task_name'],$_POST['task_desc'],$_POST['assigned_member'],$_POST['status'],$_POST['end_date']);
        header("location: dashboard.php?page=projects&act=detail&id=$pro_id");
    }else if(isset($_POST['add_meeting']))
    {
        insert_meeting($pro_id,$_SESSION['user_info']['member_id'],$_POST['description'],$_POST['meeting_location'],$_POST['meeting_date']);
        header("location: dashboard.php?page=projects&act=detail&id=$pro_id");
    }
    else
    {
        $subview='dashboard/project/project-detail.php';
        require_once './views/dashboard/layout.php';
    }
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