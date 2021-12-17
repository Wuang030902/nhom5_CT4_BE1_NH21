<?php
session_start();
if (isset($_SESSION['email'])) {
    require "config.php";
    require "models/db.php";
    require "models/product.php";
    require "models/order.php";
    require "models/cart.php";
    require "models/chart.php";
    require "models/order_details.php";

    $orderDetails = new OrderDetails;
    $order = new Order;
    $product = new Product;
    $getcart = new Cart;
    $getAllCart = $getcart->getAllCartByID($_SESSION['email']);
    $getProductById = $product->getProductByID($getAllCart[0]['product_id']);
    if ($product->getProductByID($getAllCart[0]['product_id']) != null) {
        $sanPham = $getProductById[0]['name'] . " và " . (count($getAllCart) - 1) . " sản phẩm khác";
        $order->addOrder($_SESSION['email'], $sanPham, $_GET['tongtien'], "Active");
        // order details
        $getAllOrder = $order->getAllOrder($_SESSION['email']);
        $order_id =$getAllOrder[0]['madonhang'];
        foreach($getAllCart as $value){
            $orderDetails->addOrderDetails($order_id,$_SESSION['email'],$value['product_id'],$value['qty']);
        }
        //order details 
        $getcart->deleteCartByID($_SESSION['email']);
        $chart = new Chart();
        $x = 0;
        foreach ($getAllCart as $value) {
            $getAllChartByID = $chart->getQTYByID($value['product_id']);
            if ($getAllChartByID != null) {
                $chart->editChart($value['product_id'], $getAllChartByID[0]['qty'] + $value['qty']);
                $x = 1;
            }
        }

        header('location:orderall.php');
    } else {
        header('location:index.php');
    }
}
