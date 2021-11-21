<?php include "header.php";

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
				<h3> SHOPPING CART [ <small>3 Item(s) </small>]<a href="products.html" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>
				<hr class="soft" />
				<table class="table table-bordered">
					<tr>
						<th> I AM ALREADY REGISTERED </th>
					</tr>
					<tr>
						<td>
							<form class="form-horizontal">
								<div class="control-group">
									<label class="control-label" for="inputUsername">Username</label>
									<div class="controls">
										<input type="text" id="inputUsername" placeholder="Username">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputPassword1">Password</label>
									<div class="controls">
										<input type="password" id="inputPassword1" placeholder="Password">
									</div>
								</div>
								<div class="control-group">
									<div class="controls">
										<button type="submit" class="btn">Sign in</button> OR <a href="register.html" class="btn">Register Now!</a>
									</div>
								</div>
								<div class="control-group">
									<div class="controls">
										<a href="forgetpass.html" style="text-decoration:underline">Forgot password ?</a>
									</div>
								</div>
							</form>
						</td>
					</tr>
				</table>

				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Product</th>
							<th>Description</th>
							<th>Quantity/Update</th>
							<th>Price</th>
							<th>Discount</th>
							<th>Tax</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
						<?php
						if(isset($_GET['minus'])) {
							$_SESSION['arrSanPham'][$_GET['minus']]['sl'] = $_GET['sl'] - 1;
							if ($_SESSION['arrSanPham'][$_GET['minus']]['sl'] <= 0) {
								unset($_SESSION['arrSanPham'][$_GET['minus']]);
							}
						}
						if(isset($_GET['btn-plus'])) {
							$_SESSION['arrSanPham'][$_GET['btn-plus']]['sl'] = $_GET['sl'] + 1;
							if ($_SESSION['arrSanPham'][$_GET['btn-plus']]['sl'] <= 0) {
								unset($_SESSION['arrSanPham'][$_GET['btn-plus']]);
							}
						}
						if (isset($_SESSION['arrSanPham'])):
							
							$totalProduct = 0;
							var_dump($_SESSION['arrSanPham']);
							foreach ($_SESSION['arrSanPham'] as $key => $value) :
								if(isset($value['id'])):
								$getProductById = $product->getProductByID($value['id']);
								
						?>
								<tr>
									<td> <img width="60" src="themes/images/products/<?php echo $getProductById[0]['image']; ?>" alt="" /></td>
									<td><?php echo $getProductById[0]['name']; ?><br />Color : black, Material : metal</td>
									<td>
										<form method="GET">
											<div class="input-append"><input name="sl" class="span1" value="<?php echo $value['sl']; ?>" style="max-width:34px" id="appendedInputButtons" size="16" type="text"><button class="btn" name="minus" type="submit" value="<?php echo $key ?>"><i class="icon-minus"></i></button><button class="btn" type="submit" name=btn-plus value="<?php echo $key ?>"><i class="icon-plus"></i></button><a href="del.php?key=<?php echo $key ?>"><button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button></a> </div>
										</form>
									</td>
									<td><?php echo number_format($getProductById[0]['price']); ?>VND</td>
									<td>$25.00</td>
									<td>$15.00</td>
									<td>$110.00</td>
								</tr>
							<?php
								$total1Product = $value['sl'] * $getProductById[0]['price'];

								$totalProduct += $total1Product;
								endif;endforeach;
							?>
							<tr>
								<td colspan="6" style="text-align:right">Total Price: </td>
								<td> $228.00</td>
							</tr>
							<tr>
								<td colspan="6" style="text-align:right">Total Discount: </td>
								<td> $50.00</td>
							</tr>
							<tr>
								<td colspan="6" style="text-align:right">Total Tax: </td>
								<td> $31.00</td>
							</tr>
							<tr>
								<td colspan="6" style="text-align:right"><strong>TOTAL ($228 - $50 + $31) =</strong></td>
								<td class="label label-important" style="display:block"><?php echo number_format($totalProduct) ?>VND <strong></strong></td>
							</tr>
					</tbody>
				</table>
			<?php endif; ?>


			<table class="table table-bordered">
				<tbody>
					<tr>
						<td>
							<form class="form-horizontal">
								<div class="control-group">
									<label class="control-label"><strong> VOUCHERS CODE: </strong> </label>
									<div class="controls">
										<input type="text" class="input-medium" placeholder="CODE">
										<button type="submit" class="btn"> ADD </button>
									</div>
								</div>
							</form>
						</td>
					</tr>

				</tbody>
			</table>

			<table class="table table-bordered">
				<tr>
					<th>ESTIMATE YOUR SHIPPING </th>
				</tr>
				<tr>
					<td>
						<form class="form-horizontal">
							<div class="control-group">
								<label class="control-label" for="inputCountry">Country </label>
								<div class="controls">
									<input type="text" id="inputCountry" placeholder="Country">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputPost">Post Code/ Zipcode </label>
								<div class="controls">
									<input type="text" id="inputPost" placeholder="Postcode">
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
									<button type="submit" class="btn">ESTIMATE </button>
								</div>
							</div>
						</form>
					</td>
				</tr>
			</table>
			<a href="products.html" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>
			<a href="login.html" class="btn btn-large pull-right">Next <i class="icon-arrow-right"></i></a>

			</div>
		</div>
	</div>
</div>
<!-- MainBody End ============================= -->
<?php include "footer.html"; ?>