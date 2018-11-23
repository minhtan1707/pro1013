<?php
require_once './core/pdo.php';

function insert_meeting($pro_id,$created_by,$meeting_desc,$metting_location,$meeting_date){
    $sql = "INSERT INTO meeting(pro_id,created_by,meeting_desc,meeting_location,meeting_date) VALUES(?,?,?,?,?)";
    pdo_execute($sql,$pro_id,$created_by,$meeting_desc,$metting_location,$meeting_date);
}

function update_meeting($meeting_id,$created_by,$meeting_desc,$metting_location,$meeting_date,$pro_id){
    $sql = "UPDATE meeting SET created_by=?,descciption=?,metting_location=?,meeting_date=?,pro_id=? WHERE metting_id=?";
    pdo_execute($sql,$created_by,$meeting_desc,$metting_location,$meeting_date,$pro_id,$metting_id);
}

function get_meeting($id,$order=FALSE){ 
        if($order===FALSE)
        {
            $sql = "SELECT *,meeting.created_at AS meeting_created_at FROM meeting LEFT JOIN pro_detail ON pro_detail.pro_id = meeting.pro_id LEFT JOIN member ON meeting.created_by = member.member_id LEFT JOIN project ON project.pro_id = pro_detail.pro_id WHERE  pro_detail.member_id=? ORDER BY meeting_date ASC";
            return pdo_query($sql,$id);
        }else{
            $sql = "SELECT *,meeting.created_at AS meeting_created_at FROM meeting LEFT JOIN pro_detail ON pro_detail.pro_id = meeting.pro_id LEFT JOIN member ON meeting.created_by = member.member_id LEFT JOIN project ON project.pro_id = pro_detail.pro_id WHERE  pro_detail.member_id=? ORDER BY meeting.created_at DESC";
            return pdo_query($sql,$id);
        }

}

function get_meeting_id($id){
    $sql = "SELECT * FROM meeting WHERE meeting_id=?";
    return pdo_query_one($sql, $id);
}

function get_meeting_pro_id($value){
    $sql = "SELECT * FROM meeting WHERE pro_id=?";
    return pdo_query($sql, $value);
}

?>