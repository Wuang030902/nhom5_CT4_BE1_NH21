<?php 
require "config.php";
require "models/db.php";
require "models/products.php";
$product = new Products;
if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    $manu_id = $_POST['manu'];
    $type_id = $_POST['type'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    $image;
    var_dump($_FILES['image']);
    if($_FILES['image']['name'] != null ){
        $image = $_FILES['image']['name'];
    }else{
        $getProductByIDImage = $product->getProductById($_GET['id']);
        $image = $getProductByIDImage[0]['image'];
    }
   
    //Thêm sp bằng product 
    $product->editProduct($id,$name,$manu_id,$type_id,$price,$image,$desc);
    //Upload hình
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]); 
    if (!file_exists($target_file)) {
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
      }
   
    
}

header('location:products.php');
