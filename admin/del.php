<?php 
require "config.php";
require "models/db.php";
require "models/products.php";
$product = new Products;
if(isset($_GET['id'])){
    $product->delProduct($_GET['id']);
}
header('location:products.php');