<?php 
require "config.php";
require "models/db.php";
require "models/order.php";
$order = new Order;
if(isset($_GET['madonhang'])){
    $order->deleteCartByMaDonHang($_GET['madonhang']);
}
header('location:order.php');