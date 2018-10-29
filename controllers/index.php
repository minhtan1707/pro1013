<?php 
session_start();
require_once './models/products.php';
$products=product_get();
require_once './views/header.php';
require_once './views/index.php';

?>