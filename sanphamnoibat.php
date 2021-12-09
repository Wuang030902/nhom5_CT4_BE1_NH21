<?php
$getAllProductNew = $product->getTenNewProducts();
foreach ($getAllProductNew as $value) :
?>
    <div class="thumbnail">
        <img src="themes/images/products/<?php echo $value['image'] ?>" alt="Bootshop panasonoc New camera" />
        <div class="caption">
            <h5><?php echo $value['manu_name'] ?></h5>
            <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?php echo $value['price'] ?></a></h4>
        </div>
    </div><br />
<?php endforeach; ?>
<div class="thumbnail">
    <img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
    <div class="caption">
        <h5>Payment Methods</h5>
    </div>
</div>
