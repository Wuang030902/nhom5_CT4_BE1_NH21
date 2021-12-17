<?php 
require "config.php";
require "models/db.php";
require "models/order_details.php";
$order_details = new OrderDetails;
if(isset($_POST['submit'])){
    
    $id = $_POST['id'];
    $product_id = $_POST['product_id'];
    $qty = $_POST['qty'];
    $order_details->editOrderDetail($_GET['id'],$id,$product_id,$qty);
    
}
header('location:order_details.php');