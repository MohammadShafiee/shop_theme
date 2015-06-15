<!--Slider-->
<!--Last Products-->
<!--Top Products-->
<?php echo $this->Layout->blocks('top_slider');?>
<div class="container main-container">
    <?php
    echo $this->element('product_bread_crumb', array(
        'paths' => [],
        'currentPath' => $categoriesTree['Category']['title']
    ));
    ?>
    <div class="row">
        <?php echo $this->element('categories_tree_panel'); ?>
        <?php echo $this->element('productsList'); ?>
    </div>
</div>