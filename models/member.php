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
function insert_member($member_name,$email,$pass,$profile_picture = NULL,$about= NULL,$title=NULL){
    $sql = "INSERT INTO member(member_name,email,pass,profile_picture,about,title) VALUES(?,?,?,?,?,?)";
    pdo_execute($sql,$member_name,$email,$pass,$profile_picture,$about,$title);
}
function update_member($id,$member_name,$email,$pass,$profile_picture,$about){
    $sql = "UPDATE member SET member_name=?,email=?,pass=?,profile_picture=?,about=? WHERE member_id=?";
    pdo_execute($sql,$member_name,$email,$pass,$profile_picture,$id);
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

function get_member_where($where,$value){
    $sql = "SELECT * FROM member WHERE $where=?";
    return pdo_query_one($sql, $value);
}

?>