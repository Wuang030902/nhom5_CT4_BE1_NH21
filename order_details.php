<?php
session_start();
if (isset($_SESSION['email'])) :
	if(isset($_GET['order_id'])):
	include "header.php";
	$orderdetails = new OrderDetails;
	$cart = new Cart();
	$getAllCart = $orderdetails->getOrderDetailsByOrderID($_GET['order_id'],$_SESSION['email']);

?>
	<div id="mainBody">
		<div class="container">
			<div class="row">
				<!-- Sidebar ================================================== -->
				<div id="sidebar" class="span3">
					<div class="well well-small"><a id="myCart" href="product_summary.html"><img src="themes/images/ico-cart.png" alt="cart">3 Items in your cart <span class="badge badge-warning pull-right">$155.00</span></a></div>
					<ul id="sideManu" class="nav nav-tabs nav-stacked">
						<?php include "thanhchon.php"; ?>
					</ul>
					<br />
					<div class="thumbnail">
						<img src="themes/images/products/panasonic.jpg" alt="Bootshop panasonoc New camera" />
						<div class="caption">
							<h5>Panasonic</h5>
							<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
						</div>
					</div><br />
					<div class="thumbnail">
						<img src="themes/images/products/kindle.png" title="Bootshop New Kindel" alt="Bootshop Kindel">
						<div class="caption">
							<h5>Kindle</h5>
							<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
						</div>
					</div><br />
					<div class="thumbnail">
						<img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
						<div class="caption">
							<h5>Payment Methods</h5>
						</div>
					</div>
				</div>
				<!-- Sidebar end=============================================== -->
				<div class="span9">
					<ul class="breadcrumb">
						<li><a href="index.html">Home</a> <span class="divider">/</span></li>
						<li class="active"> SHOPPING CART</li>
					</ul>
					<h3> Order ID[#<?php echo  $getAllCart[0]['order_id'] ?>]<a href="products.html" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>
					<hr class="soft" />

					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Product</th>
								<th>Description</th>
								<th>Price</th>
								<th  >Total</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$totalProduct = 0;
							foreach ($getAllCart as $key => $value) :
								if (isset($value['product_id'])) :
									$getProductById = $product->getProductByID($value['product_id']);

							?>
									<tr>
										<td> <img width="60" src="themes/images/products/<?php echo $getProductById[0]['image']; ?>" alt="" /></td>
										<td><?php echo $getProductById[0]['name']; ?><br />Color : black, Material : metal</td>
										<td><?php echo str_replace(",", ".", catSo(number_format($getProductById[0]['price'])))  ?>đ</td>
										<td><?php echo str_replace(",", ".", catSo(number_format($getProductById[0]['price'])))  ?>đ</td>
									</tr>
							<?php
									$total1Product = $value['qty'] * $getProductById[0]['price'];

									$totalProduct += $total1Product;
								endif;
							endforeach;
							?>
							<tr>
								<td colspan="3" style="text-align:right"><strong>TOTAL =</strong></td>
								<td class="label label-important" style="display:block"><?php echo str_replace(",", ".", number_format($totalProduct))  ?>VND <strong></strong></td>
							</tr>
						</tbody>
					</table>



					<a href="index.php" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>

				</div>
			</div>
		</div>
	</div>
	<!-- MainBody End ============================= -->
<?php include "footer.html";
else : header('location:index.php');
endif;endif; ?>