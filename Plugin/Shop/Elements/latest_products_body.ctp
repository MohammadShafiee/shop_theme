<?php
foreach($productList as $product):
    echo $this->element('Shop.product_box', compact('product'));
endforeach;