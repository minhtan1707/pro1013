<?php
require_once './core/pdo.php';

function insert_task($task_name,$end_date,$assigned_member,$pro_id){
    $sql = "INSERT INTO task(task_name,end_date,assigned_member,pro_id) VALUES(?,?,?,?)";
    pdo_execute($sql, $task_name,$end_date,$assigned_member,$pro_id);
}

function update_task($task_id,$task_name,$end_date,$assigned_member){
    $sql = "UPDATE task SET task_name=?,end_date=?,assigned_member=? WHERE task_id=?";
    pdo_execute($sql,$task_name,$end_date,$assigned_member,$task_id);
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
        $sql = "SELECT * FROM task LEFT JOIN member ON task.assigned_member=member.member_id LEFT JOIN project ON task.pro_id = project.pro_id WHERE assigned_member=?";
        return pdo_query($sql, $member_id);
    }else
    {
        $sql = "SELECT * FROM task LEFT JOIN member ON task.assigned_member=member.member_id LEFT JOIN project ON task.pro_id = project.pro_id WHERE assigned_member=? AND status=?";
        return pdo_query($sql, $member_id,$status);
    }

}
?>