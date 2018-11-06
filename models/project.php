<?php
require_once './core/pdo.php';

function insert_project($pro_name,$descciption,$pro_leader){
    $sql = "INSERT INTO project(pro_name,descciption,pro_leader) VALUES(?,?,?)";
    pdo_execute($sql, $pro_name,$descciption,$pro_leader);
}

function update_project($pro_id,$pro_name,$descciption,$pro_leader){
    $sql = "UPDATE project SET pro_name=?,descciption=?,pro_leader=? WHERE pro_id=?";
    pdo_execute($sql,$pro_name,$descciption,$pro_leader,$pro_id);
}

function get_project(){
    $sql = "SELECT * FROM project ORDER BY pro_name ASC";
    return pdo_query($sql);
}

function get_project_id($id){
    $sql = "SELECT * FROM project WHERE pro_id=?";
    return pdo_query_one($sql, $id);
}

function get_project_where($where,$value){
    $sql = "SELECT * FROM project WHERE $where=?";
    return pdo_query_one($sql, $value);
}

function get_project_member_id($id){
    $sql="SELECT * FROM project LEFT JOIN pro_detail ON project.pro_id = pro_detail.pro_id WHERE pro_detail.member_id=?";
    return pdo_query($sql,$id);
}
?>