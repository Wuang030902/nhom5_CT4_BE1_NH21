<?php 
session_start();
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/order.php";
require "models/cart.php";


$order = new Order;
$product = new Product;
$getcart = new Cart;
$getAllCart = $getcart->getAllCartByID($_SESSION['email']) ;
$getProductById = $product->getProductByID($getAllCart[0]['product_id']);
if($product->getProductByID($getAllCart[0]['product_id']) !=null){
$sanPham = $getProductById[0]['name']." và ". (count($getAllCart)-1) ." sản phẩm khác";
var_dump($sanPham);
$order->addOrder($_SESSION['email'],$sanPham,$_GET['tongtien'],"Active");
$getcart->deleteCartByID($_SESSION['email']);
header('location:orderall.php');
}
else{
    header('location:index.php');
}
