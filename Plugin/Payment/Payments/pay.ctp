<?php
//echo $this->Html->css('Payment.style', array('inline' => false));
//echo $this->Form->create('Payment');
//echo $this->Payment->showFacture($facture);
//?>
<!---->
<!--<div>-->
<!--    --><?php //echo $this->Payment->showExtraFactureItems();?>
<!--    --><?php //echo $this->Payment->showOfflineWayList();?>
<!--    <div class="clear"></div>-->
<!--    --><?php //echo $this->Payment->showOnlineWayList();?>
<!--</div>-->
<!---->
<?php
//echo $this->Form->submit(__d('payment', 'Pay facture'));
//echo $this->Form->end();
//?>
<?php echo $this->Form->create('Payment');?>
<div class="container main-container">
    <?php
    echo $this->element('Shop.product_bread_crumb', array(
        'currentPath' => 'سبد خرید',
        'paths' => array()
    ));
    ?>
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