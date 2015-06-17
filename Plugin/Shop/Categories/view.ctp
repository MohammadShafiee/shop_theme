<div class="container main-container">
    <?php
    echo $this->element('product_bread_crumb', array(
        'paths' => [],
        'currentPath' => $categoriesTree['Category']['title']
    ));
    ?>
    <div class="row">
        <?php echo $this->element('categories_tree_panel'); ?>
        <div class="col-lg-9 col-md-9 col-sm-12">
            <?php echo $this->Layout->blocks('category_top_slider');?>
            <?php echo $this->element('category_products_list'); ?>
        </div>
    </div>
</div>