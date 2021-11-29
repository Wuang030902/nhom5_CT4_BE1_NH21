<?php 
require "config.php";
require "models/db.php";
require "models/products.php";
require "models/manufactures.php";
$manu = new Manufacture;
$product = new Products;

if(isset($_GET['manu_id'])){
    $getAllProducts = $product->getProductsByManu($_GET['manu_id']);
    if($getAllProducts[0]==null){
        $manu->delManufacture($_GET['manu_id']);
    }
}
header('location:manufactures.php');