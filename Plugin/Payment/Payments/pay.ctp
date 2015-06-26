<?php echo $this->Form->create('Payment');?>
<div class="container main-container">
    <?php $this->set('currentPath', 'سبد خرید');?>
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-7">
            <h1 class="section-title-inner">
                <span><i class="glyphicon glyphicon-shopping-cart"></i> سبد خرید </span>
            </h1>
        </div>
    </div>
    <div class="row">
        <?php echo $this->Payment->showFacture($facture);?>
    </div>
    <div style="clear:both"></div>
</div>
<?php echo $this->Form->end();?>