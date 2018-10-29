<?php
if($_POST['submit']){
    if(isset($_POST['new']))
    {
        $new=true;
    }else{
        $new=false;
    }
    if($_FILES["image"])
    {
        $image=$_FILES["image"]["name"]; 
        $folder="./static/images/";
        move_uploaded_file($_FILES["image"]["tmp_name"], $folder.$image);
    }else{
        $image=$_POST['product_img'];
    }
    require_once './models/products.php';
    product_update($_GET['id'],$_POST['name'],$_POST['colors'],$_POST['price'],$_POST['new'],$new,$image);
    header('Location:http://localhost:8012/du-an-mau/index.php?page=admin');
}
require_once './models/products.php';
$product=product_get_by_id($_GET['id']);
    require_once './views/header.php';
    require_once './views/admin/update.php';
?>