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
                <?php echo $this->element('categories_searchable_properties', compact('categoryProperties')); ?>
                <?php echo $this->Layout->blocks('category_side_panel');?>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
            <?php echo $this->Layout->blocks('view_category_center_top');?>
            <?php echo $this->element('category_products_list'); ?>
        </div>
    </div>
</div>