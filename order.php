<?php 
session_start();
require "config.php";
require "models/db.php";
require "models/order.php";

$order = new Order;

$order->addOrder($_SESSION['email'],$_GET['tongtien'],"Active");
header('location:orderall.php');
?>