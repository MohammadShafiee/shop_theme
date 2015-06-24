<?php
    $named_products = isset($this->request->params['named']['p'])?$this->request->params['named']['p']:array();
    if(!is_array($named_products)){
        $named_products = array($named_products);
    }
    echo $this->element('Shop.search_price_property');
?>
<?php foreach($categoryProperties as $property): ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" href="#collapseProperty" class="collapseWill"> <?php echo $property['Property']['title']; ?> <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a> </h4>
    </div>
    <div id="collapseProperty" class="panel-collapse collapse in">
        <div class="panel-body smoothscroll maxheight300">
            <?php foreach($property['PropertyValue'] as $propertyValue): ?>
                <div class="block-element" data-property-id="<?php echo $property['Property']['id'];?>" data-property-value="<?php echo $propertyValue['id']; ?>">
                    <label>
                        <?php
                            $checked = false;
                            $search = $property['Property']['id'] . ':' . $propertyValue['id'];
                            if(array_search($search, $named_products) !== false){
                                $checked = true;
                            }
                        ?>
                        <input type="checkbox" <?php echo $checked?'checked':''; ?> name="p:<?php echo $property['Property']['id']; ?>" value="<?php echo $propertyValue['id'] ?>" />
                        <span><?php echo $propertyValue['option']; ?></span>
                    </label>
                </div>
            <?php endforeach; ?>
            <div class="block-element">
                <label> &nbsp; </label>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>