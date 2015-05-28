<?php
class CustomHelper extends Helper {

    public function menu($menuAlias, $options = array()) {
        debug('aaaaaaaaaaaaaaa');die;
        $_options = array(
            'tag' => 'ul',
            'tagAttributes' => array(),
            'selected' => 'selected',
            'dropdown' => false,
            'dropdownClass' => 'sf-menu',
            'element' => 'Menus.menu',
        );
        $options = array_merge($_options, $options);

        if (!isset($this->_View->viewVars['menus_for_layout'][$menuAlias])) {
            return false;
        }
        $menu = $this->_View->viewVars['menus_for_layout'][$menuAlias];
        $output = $this->_View->element($options['element'], array(
            'menu' => $menu,
            'options' => $options,
        ));
        return $output;
    }
}