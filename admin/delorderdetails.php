<?php 
require "config.php";
require "models/db.php";
require "models/order_details.php";
$order_details = new OrderDetails;
if(isset($_GET['order_id'])){
    $order_details->delOrderDetails($_GET['order_id']);
}
header('location:order_details.php');