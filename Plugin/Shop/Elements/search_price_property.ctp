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
            <form action="" method="POST" class="form-inline " role="form">
                <div class="form-group">
                    <input type="text" class="form-control" name="minPrice" id="minPrice" placeholder="1000">
                </div>
                <div class="form-group sp"> - </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="maxPrice" id="maxPrice" placeholder="10000">
                </div>
                <button type="submit" class="btn btn-default pull-right"><?php echo __d('shop', 'check'); ?></button>
            </form>
        </div>
    </div>
</div>