<?php echo $this->Layout->blocks('index_top_slider');?>
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
            <!--Echo element latest products ( carrousel )-->
            <!--Echo element best selling products ( carrousel )-->
        </div>
<!--        --><?php //echo $this->Layout->blocks('category_page');?>
    </div>
</div>