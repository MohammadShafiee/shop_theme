<?php
$selectOptions = Set::combine($selectable['PropertyValue'], '{n}.id', '{n}.option');
echo $this->Form->input(
    'metas.'.$selectable['Property']['id'],
    array(
        'label' => $selectable['Property']['title'],
        'options' => $selectOptions,
        'empty' => __d('shop', 'select an option')
    )
);