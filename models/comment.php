<?php
require_once './dao/pdo.php';

function insert_comment($task_id,$member_id,$comment_content){
    $sql = "INSERT INTO comment(task_id,member_id,comment_content) VALUES(?,?,?)";
    pdo_execute($sql, $task_id,$member_id,$comment_content);
}

function update_comment($comment_id,$task_id,$member_id,$comment_content){
    $sql = "UPDATE comment SET task_id=?,member_id=?,comment_content=? WHERE comment_id=?";
    pdo_execute($sql,$task_id,$member_id,$comment_content,$comment_id);
}

function get_comment(){
    $sql = "SELECT * FROM comment ORDER BY created_at DESC";
    return pdo_query($sql);
}

?>