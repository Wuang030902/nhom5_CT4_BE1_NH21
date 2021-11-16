<?php include "header.php" ?>
<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
			<div class="item active">
				<div class="container">
					<a href="register.html"><img style="width:100%" src="themes/images/carousel/1.png" alt="special offers" /></a>
					<div class="carousel-caption">
						<h4>Hello Thumbnail label</h4>
						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="container">
					<a href="register.html"><img style="width:100%" src="themes/images/carousel/2.png" alt="" /></a>
					<div class="carousel-caption">
						<h4>Second Thumbnail label</h4>
						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="container">
					<a href="register.html"><img src="themes/images/carousel/3.png" alt="" /></a>
					<div class="carousel-caption">
						<h4>Second Thumbnail label</h4>
						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					</div>

				</div>
			</div>
			<div class="item">
				<div class="container">
					<a href="register.html"><img src="themes/images/carousel/4.png" alt="" /></a>
					<div class="carousel-caption">
						<h4>Second Thumbnail label</h4>
						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					</div>

				</div>
			</div>
			<div class="item">
				<div class="container">
					<a href="register.html"><img src="themes/images/carousel/5.png" alt="" /></a>
					<div class="carousel-caption">
						<h4>Second Thumbnail label</h4>
						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="container">
					<a href="register.html"><img src="themes/images/carousel/6.png" alt="" /></a>
					<div class="carousel-caption">
						<h4>Second Thumbnail label</h4>
						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	</div>
</div>
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
				<!-- Sidebar end=============================================== -->
				<div class="span9">
					<div class="well well-small">
						<h4>Featured Products <small class="pull-right">200+ featured products</small></h4>
						<div class="row-fluid">
							<div id="featured" class="carousel slide">
								<div class="carousel-inner">
									<div class="item active">
										<ul class="thumbnails">
											<?php
											$getAllProductsTypeID1 = $product->getAllProductsTypeID1();
											foreach ($getAllProductsTypeID1 as $value) :
											?>
												<li class="span3">
													<div class="thumbnail">
														<i class="tag"></i>
														<a href="product_details.html"><img src="themes/images/products/<?php echo $value['image'] ?>" alt=""></a>
														<div class="caption">
															<h5><?php echo $value['name'] ?></h5>
															<h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right"><?php echo number_format($value['price']) ?>VND</span></h4>
														</div>
													</div>
												</li>
											<?php endforeach ?>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails">
											<?php
											$getAllProductsTypeID4 = $product->getAllProductsTypeID4();
											foreach ($getAllProductsTypeID4 as $value) :
											?>
												<li class="span3">
													<div class="thumbnail">
														<i class="tag"></i>
														<a href="product_details.html"><img src="themes/images/products/<?php echo $value['image'] ?>" alt=""></a>
														<div class="caption">
															<h5><?php echo $value['name'] ?></h5>
															<h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right"><?php echo number_format($value['price']) ?>VND</span></h4>
														</div>
													</div>
												</li>
											<?php endforeach ?>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails">
											<?php
											$getAllProductsTypeID2 = $product->getAllProductsTypeID2();
											foreach ($getAllProductsTypeID2 as $value) :
											?>
												<li class="span3">
													<div class="thumbnail">
														<i class="tag"></i>
														<a href="product_details.html"><img src="themes/images/products/<?php echo $value['image'] ?>" alt=""></a>
														<div class="caption">
															<h5><?php echo $value['name'] ?></h5>
															<h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right"><?php echo number_format($value['price']) ?>VND</span></h4>
														</div>
													</div>
												</li>
											<?php endforeach ?>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails">
											<?php
											$getAllProductsTypeID3 = $product->getAllProductsTypeID3();
											foreach ($getAllProductsTypeID3 as $value) :
											?>
												<li class="span3">
													<div class="thumbnail">
														<i class="tag"></i>
														<a href="product_details.html"><img src="themes/images/products/<?php echo $value['image'] ?>" alt=""></a>
														<div class="caption">
															<h5><?php echo $value['name'] ?></h5>
															<h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right"><?php echo number_format($value['price']) ?>VND</span></h4>
														</div>
													</div>
												</li>
											<?php endforeach ?>
										</ul>
									</div>
								</div>
								<a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
								<a class="right carousel-control" href="#featured" data-slide="next">›</a>
							</div>
						</div>
					</div>

					<h4>Latest Products </h4>
					<ul class="thumbnails">
						<?php foreach ($getAllProduct as $value) : ?>
							<li class="span3">
								<div class="thumbnail">
									<a href="product_details.html"><img src="themes/images/products/<?php echo $value['image'] ?>" alt="" /></a>
									<div class="caption">
										<h5><?php echo $value['name'] ?></h5>
										<p>
											Lorem Ipsum is simply dummy text.
										</p>

										<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?php echo number_format($value['price']) ?></a></h4>
									</div>
								</div>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php include "footer.html" ?>