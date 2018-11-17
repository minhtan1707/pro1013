<?php
require_once './core/pdo.php';

function insert_project($pro_name,$description,$pro_leader){
    $sql = "INSERT INTO project(pro_name,description,pro_leader) VALUES(?,?,?)";
    pdo_execute($sql, $pro_name,$description,$pro_leader);
}

function insert_project_detail($pro_id,$member_id){
    $sql = "INSERT INTO pro_detail(pro_id,member_id) VALUES (?,?)";
    pdo_execute($sql,$pro_id,$member_id);
}
function update_project($pro_id,$pro_name,$description,$pro_leader){
    $sql = "UPDATE project SET pro_name=?,description=?,pro_leader=? WHERE pro_id=?";
    pdo_execute($sql,$pro_name,$description,$pro_leader,$pro_id);
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

function get_project_member_id($id,$leader_id){
    $sql="SELECT *,project.pro_id as id FROM project LEFT JOIN pro_detail ON project.pro_id = pro_detail.pro_id WHERE pro_detail.member_id=? OR project.pro_leader=? GROUP BY project.pro_id";
    return pdo_query($sql,$id,$leader_id);
}

function get_project_detail_id($id){
    $sql= "SELECT * FROM pro_detail LEFT JOIN member ON member.member_id = pro_detail.member_id WHERE pro_id=?";
    return pdo_query($sql,$id);
}
?>