<?php 
require "config.php";
require "models/db.php";
require "models/cart.php";
session_start();
if(isset($_SESSION['email'])){
    $cart = new Cart();
    if(isset($_POST['minus'])){
        if($_POST['qty']-1 <= 0){
            $cart->deleteCart($_SESSION['email'],$_GET['id']);
        }
        else{
            $cart->editCart($_SESSION['email'],$_POST['qty']-1,$_GET['id']);
        }
    }
    if(isset($_POST['plus'])){
        $cart->editCart($_SESSION['email'],$_POST['qty']+1,$_GET['id']);
    }
    if(isset($_POST['delete'])){
        $cart->deleteCart($_SESSION['email'],$_GET['id']);
    }
    header('location:product_summary.php');
}
else{
    header('location:index.php');
}