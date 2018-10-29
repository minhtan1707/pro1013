<?php
require_once './dao/pdo.php';

function insert_task($task_name,$end_date,$assigned_member,$pro_id){
    $sql = "INSERT INTO task(task_name,end_date,assigned_member,pro_id) VALUES(?,?,?,?)";
    pdo_execute($sql, $task_name,$end_date,$assigned_member,$pro_id);
}

function update_task($task_id,$task_name,$end_date,$assigned_member){
    $sql = "UPDATE task SET task_name=?,end_date=?,assigned_member=? WHERE task_id=?";
    pdo_execute($sql,$task_name,$end_date,$assigned_member,$task_id);
}

function get_task(){
    $sql = "SELECT * FROM task ORDER BY task_id DESC";
    return pdo_query($sql);
}

function get_task_id($id){
    $sql = "SELECT * FROM task WHERE task_id=?";
    return pdo_query_one($sql, $id);
}

function get_task_where($where,$value){
    $sql = "SELECT * FROM task WHERE $where=?";
    return pdo_query_one($sql, $value);
}

?>