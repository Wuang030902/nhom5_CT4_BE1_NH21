<?php 
    session_start();
    unset($_SESSION["arrSanPham"][$_GET['key']]);
    header('location:product_summary.php');
?>