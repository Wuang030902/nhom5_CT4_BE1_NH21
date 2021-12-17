<?php
include "header.php";
if (isset($_GET['id'])) :
	$getProductByID = $product->getProductByID($_GET['id']);

?>
	<div id="mainBody">
		<div class="container">
			<div class="row">
				<!-- Sidebar ================================================== -->
				<div id="sidebar" class="span3">
					<div class="well well-small"><a id="myCart" href="product_summary.html"><img src="themes/images/ico-cart.png" alt="cart">3 Items in your cart <span class="badge badge-warning pull-right">$155.00</span></a></div>
					<ul id="sideManu" class="nav nav-tabs nav-stacked">
						<?php include "thanhchon.php" ?>
					</ul>
					<br />
					<?php include "sanphamnoibat.php" ?>
				</div>
				<!-- Sidebar end=============================================== -->
				<div class="span9">
					<ul class="breadcrumb">
						<li><a href="index.html">Home</a> <span class="divider">/</span></li>
						<li><a href="products.html">Products</a> <span class="divider">/</span></li>
						<li class="active">product Details</li>
					</ul>
					<div class="row">
						<div id="gallery" class="span3">
							<a href="themes/images/products/<?php echo $getProductByID[0]['image']; ?>" title="<?php echo $getProductByID[0]['name']; ?>">
								<img src="themes/images/products/<?php echo $getProductByID[0]['image']; ?>" style="width:100%" alt="<?php echo $getProductByID[0]['name']; ?>" />
							</a>
							<div id="differentview" class="moreOptopm carousel slide">
								<div class="carousel-inner">
									<div class="item active">
										<a href="themes/images/products/<?php echo $getProductByID[0]['image']; ?>"> <img style="width:29%" src="themes/images/products/<?php echo $getProductByID[0]['image']; ?>" alt="" /></a>
									</div>
									<div class="item">
										<a href="themes/images/products/<?php echo $getProductByID[0]['image']; ?>"> <img style="width:29%" src="themes/images/products/<?php echo $getProductByID[0]['image']; ?>" alt="" /></a>
									</div>
								</div>
								<!--  
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a> 
			  -->
							</div>

							<div class="btn-toolbar">
								<div class="btn-group">
									<span class="btn"><i class="icon-envelope"></i></span>
									<span class="btn"><i class="icon-print"></i></span>
									<span class="btn"><i class="icon-zoom-in"></i></span>
									<span class="btn"><i class="icon-star"></i></span>
									<span class="btn"><i class=" icon-thumbs-up"></i></span>
									<span class="btn"><i class="icon-thumbs-down"></i></span>
								</div>
							</div>
						</div>
						<div class="span6">
							<h3><?php echo $getProductByID[0]['name']; ?> </h3>
							<hr class="soft" />
							<form class="form-horizontal qtyFrm">
								<div class="control-group">
									<label class="control-label"><span><?php echo str_replace(",",".",catSo(number_format($getProductByID[0]['price']))) ?>đ</span></label>
									<div class="controls">
										<input type="number" class="span1" placeholder="Qty." />
										<a href="addtocart.php?id=<?php echo $_GET['id'] ?>"> <button type="button" class="btn btn-large btn-primary pull-right">Add to cart <i class=" icon-shopping-cart"></i></button></a>
										
									</div>
								</div>
							</form>

							<hr class="soft" />
							<h4>100 items in stock</h4>
							<form class="form-horizontal qtyFrm pull-right">
								<div class="control-group">
									<label class="control-label"><span>Color</span></label>
									<div class="controls">
										<select class="span2">
											<option>Black</option>
											<option>Red</option>
											<option>Blue</option>
											<option>Brown</option>
										</select>
									</div>
								</div>
							</form>
							<hr class="soft clr" />
							<p>
								<?php echo $getProductByID[0]['description']; ?>

							</p>
							<a class="btn btn-small pull-right" href="#detail">More Details</a>
							<br class="clr" />
							<a href="#" name="detail"></a>
							<hr class="soft" />
						</div>

						<div class="span9">
							<ul id="productDetail" class="nav nav-tabs">
								<li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
								<li><a href="#profile" data-toggle="tab">Related Products</a></li>
							</ul>
							<div id="myTabContent" class="tab-content">
								<div class="tab-pane fade active in" id="home">
									

									<h5>Description</h5>
									<p>
										<?php echo $getProductByID[0]['description']; ?>
									</p>

									
								</div>
								<div class="tab-pane fade" id="profile">
									<div id="myTab" class="pull-right">
										<a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
										<a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
									</div>
									<br class="clr" />
									<hr class="soft" />
									<div class="tab-content">
										<div class="tab-pane active" id="blockView">
											<ul class="thumbnails">
												<?php
												$getAllProductByTypeID = $product->getProductByTypeId6($getProductByID[0]['type_id'], $_GET['id']);
												// $dau =rand(0,count($getAllProductByTypeID)-5);
												// $getAllProductByTypeID = $product->getProductByTypeId6Rand($getProductByID[0]['type_id'],$_GET['id'],$dau,$dau+5);
												foreach ($getAllProductByTypeID as $value) :
												?>
													<li class="span3">
														<div class="thumbnail">
															<a href="product_details.php?id=<?php echo $value['id'] ?>"><img style="width:250px;height:250px" src="themes/images/products/<?php echo $value['image'] ?>" alt="" /></a>
															<div class="caption">
																<h5><?php echo catChuoi($value['name']); ?></h5>

																<h4 style="text-align:center"><a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?php echo str_replace(",",".",catSo(number_format($value['price'])))  ?>đ</a></h4>
															</div>
														</div>
													</li>
												<?php endforeach; ?>
												<?php
												$getAllProductByTypeID = $product->getProductByTypeId7($getProductByID[0]['manu_id'], $_GET['id']);
												// $dau =rand(0,count($getAllProductByTypeID)-5);
												// $getAllProductByTypeID = $product->getProductByTypeId6Rand($getProductByID[0]['type_id'],$_GET['id'],$dau,$dau+5);
												foreach ($getAllProductByTypeID as $value) :
												?>
													<li class="span3">
														<div class="thumbnail">
															<a href="product_details.php?id=<?php echo $value['id'] ?>"><img style="width:250px;height:250px" src="themes/images/products/<?php echo $value['image'] ?>" alt="" /></a>
															<div class="caption">
																<h5><?php echo catChuoi($value['name']); ?></h5>

																<h4 style="text-align:center"><a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?php echo str_replace(",",".",catSo(number_format($value['price'])))  ?>đ</a></h4>
															</div>
														</div>
													</li>
												<?php endforeach; ?>
												<?php
												if($getProductByID[0]['type_id']==1){
													$getAllProductByTypeID2 =  $product->getProductByTypeIdGioiHan(3);
													$getAllProductByTypeID3 =  $product->getProductByTypeIdGioiHan(4);
													$getAllProductByTypeID = array_merge($getAllProductByTypeID2,$getAllProductByTypeID3);
												}
												elseif($getProductByID[0]['type_id']==2){
													$getAllProductByTypeID2 =  $product->getProductByTypeIdGioiHan(2);
													$getAllProductByTypeID3 =  $product->getProductByTypeIdGioiHan(3);
													$getAllProductByTypeID = array_merge($getAllProductByTypeID2,$getAllProductByTypeID3);
												}
												elseif($getProductByID[0]['type_id']==3){

													$getAllProductByTypeID2 =  $product->getProductByTypeIdGioiHan(2);
													$getAllProductByTypeID3 =  $product->getProductByTypeIdGioiHan(5);
													$getAllProductByTypeID = array_merge($getAllProductByTypeID2,$getAllProductByTypeID3);
												}
												elseif($getProductByID[0]['type_id']==4){
													$getAllProductByTypeID2 =  $product->getProductByTypeIdGioiHan(2);
													$getAllProductByTypeID3 =  $product->getProductByTypeIdGioiHan(3);
													$getAllProductByTypeID = array_merge($getAllProductByTypeID2,$getAllProductByTypeID3);
												}
												else{
													$getAllProductByTypeID2 =  $product->getProductByTypeIdGioiHan(3);
													$getAllProductByTypeID3 =  $product->getProductByTypeIdGioiHan(4);
													$getAllProductByTypeID = array_merge($getAllProductByTypeID2,$getAllProductByTypeID3);
												}
												// $dau =rand(0,count($getAllProductByTypeID)-5);
												// $getAllProductByTypeID = $product->getProductByTypeId6Rand($getProductByID[0]['type_id'],$_GET['id'],$dau,$dau+5);
												foreach ($getAllProductByTypeID as $value) :
												?>
													<li class="span3">
														<div class="thumbnail">
															<a href="product_details.php?id=<?php echo $value['id'] ?>"><img style="width:250px;height:250px" src="themes/images/products/<?php echo $value['image'] ?>" alt="" /></a>
															<div class="caption">
																<h5><?php echo catChuoi($value['name']); ?></h5>

																<h4 style="text-align:center"><a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?php echo str_replace(",",".",catSo(number_format($value['price'])))  ?>đ</a></h4>
															</div>
														</div>
													</li>
												<?php endforeach; ?>
											</ul>
											<hr class="soft" />
										</div>
									</div>
									<br class="clr">
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- MainBody End ============================= -->
<?php endif;
include "footer.html"; ?>