<?php
require_once './core/pdo.php';

function insert_task($pro_id,$task_name,$task_desc,$assigned_member,$end_date){
    $sql = "INSERT INTO task(pro_id,task_name,task_desc,assigned_member,end_date) VALUES(?,?,?,?,?)";
    pdo_execute($sql,$pro_id, $task_name,$task_desc,$assigned_member,$end_date);
}

function update_task($task_id,$task_name,$task_desc,$assigned_member,$status,$end_date){
    $sql = "UPDATE task SET task_name=?,task_desc=?,assigned_member=?,status=?,end_date=? WHERE task_id=?";
    pdo_execute($sql,$task_name,$task_desc,$assigned_member,$status,$end_date,$task_id);
}

function get_task($status=null){
    if($status==null)
    {
        $sql = "SELECT * FROM task ORDER BY task_id DESC";
        return pdo_query($sql);
    }else{
        $sql = "SELECT * FROM task WHERE status=? ORDER BY task_id DESC";
        return pdo_query($sql,$status);
    }

}

function get_task_id($id){
    $sql = "SELECT * FROM task WHERE task_id=?";
    return pdo_query_one($sql, $id);
}

function get_task_pro_id($value,$status=null){
    if($status==null)
    {
        $sql = "SELECT * FROM task LEFT JOIN member ON task.assigned_member=member.member_id WHERE pro_id=?";
        return pdo_query($sql, $value);
    }else{
        $sql = "SELECT * FROM task LEFT JOIN member ON task.assigned_member=member.member_id WHERE pro_id=? AND status=?";
        return pdo_query($sql, $value,$status);
    }

}

function get_task_member_id($member_id,$status=null){
    if($status==null){
        $sql = "SELECT * FROM task LEFT JOIN member ON task.assigned_member=member.member_id LEFT JOIN project ON task.pro_id=project.pro_id WHERE assigned_member=?";
        return pdo_query($sql, $member_id);
    }else
    {
        $sql = "SELECT * FROM task LEFT JOIN member ON task.assigned_member=member.member_id LEFT JOIN project ON task.pro_id=project.pro_id WHERE assigned_member=? AND status=?";
        return pdo_query($sql, $member_id,$status);
    }
}
function get_task_closed($member_id,$date)
{
    $sql= "SELECT * FROM task WHERE end_date<? AND assigned_member=?";
    return pdo_query($sql,$date,$member_id);
}

?>