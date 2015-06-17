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
            <?php echo $this->Form->create('Category', array(
                'type' => 'POST',
                'class' => 'form-inline ',
            ));
            echo $this->Html->div('form-group',
                '<input type="text" class="form-control" name="minPrice" id="minPrice" placeholder="1000">'
            );
            ?>
            <div class="form-group sp"> - </div>
            <?php
            echo $this->Html->div('form-group',
                '<input type="text" class="form-control" name="maxPrice" id="maxPrice" placeholder="100000">'
            );?>
            <input type="submit" class="btn btn-default pull-right" value="<?php echo __d('shop', 'check'); ?>">
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>