<?php 
require "config.php";
require "models/db.php";
require "models/products.php";
$product = new Products;
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $manu_id = $_POST['manu'];
    $type_id = $_POST['type'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    $image = $_FILES['image']['name'];
    //Thêm sp bằng product 
    $product->addProduct($name,$manu_id,$type_id,$price,$image,$desc);
    //Upload hình
    $target_dir = "../themes/images/products/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]); 
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    
}
header('location:products.php');
