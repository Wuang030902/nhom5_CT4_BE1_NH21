<?php
require "config.php";
require "models/db.php";
require "models/order_details.php";

$order_details = new OrderDetails;

if(isset($_POST['submit'])){
    $order_id = $_POST['order_id'];
    $id = $_POST['id'];
    $product_id = $_POST['product_id'];
    $qty = $_POST['qty'];
   
    
            
            
    $order_details->addOrderDetails($order_id,$id,$product_id,$qty);
         
    
    
    

    
}
header("location:order_details.php");


