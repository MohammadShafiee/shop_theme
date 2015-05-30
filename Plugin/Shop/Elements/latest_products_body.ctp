<?php
foreach($productList as $product):
    echo $this->element('product_box', compact('product'));
endforeach;