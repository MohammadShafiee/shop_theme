<div class="morePost row featuredPostContainer style2 globalPaddingTop ">
    <h3 class="section-title style2 text-center"><span>FEATURES PRODUCT</span></h3>
    <div class="container">
        <div class="row xsResponse">
            <?php
                foreach($products as $product):
            ?>
                <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6" id="prod-<?php echo $product['Product']['id']; ?>">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>
                        <div class="image">
                            <div class="quickview">
                                <a title="Quick View" class="btn btn-xs  btn-quickview" data-target="#product-details-modal" data-toggle="modal">
                                    <?php echo __d('shop', 'Quick View'); ?>
                                </a>
                            </div>
                            <a href="<?php echo Router::url(array( 'plugin' => 'shop', 'controller' => 'products', 'action' => 'view', $product['Product']['id'] )); ?>">
                                <?php echo $this->Html->image($product['Attachment'][0]['path'], array(
                                    'class' => 'img-responsive',
                                    'alt' => 'img',
                                ));
                                ?>
                            </a>
                            <div class="promotion"> <span class="new-product"> NEW</span> <span class="discount"><?php echo $product['Product']['off'] ?>% OFF</span> </div>
                        </div>
                        <div class="description">
                            <h4>
                                <a href="<?php echo Router::url(array( 'plugin' => 'shop', 'controller' => 'products', 'action' => 'view', $product['Product']['id'] )); ?>">
                                    <?php echo $product['Product']['title']; ?>
                                </a>
                            </h4>
                            <p><?php echo $product['Product']['description']; ?> </p>
                            <span class="size">XL / XXL / S </span>
                        </div>
                        <div class="price">
                            <span><?php echo $product['Product']['price']; ?></span>
                            <span class="old-price">$75</span>
                        </div>
                        <div class="action-control">
                            <a class="btn btn-primary">
                                <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"></i> Add to cart </span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
