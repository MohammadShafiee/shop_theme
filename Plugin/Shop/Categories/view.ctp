<div class="container main-container">
    <?php $this->set('currentPath', $categoriesTree['Category']['title']);?>
    <?php echo $this->Form->create('Category', array(
        'url' => Router::url($this->request->here(false), true),
        'type' => 'GET',
        'class' => 'form-inline filtering-form',
        'onSubmit' => 'filtering()',
    ));?>
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
            <div class="loader">
                <?php echo $this->Html->image('/images/loader/loader.gif'); ?>
            </div>
        </div>
    <?php echo $this->Form->end(); ?>
</div>
<style>
    .minict_wrapper {
        width: 47%;
        float: right !important;
    }
</style>