<?php
require_once './core/pdo.php';

function get_member(){
    $sql = "SELECT * FROM member ORDER BY member_id DESC";
    return pdo_query($sql);
}

function get_member_id($id){ // show từ chi tiết
    $sql = "SELECT * FROM member WHERE member_id=?";
    return pdo_query_one($sql, $id);
}
function insert_member($member_name,$email,$pass,$about= NULL,$title=NULL){
    $sql = "INSERT INTO member(member_name,email,pass,about,title) VALUES(?,?,?,?,?)";
    pdo_execute($sql,$member_name,$email,$pass,$about,$title);
}
function update_member($id,$member_name,$email,$pass,$profile_picture,$about,$title,$phone){
    $sql = "UPDATE member SET member_name=?,email=?,pass=?,profile_picture=?,about=?,title=?,phone=? WHERE member_id=?";
    pdo_execute($sql,$member_name,$email,$pass,$profile_picture,$about,$title,$phone,$id);
}
function delete_member($ids){
    $sql = "DELETE FROM member WHERE member_id=?";
    if(is_array($ids)){
        foreach ($ids as $id) {
            pdo_execute($sql, $id);
        }
    }
    else{
        pdo_execute($sql, $ids);
    }
}
function login($email,$pass){ // code user người dùng đăng nhập vào hệ thống web
    $sql = "SELECT * FROM member WHERE email=? AND pass=?";
    return pdo_query_one($sql,$email,$pass);
}

function get_member_email($value){
    $sql = "SELECT * FROM member WHERE email=?";
    return pdo_query_one($sql, $value);
}
function get_member_pro_id($id)
{
    $sql = "SELECT * FROM pro_detail LEFT JOIN member ON member.member_id=pro_detail.member_id WHERE pro_detail.pro_id=?";
    return pdo_query($sql,$id);
}
function member_search($search){
    $sql = "SELECT * FROM member WHERE member_name LIKE ? OR email LIKE ?";
    return pdo_query($sql,$search,$search);
}

function last_logged_out($id,$last_logout)
{
    $sql = "UPDATE member SET last_logged_out=? WHERE member_id=?";
    pdo_execute($sql,$last_logout,$id);
}
?>