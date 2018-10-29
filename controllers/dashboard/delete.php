<?php
if(isset($_POST['id']))
{
require_once './models/products.php';
product_delete($_POST['id']);
}
header('Location:http://localhost:8012/du-an-mau/index.php?page=admin');
?>