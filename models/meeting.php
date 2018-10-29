<?php
require_once './dao/pdo.php';

function insert_meeting($created_by,$descciption,$metting_location,$meeting_date,$pro_id){
    $sql = "INSERT INTO meeting(created_by,descciption,meeting_location,meeting_date,pro_id) VALUES(?,?,?,?,?)";
    pdo_execute($sql,$created_by,$descciption,$metting_location,$meeting_date,$pro_id);
}

function update_meeting($meeting_id,$created_by,$descciption,$metting_location,$meeting_date,$pro_id){
    $sql = "UPDATE meeting SET created_by=?,descciption=?,metting_location=?,meeting_date=?,pro_id=? WHERE metting_id=?";
    pdo_execute($sql,$created_by,$descciption,$metting_location,$meeting_date,$pro_id,$metting_id);
}

function get_meeting($order=FALSE){
    if($order==FALSE)
    {
        $sql = "SELECT * FROM meeting ORDER BY created_at ASC";
    }else{
        $sql = "SELECT * FROM meeting ORDER BY $order ASC";
    }
    
    return pdo_query($sql);
}

function get_meeting_id($id){
    $sql = "SELECT * FROM meeting WHERE meeting_id=?";
    return pdo_query_one($sql, $id);
}

function get_meeting_where($where,$value){
    $sql = "SELECT * FROM meeting WHERE $where=?";
    return pdo_query_one($sql, $value);
}
?>