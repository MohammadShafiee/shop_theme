<?php
$selectOptions = Set::combine($selectable['PropertyValue'], '{n}.id', '{n}.option');
/*echo $this->Form->input(
    'metas.'.$selectable['Property']['id'],
    array(
        'label' => array(
            'text' => $selectable['Property']['title'] . ' : ',
            'style' => 'margin-top: 5px;',
        ),
        'options' => $selectOptions,
        'empty' => __d('shop', 'select an option'),
        'div' => array(
            'style' => 'float: right;width: 96%;',
        ),
        'class' => 'selectable_on_order'
    )
);*/
?>
<fieldset id="attributes" class="attribute_fieldset">
    <label class="attribute_label"><?php echo $selectable['Property']['title'] . ' :'; ?></label>
    <div class="attribute_list">
        <ul id="color_to_pick_list" class="clearfix">
            <?php $index = 0;$defaultPropertyValueId = null; foreach($selectOptions as $propertyValueId => $optionValue): ?>
            <li class="<?php if(!$index++){$defaultPropertyValueId = $propertyValueId;echo 'color-pick-selected'; } ?>">
                <a href="#" data-option-id="<?php echo $propertyValueId; ?>" class="color_pick" style="background: #<?php echo $optionValue; ?>"></a>
            </li>
            <?php endforeach; ?>
        </ul>
        <input type="hidden" id="color_pick_hidden" class="color_pick_hidden" name="data[metas][<?php echo $selectable['Property']['id']; ?>]" value="<?php echo $defaultPropertyValueId; ?>">
    </div> <!-- end attribute_list -->
</fieldset>
<style>
    #attributes {
        padding-bottom: 12px;
        padding-top: 6px;
        border: none;
    }
    #attributes .attribute_list {
        display: inline-block;
        margin-right: 25px;
        margin-bottom: -6px;
    }
    #attributes .attribute_list #color_to_pick_list {
        list-style-type: none;
    }
    #attributes .attribute_list ul {
        clear: both;
    }
    #attributes .attribute_list #color_to_pick_list li {
        float: right;
        margin: 0 0 0 5px;
        padding: 0;
        display: block;
        overflow: hidden;
        height: 18px;
        width: 18px;
        clear: none;
        list-style: none;
    }
    #attributes .attribute_list #color_to_pick_list li a.color_pick {
        display: block;
        height: 18px;
        width: 18px;
        cursor: pointer;
    }
    .color-pick-selected{
        border-radius: 50%;
        transition: all .1s;
    }
</style>
<script>
    $(function(){
        $(".color_pick").on("click", function(e){
            e.preventDefault();
            var propertyValueId = $(this).data("option-id");
            $("ul#color_to_pick_list li").removeClass("color-pick-selected");
            $(this).parents("li").addClass("color-pick-selected");
            $("input.color_pick_hidden").val(propertyValueId);
        });
    });
</script>