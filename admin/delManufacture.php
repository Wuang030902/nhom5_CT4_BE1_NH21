<?php 
require "config.php";
require "models/db.php";
require "models/products.php";
$manu = new Manufacture;
$product = new Product;

if(isset($_GET['manu_id'])){
    $getAllProducts = $product->getProductsByManu($_GET['manu_id']);
    if($getAllProducts[0]==null){
        $manu->delManufacture($_GET['manu_id']);
    }
    else{
        header('location:manufacture.php?erro=true');
    }
    
}
header('location:manufacture.php');