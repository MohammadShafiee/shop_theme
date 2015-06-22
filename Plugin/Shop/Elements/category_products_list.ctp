<?php
    $paginator = $this->Paginator;
 ?>
<div class="w100 productFilter clearfix">
    <p class="pull-left"> Showing <strong><?php echo $paginator->counter(); ?></strong>  </p>
    <div class="pull-right ">
        <div class="change-order pull-right">
            <select class="form-control" name="sort">
                <option value="0">Default sorting</option>
                <option value="price" <?php if(isset($this->request->query['sort']) && $this->request->query['sort'] == 'price')echo 'selected'; ?>>Price</option>
            </select>
            <select class="form-control" name="direction">
                <option value="0"><?php echo __d('shop', 'Sorting Type'); ?></option>
                <option value="asc" <?php if(isset($this->request->query['direction']) && $this->request->query['direction'] == 'asc')echo 'selected'; ?>><?php echo __d('shop', 'asc'); ?></option>
                <option value="desc" <?php if(isset($this->request->query['direction']) && $this->request->query['direction'] == 'desc')echo 'selected'; ?>><?php echo __d('shop', 'desc'); ?></option>
            </select>
            <button id="sort-products" class="btn btn-default pull-right" style="margin-right: 6px;min-height: 35px;"><?php echo __d('shop', 'Sort'); ?></button>
        </div>
        <div class="change-view pull-right"> <a href="#" title="Grid" class="grid-view"> <i class="fa fa-th-large"></i> </a> <a href="#" title="List" class="list-view "><i class="fa fa-th-list"></i></a> </div>
    </div>
</div>

<div class="row categoryProduct xsResponse clearfix">
    <?php
    foreach($products as $product){
        echo $this->element('Shop.category_product_box', compact('product'));
    }
    ?>
</div>

<?php if($paginator->param('pageCount') > 1): ?>
<div class="w100 categoryFooter">
    <div class="pagination pagination-large">
        <ul class="pagination">
            <?php
            echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
            echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
            echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
            ?>
        </ul>
    </div>
</div>
<?php endif; ?>
