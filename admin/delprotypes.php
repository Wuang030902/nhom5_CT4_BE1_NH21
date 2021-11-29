<?php 
require "config.php";
require "models/db.php";
require "models/products.php";
require "models/manufactures.php";
require "models/protypes.php";
$protypes = new Protype;
$product = new Products;

if(isset($_GET['type_id'])){
    $getAllProducts = $product->getProductByTypeId($_GET['type_id']);
    if($getAllProducts[0]==null){
        $protypes->delProtypes($_GET['type_id']);
    }
}
header('location:protypes.php');