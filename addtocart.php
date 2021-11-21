<?php
session_start();
$x = 0;
if (isset($_GET['id'])) {
	if (isset($_SESSION['arrSanPham'])) {
		foreach ($_SESSION['arrSanPham'] as $key => $value) {
			if ($value['id'] == $_GET['id']) {
				$_SESSION['arrSanPham'][$key]['sl']++;
				$x = 1;
				break;
			}
		}
		if ($x != 1) {
			$_SESSION['arrSanPham'][] = array('id' => $_GET['id'], "sl" => 1);
		}
	} else {
		$_SESSION['arrSanPham'][] = array('id' => $_GET['id'], "sl" => 1);
	}
}
header('location:product_summary.php');
?>