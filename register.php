<?php include "header.php" ?>
<!-- Header End====================================================================== -->
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
                    <li class="active">Registration</li>
                </ul>
                <h3> Registration</h3>
                <div class="well">
                    <!--
	<div class="alert alert-info fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	<div class="alert fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	 <div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div> -->
                    <form class="form-horizontal" method="POST" >
                        <h4>Your personal information</h4>
                        <div class="control-group">
                            <label class="control-label" for="inputFname1">First name <sup>*</sup></label>
                            <div class="controls">
                                <input type="text" id="inputFname1" placeholder="First Name">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputLnam">Last name <sup>*</sup></label>
                            <div class="controls">
                                <input type="text" id="inputLnam" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input_email">Email <sup>*</sup></label>
                            <div class="controls">
                                <input type="text" id="input_email" placeholder="Email">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
                            <div class="controls">
                                <input type="password" id="inputPassword1" placeholder="Password">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <input type="hidden" name="email_create" value="1">
                                <input type="hidden" name="is_new_customer" value="1">
                                <input class="btn btn-large btn-success" type="submit" value="Register" />
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- MainBody End ============================= -->
<?php include "footer.html"; ?>