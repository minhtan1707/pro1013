<?php
require_once './dao/pdo.php';

function insert($pro_name,$descciption,$pro_leader){
    $sql = "INSERT INTO project(pro_name,descciption,pro_leader) VALUES(?,?,?)";
    pdo_execute($sql, $tenthuonghieu,$logothuonghieu,pro_leader);
}

function update($pro_id,$pro_name,$descciption,$pro_leader){
    $sql = "UPDATE project SET pro_name=?,descciption=?,pro_leader=? WHERE pro_id=?";
    pdo_execute($sql,$pro_name,$descciption,$pro_leader,$pro_id);
}

function get(){
    $sql = "SELECT * FROM project ORDER BY id DESC";
    return pdo_query($sql);
}

function get_by_id($id){
    $sql = "SELECT * FROM project WHERE pro_id=?";
    return pdo_query_one($sql, $id);
}


?>