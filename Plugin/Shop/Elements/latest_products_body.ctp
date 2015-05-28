<?php foreach($productList as $product): ?>
<div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>
        <div class="image">
            <div class="quickview">
                <a title="Quick View" class="btn btn-xs  btn-quickview" data-target="#product-details-modal" data-toggle="modal"> Quick View </a>
            </div><a href="product-details.html">
                <?php echo $this->Html->image('/images/product/34.jpg', array(
                    'class' => 'img-responsive',
                    'alt' => 'img',
                )); ?>
            </a>
            <div class="promotion"> <span class="new-product"> NEW</span> <span class="discount">15% OFF</span> </div>
        </div>
        <div class="description">
            <h4><a href="product-details.html"><?php echo $product['Product']['title']; ?></a></h4>
            <p><?php echo $product['Product']['description']; ?></p>
            <span class="size">XL / XXL / S </span> </div>
        <div class="price"> <span><?php echo number_format($product['Product']['price']); ?></span> <span class="old-price">$75</span> </div>
        <div class="action-control"> <a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a> </div>
    </div>
</div>
<?php endforeach; ?>