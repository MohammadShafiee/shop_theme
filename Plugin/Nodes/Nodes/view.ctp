<?php $this->Nodes->set($node); ?>
<div class="container main-container">
    <div class="row innerPage">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row userInfo">
                <div class="col-xs-12 col-sm-12">
                    <h1 class="text-left"> <?php echo $this->Nodes->field('title'); ?> </h1>
                    <?php echo $this->Nodes->body();?>
                </div>
            </div>
        </div>
    </div>
</div>