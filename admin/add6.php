<?php
require "config.php";
require "models/db.php";
require "models/order.php";

$order = new Order;

if(isset($_POST['submit'])){
    $id= $_POST['id'];
    $tongtien = $_POST['tongtien'];
    $trangthai = $_POST['trangthai'];
    $sanpham = $_POST['sanpham'];
    
   
    
            
            
    $order->addOrder($id,$sanpham,$trangthai,$tongtien);
         
    
    
    

    
}
header("location:order.php");


