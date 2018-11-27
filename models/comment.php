<?php
require_once './core/pdo.php';

function insert_comment($task_id,$member_id,$comment_content){
    $sql = "INSERT INTO comment(task_id,member_id,comment_content) VALUES(?,?,?)";
    pdo_execute($sql, $task_id,$member_id,$comment_content);
}

function update_comment($comment_id,$task_id,$member_id,$comment_content){
    $sql = "UPDATE comment SET task_id=?,member_id=?,comment_content=? WHERE comment_id=?";
    pdo_execute($sql,$task_id,$member_id,$comment_content,$comment_id);
}

function get_comment(){
    $sql = "SELECT * FROM comment LEFT JOIN member ON comment.member_id=member.member_id ORDER BY created_at DESC";
    return pdo_query($sql);
}

function get_comment_pro_id($id)
{
    $sql="SELECT *,comment.created_at AS comment_created_at FROM comment LEFT JOIN task ON task.task_id=comment.task_id LEFT JOIN member ON member.member_id = comment.member_id WHERE pro_id=?";
    return pdo_query($sql,$id);
}

?>