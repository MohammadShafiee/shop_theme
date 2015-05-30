<?php
class CustomHelper extends Helper {

    public function menu($menuAlias, $options = array()) {
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

    public function showCategories(){
        $categories = $this->_View->viewVars['categories_for_layout'];
        $menu_item = false;
        foreach($categories as $category){
            if($category['Category']['parent_id'] == null){
                $menu_item = true;
                echo "<li class='dropdown megamenu-80width'>";
                    echo "<a data-toggle='dropdown' class='dropdown-toggle' href='#'>".
                              $category['Category']['title'] . " <b class='caret'> </b> ".
                         "</a>";
            }
            if(!empty($category['children'])){
                echo '<ul class="dropdown-menu">';
                    echo '<li class="megamenu-content">';
                foreach($category['children'] as $children){
                    echo '<ul class="col-lg-2  col-sm-2 col-md-2  unstyled noMarginLeft">
                              <li>
                                  <p><strong> ' . $children['Category']['title'] . ' </strong></p>
                              </li>';
                        foreach($children['children'] as $subChildren){
                            echo '<li><a href="#"> '. $subChildren['Category']['title'] .' </a></li>';
                        }
                    echo '</ul>';
                }
                    echo '</li>';
                echo '</ul>';
            }
            if($menu_item){
                echo "</li>";
                $menu_item = false;
            }
        }
    }
}