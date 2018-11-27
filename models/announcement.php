<?php
require_once './core/pdo.php';

function get_ann(){
    $sql = "SELECT * FROM member ORDER BY member_id DESC";
    return pdo_query($sql);
}

function get_ann_pro_id($id){
    $sql= "SELECT * FROM announcement WHERE pro_id=?";
    return pdo_query($sql,$id);
}


function insert_ann($content,$member_id,$pro_id)
{
    $sql = "INSERT INTO announcement(ann_content,created_by,pro_id) VALUES(?,?,?)";
    pdo_execute($sql,$content,$member_id,$pro_id);
}
?>