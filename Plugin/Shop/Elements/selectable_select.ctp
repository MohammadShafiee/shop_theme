<?php
$selectOptions = Set::extract('{n}.id', $selectable['PropertyValue']);
echo $this->Form->input(
    'metas.'.$selectable['Property']['id'],
    array(
        'label' => $selectable['Property']['title'],
        'options' => $selectOptions,
        'empty' => __d('shop', 'select an option')
    )
);