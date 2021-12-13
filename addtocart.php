<?php
session_start();
if (isset($_SESSION['email'])) {
	if (isset($_GET['id'])) {
		require "config.php";
		require "models/db.php";
		require "models/cart.php";

		$cart = new Cart;
		$getAllCart =  $cart->getAllCart();
		$x = 0;

		foreach ($getAllCart as $value) {
			if ($value['product_id'] == $_GET['id']) {
				$cart->editCart($_SESSION['email'],$value['qty'] + 1, $value['product_id']);
				$x = 1;
				break;
			}
		}
		if ($x == 0) {
			$cart->addCart($_SESSION['email'],$_GET['id'], 1);
		}
	}	
	header('location:product_summary.php');
}
else{
	header('location:index.php');
}


