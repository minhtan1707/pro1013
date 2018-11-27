<?php
require_once './library/pagination.php';
$act=isset($_GET['act'])?$_GET['act']:'';
$act=check($act);
$page=isset($_GET['pages'])?$_GET['pages']:1;
$page=check($page);
$pro_id=isset($_GET['id'])?$_GET['id']:'';
$pro_id=check($pro_id);
switch($act){

    case 'detail':
    project_detail($pro_id);
    break;

    default:
    home($page);

}

function home($page)
{
    require_once './models/project.php';
    if(isset($_POST['project'])){
        $insert_data['pro_name']=check($_POST['project']['pro_name']);
        $insert_data['pro_desc']=check($_POST['project']['pro_desc']);
        insert_project($insert_data['pro_name'],$insert_data['pro_desc'],$_SESSION['user_info']['member_id'],$_POST['project']['pro_start'],$_POST['project']['pro_end']);
        $_SESSION['alert']['message']="Tạo dự án mới thành công";
        $_SESSION['alert']['class']='success';
        header('location: dashboard.php?page=projects');
    }else{
        $projects=get_project_member_id($_SESSION['user_info']['member_id'],$_SESSION['user_info']['member_id']);
        $total= count($projects);
        $limit=6;
        $pagination=pagination($limit,$page,$total);
        extract($pagination);
        $projects=get_project_member_id($_SESSION['user_info']['member_id'],$_SESSION['user_info']['member_id'],$limit,$previous_page*$limit);
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

function project_detail($pro_id)
{
    require_once './models/meeting.php';
    require_once './models/project.php';
    require_once './models/member.php';
    require_once './models/comment.php';
    require_once './models/task.php';
    require_once './models/announcement.php';

    $project=get_project_id($pro_id);
    $team_lead=get_member_id($project['pro_leader']);
    $members =  get_member();
    $members_by_pro_id = get_member_pro_id($pro_id);
    $members_by_pro_id['pro_leader']=$team_lead;
    $project_details=get_project_detail_id($pro_id);
    $tasks=get_task_pro_id($pro_id);
    $title ='Chi tiết dự án';
    $pro_end=date('Y-m-d',strtotime($project['pro_end']));
    $meetings=get_meeting_pro_id($pro_id);
    $announcements=get_ann_pro_id($pro_id);
    $comments=get_comment_pro_id($pro_id);
    switch($project['progress'])
    {
        case '1':
        $progress="25";
        break;

        case '2':
        $progress="50";
        break;

        case '3':
        $progress="75";
        break;

        case '4':
        $progress="100";
        break;

        default:
        $progress="0";
        break;
    }

    if(isset($_POST['add_task']))
    {
        addTask($pro_id);
    }
    else if(isset($_POST['add_member']))
    {
        addMember($pro_id);
    }
    else if(isset($_POST['edit_task']))
    {
        editTask($pro_id);
    }
    else if(isset($_POST['add_meeting']))
    {
        addMeeting($pro_id);
    }
    else if(isset($_POST['edit_project']))
    {
        edit($pro_id);
    }
    else if(isset($_POST['add_ann']))
    {
        addAnn($pro_id);
    }
    else if(isset($_POST['add_comment']))
    {
        addCom($pro_id);
    }
    else
    {
        $subview='dashboard/project/project-detail.php';
        require_once './views/dashboard/layout.php';
    }
}

function addTask($pro_id)
{

    $insert_data['task_name']=check($_POST['task_name']);
    $insert_data['task_desc']=check($_POST['task_desc']);
    insert_task($pro_id,$insert_data['task_name'],$insert_data['task_desc'],$_POST['assigned_member'],$_POST['end_date']);
    $_SESSION['alert']['message']="Thêm nhiệm vụ thành công";
    $_SESSION['alert']['class']='success';
    header("location: dashboard.php?page=projects&act=detail&id=$pro_id");
}

function addMeeting($pro_id)
{
    $insert_data['description']=check($_POST['description']);
    $insert_data['meeting_location']=check($_POST['meeting_location']);
    insert_meeting($pro_id,$_SESSION['user_info']['member_id'],$insert_data['description'],$insert_data['meeting_location'],$_POST['meeting_date']);
    $_SESSION['alert']['message']="Thêm cuộc họp thành công";
    $_SESSION['alert']['class']='success';
    header("location: dashboard.php?page=projects&act=detail&id=$pro_id");
}

function editTask($pro_id)
{
    $insert_data['task_name']=check($_POST['task_name']);
    $insert_data['task_desc']=check($_POST['task_desc']);
    update_task($_POST['task_id'],$_POST['task_name'],$_POST['task_desc'],$_POST['assigned_member'],$_POST['status'],$_POST['end_date']);
    $_SESSION['alert']['message']="Thay đổi thông tin nhiệm vụ thành công";
    $_SESSION['alert']['class']='success';
    header("location: dashboard.php?page=projects&act=detail&id=$pro_id");
}

function addMember($pro_id)
{
    $email=check($_POST['member_added']);
    $member_added=get_member_email($email);
    $project_details=get_project_detail_id($_GET['id']);
    if($member_added)
    {
        foreach($project_details as $project_detail)
        {
            if($member_added['member_id']==$project_detail['member_id'])
            {
                $exist=1;
                break;
            }
        }
        if(!isset($exist)){
            insert_project_detail($pro_id,$member_added['member_id']);
            header("location: dashboard.php?page=projects&act=detail&id=$pro_id");
        }else{
            $_SESSION['alert']['message']="Thành viên đã có mặt trong dự án";
            $_SESSION['alert']['class']='warning';
            header("location: dashboard.php?page=projects&act=detail&id=$pro_id");
        }
    }else{
        $_SESSION['alert']['message']="Thành viên không tồn tại";
        $_SESSION['alert']['class']='warning';
        header("location: dashboard.php?page=projects&act=detail&id=$pro_id");
    }
}

function edit($pro_id)
{
    $insert_data['pro_name']=check($_POST['pro_name']);
    $insert_data['pro_desc']=check($_POST['pro_desc']);
    update_project($pro_id,$insert_data['pro_name'],$insert_data['pro_desc'],$_POST['pro_start'],$_POST['pro_end']);
    $_SESSION['alert']['message']="Sửa thông tin dự án thành công";
    $_SESSION['alert']['class']='success';
    header("location: dashboard.php?page=projects&act=detail&id=$pro_id");
}

function addAnn($pro_id)
{
    $insert_data['ann_content']=check($_POST['ann_content']);
    insert_ann( $insert_data['ann_content'],$_SESSION['user_info']['member_id'],$pro_id);
    $_SESSION['alert']['message']="Thêm thông báo thành công";
    $_SESSION['alert']['class']='success';
    header("location: dashboard.php?page=projects&act=detail&id=$pro_id");
}

function addCom($pro_id)
{
    insert_comment($_POST['task_id'],$_SESSION['user_info']['member_id'],$_POST['comment_content']);
    $_SESSION['alert']['message']="Thêm bình luận thành công";
    $_SESSION['alert']['class']='success';
    header("location: dashboard.php?page=projects&act=detail&id=$pro_id");
}


?>