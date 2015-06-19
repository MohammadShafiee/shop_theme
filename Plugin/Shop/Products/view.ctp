<?php
$this->append('bottomScript');
    echo $this->Html->script('/assets/js/smoothproducts.min.js');
$this->end();
?>
<div class="container main-container">
    <?php
    $offPrice = $product['Product']['price'] - ($product['Product']['price'] * $product['Product']['off'] / 100);
    echo $this->Html->script(array(
        '/assets/js/pace.min.js',
        '/assets/js/pace.min.js',
    ));
    ?>
    <?php
    echo $this->element('product_bread_crumb', array(
        'paths' => $product['CategoryPath'],
        'currentPath' => $product['Product']['title']
    ));?>
    <div class="row transitionfx">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="main-image sp-wrap col-lg-12 no-padding" style="display: inline-block;">
                <?php foreach($product['Attachment'] as $attachment): ?>
                    <?php
                    if(is_array($attachment)){
                        echo $this->Html->link(
                            $this->Html->image($attachment['path'], array(
                                'class' => 'img-responsive',
                                'alt' => 'img',
                            )),
                            $attachment['path'],
                            array(
                                'escape' => false,
                                'class' => 'sp-current'
                            )
                        );
                    }
                    ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-5">
            <?php echo $this->Form->create(null, array('action' => 'add_to_card'));?>
            <h1 class="product-title"> <?php echo $product['Product']['title']; ?></h1>
            <div class="product-price">
                <span class="price-sales"> <?php echo number_format($offPrice); ?></span>
                <span class="price-standard"><?php echo ($offPrice != $product['Product']['price']) ? number_format($product['Product']['price']) : ''; ?></span>
            </div>
            <div class="details-description">
                <p><?php echo $product['Product']['description']; ?></p>
            </div>
            <?php if(!empty($product['SelectableProperties'])): ?>
            <div class="productFilter productFilterLook2">
                <div class="filterBox">
                    <?php
                    foreach($product['SelectableProperties'] as $selectable){
                        echo $this->element('selectable_'.$selectable['Property']['type'], compact('selectable'));
                    }
                    ?>
                </div>
            </div>
            <?php endif; ?>
            <div class="cart-actions">
                <div class="addto">
                    <button onclick="javascript:productAddToCartForm(<?php echo $product['Product']['id']?>, $('form#ProductAddToCardForm').serialize());" class="button btn-cart cart first" title="Add to Cart" type="button">افزودن به سبد خرید</button>
                </div>
            </div>
            <?php echo $this->Form->end();?>
            <div class="clear"></div>
            <?php echo $this->element('product_details', array('details' => $product['ProductMeta']));?>
            <div style="clear:both"></div>
        </div>
    </div>
</div>