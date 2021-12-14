<?php 
require "config.php";
require "models/db.php";
require "models/products.php";
require "models/protypes.php";
$protypes = new Protypes;
$product = new Products;

if(isset($_GET['type_id'])){
    $getAllProducts = $product->getProductByTypeId($_GET['type_id']);
    if($getAllProducts[0]==null){
        $protypes->delProtypes($_GET['type_id']);
    }
}
header('location:protypes.php');