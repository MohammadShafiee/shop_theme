<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
                class="sr-only"> Toggle navigation </span> <span class="icon-bar"> </span> <span class="icon-bar"> </span>
            <span class="icon-bar"> </span></button>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-cart"><i
                class="fa fa-shopping-cart colorWhite"> </i> <span class="cartRespons colorWhite"> Cart ($210.00) </span>
        </button>
        <a class="navbar-brand " href="<?php echo Router::url('/'); ?>">
            <?php echo $this->Html->image('/images/logo.png', array('alt' => 'TSHOP')); ?>
        </a>
        <div class="search-box pull-right hidden-lg hidden-md hidden-sm">
            <div class="input-group">
                <button class="btn btn-nobg getFullSearch" type="button"><i class="fa fa-search"> </i></button>
            </div>
        </div>
    </div>
    <div class="navbar-collapse collapse">
        <?php echo $this->element('main_menu_items');?>
        <?php echo $this->element('view_card');?>
    </div>
</div>
<?php echo $this->element('search_panel');?>
