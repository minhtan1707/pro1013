<?php
if($_POST['submit']){
    $image=$_FILES["image"]["name"]; 
    $folder="./static/images/";
    move_uploaded_file($_FILES["image"]["tmp_name"], $folder.$image);
    require_once './models/products.php';
    product_insert($_POST['name'],$_POST['colors'],$_POST['price'],$_POST['feature'],$_POST['new'],$image);
    header('Location:http://localhost:8012/du-an-mau/index.php?page=admin');
}
    require_once './views/header.php';
    require_once './views/admin/add.php';
?>