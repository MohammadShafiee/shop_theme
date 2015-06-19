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
            <?php echo $this->Form->create('Category', array(
                'url' => Router::url($this->request->here(false), true),
                'type' => 'GET',
                'class' => 'form-inline ',
            ));
            echo $this->Html->div('form-group',
                '<input type="text" class="form-control" name="minPrice" value="' .$minPrice. '" id="minPrice" placeholder="'.__d('shop', 'From').'">'
            );
            ?>
            <div class="form-group sp"> - </div>
            <?php
            echo $this->Html->div('form-group',
                '<input type="text" class="form-control" name="maxPrice" value="'. $maxPrice .'" id="maxPrice" placeholder="' . __d('shop', 'To') . '">'
            );?>
            <?php if( isset($this->request->query['sort']) && ($this->request->query['sort']) ): ?>
                <input type="hidden" name="sort" value="<?php echo $this->request->query['sort']; ?>">
            <?php endif; ?>
            <?php if( isset($this->request->query['direction'])  && ($this->request->query['direction']) ): ?>
                <input type="hidden" name="direction" value="<?php echo $this->request->query['direction']; ?>">
            <?php endif; ?>
            <input type="submit" class="btn btn-default pull-left" value="<?php echo __d('shop', 'check'); ?>">
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>