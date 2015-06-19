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
                <div class="block-element" data-property-id="<?php echo $property['Property']['id'];?>" data-property-value="<?php echo $propertyValue['id']; ?>">
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
<script>
    $(function(){
        var properties = {};
        $('div.block-element').on('click', 'span.icr', function(){
            var blk_element = $(this).parents('div.block-element');
            var property_id = blk_element.data('property-id');
            var property_value = blk_element.data('property-value');
            if(properties[property_id] == undefined){
                properties[property_id] = {values:[]};
            }
            var property_key = properties[property_id].values.indexOf(property_value);
            if(property_key < 0){
                properties[property_id].values.push(property_value);
            }else{
                properties[property_id].values.splice(property_key, 1);
            }
            $("div.loader").show();
            $.ajax({
                type: "POST",
                url: "<?php echo $this->request->here(); ?>",
                data: JSON.stringify(properties),
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(response){
                    if (response.status == 'success') {
                        $('div.category-products-container').html(response.content);
                    }
                    setTimeout( "$('div.loader').hide();", 400 );
                }
            });
        });
    });
</script>