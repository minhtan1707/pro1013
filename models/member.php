<?php
require_once './core/pdo.php';

function get(){
    $sql = "SELECT * FROM member ORDER BY id DESC";
    return pdo_query($sql);
}

function get_by_id($id){ // show từ chi tiết
    $sql = "SELECT * FROM member WHERE member_id=?";
    return pdo_query_one($sql, $id);
}
function insert($member_name,$email,$pass){
    $sql = "INSERT INTO member(member_name,email,pass) VALUES(?,?,?)";
    pdo_execute($sql,$member_name,$email,$pass);
}
function update($id,$member_name,$email,$pass,$profile_picture){
    $sql = "UPDATE member SET member_name=?,email=?,pass=?,profile_picture=? WHERE id=?";
    pdo_execute($sql,$member_name,$email,$pass,$profile_picture,$id);
}
function delete($ids){
    $sql = "DELETE FROM member WHERE id=?";
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

?>