<?php
$selectOptions = Set::combine($selectable['PropertyValue'], '{n}.id', '{n}.option');
echo $this->Form->input(
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
    )
);