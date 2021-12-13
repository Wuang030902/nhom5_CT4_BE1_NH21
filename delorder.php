<?php
if(isset($_GET['madonhang'])){
    require "config.php";
    require "models/db.php";
    require "models/order.php";
    
    $order =new Order ;
    
    $order->deleteCartByMaDonHang($_GET['madonhang']);
    header('location:orderall.php');
}
