<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/protypes.php";
require "models/account.php";
require "models/cart.php";
require "models/order.php";
require "mylibrary.php";
$product = new Product;
$getAllProduct = $product->getAllProducts();
if(session_id() == '') {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Bootshop online Shopping cart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<!--Less styles -->
	<!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->

	<!-- Bootstrap style -->
	<link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen" />
	<link href="themes/css/base.css" rel="stylesheet" media="screen" />
	<!-- Bootstrap style responsive -->
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
	<!-- Google-code-prettify -->
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet" />
	<!-- fav and touch icons -->
	<link rel="shortcut icon" href="themes/images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
</head>

<body>
	<div id="header">
		<div class="container">
			<div id="welcomeLine" class="row">
				<div class="span6">Welcome!<strong> User</strong></div>
				<div class="span6">
					<div class="pull-right">
						<a href="product_summary.html"><span class="">Fr</span></a>
						<a href="product_summary.html"><span class="">Es</span></a>
						<span class="btn btn-mini">En</span>
						<a href="product_summary.html"><span>&pound;</span></a>
						<span class="btn btn-mini">$155.00</span>
						<a href="product_summary.html"><span class="">$</span></a>
						<a href="product_summary.php"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i>  Itemes in your cart </span> </a>
					</div>
				</div>
			</div>
			<!-- Navbar ================================================== -->
			<div id="logoArea" class="navbar">
				<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<div class="navbar-inner">
					<a class="brand" href="index.php"><img src="themes/images/logo.png" alt="Bootsshop" /></a>
					<form class="form-inline navbar-search" method="get" action="products.php">
						<input id="srchFld" class="srchTxt" type="text" name="keyword" />
						<select name="type_id" class="srchTxt">
							<option>All</option>
							<?php
							$protypes = new Protypes;
							$getAllProtypes = $protypes->getAllProtypes();
							foreach ($getAllProtypes as $value) :
							?>
								<option value="<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></option>
							<?php endforeach; ?>
						</select>
						<button type="submit" id="submitButton" class="btn btn-primary">Go</button>
					</form>
					<ul id="topMenu" class="nav pull-right">
						<li class=""><a href="special_offer.html">Specials Offer</a></li>
						<li class=""><a href="orderall.php">Order</a></li>
						<li class=""><a href="registerform.php">Register</a></li>
						<?php if (!isset($_SESSION['email'])) : ?>
							<li class="">
								<a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
								<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h3>Login Block</h3>
									</div>
									<div class="modal-body">

										<form class="form-horizontal loginFrm" action="login.php" method="POST">
											<div class="control-group">
												<input type="text" id="inputEmail" placeholder="Email" name="email">
											</div>
											<div class="control-group">
												<input type="password" id="inputPassword" placeholder="Password" name="password">
											</div>
											<div class="control-group">
												<input type="submit" id="inputPassword" class="btn btn-success" placeholder="Login" name="submit">
											</div>
										</form>
									</div>
							</li>
						<?php else : ?>
							<li>
								<a href="logout.php" style="padding-right:0"><span class="btn btn-large btn-success">Logout</span></a>
							</li>
						<?php endif; ?>
				</div>
				</ul>
			</div>
		</div>
	</div>
	</div>
	<!-- Header End====================================================================== -->