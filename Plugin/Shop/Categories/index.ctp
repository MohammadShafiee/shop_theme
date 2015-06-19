<div class="container main-container">
    <?php
    echo $this->element('product_bread_crumb', array(
        'paths' => [],
        'currentPath' => $categoriesTree['Category']['title']
    ));
    ?>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
            <?php echo $this->element('categories_tree_panel'); ?>
            <?php echo $this->Layout->blocks('category_side_panel');?>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
            <?php echo $this->Layout->blocks('index_category_center_top');?>
            <?php echo $this->element('category_carousel_latest_products'); ?>
            <?php echo $this->element('category_carousel_best_seller_products'); ?>
        </div>
    </div>
</div>