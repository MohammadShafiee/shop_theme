<div class="w100 productFilter clearfix">
    <p class="pull-left"> Showing <strong class="pagination-counter"><?php echo $this->Paginator->counter(); ?></strong>  </p>
    <div class="pull-right ">
        <div class="change-order pull-right">
            <select class="form-control" name="sort">
                <option value="0">Default sorting</option>
                <option value="price" <?php if(isset($this->request->params['named']['sort']) && $this->request->params['named']['sort'] == 'price')echo 'selected'; ?>>Price</option>
            </select>
            <select class="form-control" name="direction">
                <option value="0"><?php echo __d('shop', 'Sorting Type'); ?></option>
                <option value="asc" <?php if(isset($this->request->params['named']['direction']) && $this->request->params['named']['direction'] == 'asc')echo 'selected'; ?>><?php echo __d('shop', 'asc'); ?></option>
                <option value="desc" <?php if(isset($this->request->params['named']['direction']) && $this->request->params['named']['direction'] == 'desc')echo 'selected'; ?>><?php echo __d('shop', 'desc'); ?></option>
            </select>
            <button id="sort-products" class="btn btn-default pull-left" style="margin-right: 6px;min-height: 35px;"><?php echo __d('shop', 'Sort'); ?></button>
        </div>
        <div class="change-view pull-right"> <a href="#" title="Grid" class="grid-view"> <i class="fa fa-th-large"></i> </a> <a href="#" title="List" class="list-view "><i class="fa fa-th-list"></i></a> </div>
    </div>
</div>
<div class="category-products-container">
    <?php echo $this->element("Shop.category_products_items"); ?>
</div>