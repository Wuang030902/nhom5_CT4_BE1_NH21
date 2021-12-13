<?php
session_start();
if (isset($_SESSION['email'])) :
    include "header.php";
    require "models/order.php";
    $getorder = new Order;
    $getAllOrder = $getorder->getAllOrder();

?>
    <div id="mainBody">
        <div class="container">
            <div class="row">
                <!-- Sidebar ================================================== -->
                <div id="sidebar" class="span3">
                    <div class="well well-small"><a id="myCart" href="product_summary.html"><img src="themes/images/ico-cart.png" alt="cart">3 Items in your cart <span class="badge badge-warning pull-right">$155.00</span></a></div>
                    <ul id="sideManu" class="nav nav-tabs nav-stacked">
                        <li class="subMenu open"><a> ELECTRONICS [230]</a>
                            <ul>
                                <li><a class="active" href="products.html"><i class="icon-chevron-right"></i>Cameras (100) </a></li>
                                <li><a href="products.html"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a></li>
                                <li><a href="products.html"><i class="icon-chevron-right"></i>Mobile Phone (80)</a></li>
                                <li><a href="products.html"><i class="icon-chevron-right"></i>Sound & Vision (15)</a></li>
                            </ul>
                        </li>
                        <li class="subMenu"><a> CLOTHES [840] </a>
                            <ul style="display:none">
                                <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li>
                                <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Shoes (8)</a></li>
                                <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Hand Bags (5)</a></li>
                                <li><a href="products.html"><i class="icon-chevron-right"></i>Men's Clothings (45)</a></li>
                                <li><a href="products.html"><i class="icon-chevron-right"></i>Men's Shoes (6)</a></li>
                                <li><a href="products.html"><i class="icon-chevron-right"></i>Kids Clothing (5)</a></li>
                                <li><a href="products.html"><i class="icon-chevron-right"></i>Kids Shoes (3)</a></li>
                            </ul>
                        </li>
                        <li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
                            <ul style="display:none">
                                <li><a href="products.html"><i class="icon-chevron-right"></i>Angoves (35)</a></li>
                                <li><a href="products.html"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>
                                <li><a href="products.html"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>
                                <li><a href="products.html"><i class="icon-chevron-right"></i>Louis Bernard (45)</a></li>
                                <li><a href="products.html"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>
                                <li><a href="products.html"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>
                                <li><a href="products.html"><i class="icon-chevron-right"></i>Garden (3)</a></li>
                                <li><a href="products.html"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>
                            </ul>
                        </li>
                        <li><a href="products.html">HEALTH & BEAUTY [18]</a></li>
                        <li><a href="products.html">SPORTS & LEISURE [58]</a></li>
                        <li><a href="products.html">BOOKS & ENTERTAINMENTS [14]</a></li>
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
                    <h3> Đơn hàng [ <small>3 Item(s) </small>]<a href="products.html" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>
                    <hr class="soft" />

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Ngày mua</th>
                                <th>Tổng tiền</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($getAllOrder as $value): ?>
                            <tr>
                                <td> <?php  echo $value['madonhang'] ?></td>
                                <td>
                                <?php  echo $value['ngaymua'] ?>
                                </td>
                                <td><?php echo str_replace(",",".",number_format($value['tongtien']))  ?></td>
                                <td><?php  echo $value['trangthai'] ?></td>
                            </tr>
                            <?php endforeach; ?>
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
endif; ?>