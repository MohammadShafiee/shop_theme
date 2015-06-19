<div class="owl-carousel owl-theme" style="direction: ltr !important;">
<?php
foreach($productList as $product):
    echo $this->element('Shop.carousel_product_box', compact('product'));
endforeach;
?>
</div>