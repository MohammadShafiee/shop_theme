<style>
    .item .image img {
        min-width: inherit;
        min-height: inherit;
    }
</style>
<div class="container main-container">
    <?php
    echo $this->element('product_bread_crumb', array(
        'paths' => [],
        'currentPath' => $categoriesTree['Category']['title']
    ));
    ?>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="panel-group" id="accordionNo">
                <?php echo $this->element('categories_tree_panel'); ?>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
            <?php echo $this->Layout->blocks('category_top_slider');?>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <?php echo $this->element('category_carousel_latest_products'); ?>
            <?php echo $this->element('category_carousel_best_seller_products'); ?>
        </div>
    </div>
</div>