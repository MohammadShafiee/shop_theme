<?php
    echo $this->Custom->menu('main', array(
        'tagAttributes' => array(
            'class' => 'nav navbar-nav'
        ),
        'selected' => 'active',
        'selectedTag' => 'li',
        'dropdown' => true,
        'dropdownClass' => 'dropdown-menu',
        'element' => 'main_nestedlink_menu'
));
