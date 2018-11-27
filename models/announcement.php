<?php
require_once './core/pdo.php';

function get_ann($id){
   $sql= "SELECT *,announcement.created_at AS ann_created_at FROM announcement LEFT JOIN project ON project.pro_id = announcement.pro_id LEFT JOIN pro_detail ON pro_detail.pro_id = announcement.pro_id WHERE project.pro_leader = ? or pro_detail.member_id= ? GROUP BY ann_id ORDER BY announcement.created_at DESC";
    return pdo_query($sql,$id,$id);
}

function get_ann_noti($id){
    $sql= "SELECT *,announcement.created_at AS ann_created_at FROM announcement LEFT JOIN project ON project.pro_id = announcement.pro_id LEFT JOIN pro_detail ON pro_detail.pro_id = announcement.pro_id WHERE project.pro_leader = ? or pro_detail.member_id= ? GROUP BY ann_id ORDER BY announcement.created_at ASC";
     return pdo_query($sql,$id,$id);
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