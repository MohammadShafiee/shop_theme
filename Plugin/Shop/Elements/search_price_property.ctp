<?php
    $minPrice = !empty($minPrice) ? $minPrice : '';
    $maxPrice = !empty($maxPrice) ? $maxPrice : '';
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a class="collapseWill" data-toggle="collapse" href="#collapsePrice">
                <?php echo __d('shop', 'Price'); ?>
                <span class="pull-left"> <i class="fa fa-caret-right"></i></span>
            </a>
        </h4>
    </div>
    <div id="collapsePrice" class="panel-collapse collapse in">
        <div class="panel-body priceFilterBody">
            <p><?php echo __d('shop', 'Enter a Price range '); ?></p>
            <?php
            echo $this->Html->div('form-group',
                '<input type="text" class="form-control" name="minPrice" value="' .$minPrice. '" id="minPrice" placeholder="'.__d('shop', 'From').'">'
            );
            ?>
            <?php
            echo $this->Html->div('form-group',
                '<input type="text" class="form-control" name="maxPrice" value="'. $maxPrice .'" id="maxPrice" placeholder="' . __d('shop', 'To') . '">'
            );?>
            <button id="filter-by-price" class="btn btn-default pull-left"><?php echo __d('shop', 'check'); ?></button>
        </div>
    </div>
</div>