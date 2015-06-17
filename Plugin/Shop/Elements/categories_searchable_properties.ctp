<?php echo $this->element('Shop.search_price_property'); ?>
<?php foreach($categoryProperties as $property): ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" href="#collapseProperty" class="collapseWill"> <?php echo $property['Property']['title']; ?> <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a> </h4>
    </div>
    <div id="collapseProperty" class="panel-collapse collapse in">
        <div class="panel-body smoothscroll maxheight300">
            <?php foreach($property['PropertyValue'] as $propertyValue): ?>
                <div class="block-element">
                    <label>
                        <input type="checkbox" name="<?php echo $propertyValue['option']; ?>" value="<?php echo $propertyValue['id'] ?>" style="display: none;"/>
                        <span><?php echo $propertyValue['option']; ?></span> </label>
                </div>
            <?php endforeach; ?>
            <div class="block-element">
                <label> &nbsp; </label>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>