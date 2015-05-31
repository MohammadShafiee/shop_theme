<?php
class CustomHelper extends Helper {

    public $helpers = array('Html');
    //----------------------------------------------------------
    /**
     * Show Menu by Alias
     *
     * @param string $menuAlias Menu alias
     * @param array $options (optional)
     * @return string
     */
    public function menu($menuAlias, $options = array()) {
        $_options = array(
            'tag' => 'ul',
            'tagAttributes' => array(),
            'selected' => 'selected',
            'selectedTag' => 'a',
            'dropdown' => false,
            'dropdownClass' => 'sf-menu',
            'element' => 'Menus.menu',
            'caret' => false
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
    //----------------------------------------------------------
    /**
     * Nested Links
     *
     * @param array $links model output (threaded)
     * @param array $options (optional)
     * @param integer $depth depth level
     * @return string
     */
    public function nestedLinks($links, $options = array(), $depth = 1) {
        $_options = array();
        $options = array_merge($_options, $options);

        $output = '';
        foreach ($links as $link) {
            $linkAttr = array(
                'id' => 'link-' . $link['Link']['id'],
                'rel' => $link['Link']['rel'],
                'target' => $link['Link']['target'],
                'title' => $link['Link']['description'],
                'class' => $link['Link']['class'],
            );

            foreach ($linkAttr as $attrKey => $attrValue) {
                if ($attrValue == null) {
                    unset($linkAttr[$attrKey]);
                }
            }
            $linkAttr['escape'] = false;
            // if link is in the format: controller:contacts/action:view
            if (strstr($link['Link']['link'], 'controller:')) {
                $link['Link']['link'] = $this->linkStringToArray($link['Link']['link']);
            }

            // Remove locale part before comparing links
            if (!empty($this->params['locale'])) {
                $currentUrl = substr($this->_View->request->url, strlen($this->params['locale']));
            } else {
                $currentUrl = $this->_View->request->url;
            }

            $liAttributes = array(
                'class' => ''
            );
            if (
                (Router::url($link['Link']['link']) == Router::url('/' . $currentUrl))
                || (
                    !empty($link['children'])
                    && $this->__checkIsEqual($currentUrl, $link['children'])
                )
            ) {
                if (!isset($linkAttr['class'])) {
                    $linkAttr['class'] = '';
                }
                if(isset($options['selectedTag']) && $options['selectedTag'] === 'a')
                    $linkAttr['class'] .= ' ' . $options['selected'];
                else{
                    $liAttributes['class'] = $options['selected'];
                }
            }

            if (isset($link['children']) && count($link['children']) > 0 && $options['dropdown']) {
                $linkAttr['class'] = ' dropdown-toggle';
                $linkAttr['data-toggle'] = 'dropdown';
                if($depth == 1 && $options['caret']){
                    $link['Link']['title'] .= ' ' . $this->Html->tag('b', '', array('class' => 'caret'));
                }
            }
            $linkOutput = $this->Html->link($link['Link']['title'], $link['Link']['link'], $linkAttr);
            if (isset($link['children']) && count($link['children']) > 0) {
                $linkOptions = array_merge($options, array('tagAttributes' => array('class' => 'dropdown-menu')));

                $linkOutput .= $this->nestedLinks($link['children'], $linkOptions, $depth + 1);
                $liAttributes['class'] .= ' dropdown';
            }
            foreach ($liAttributes as $key => $value) {
                if($value == null)
                    unset($liAttributes[$key]);
            }
            $linkOutput = $this->Html->tag('li', $linkOutput, $liAttributes);
            $output .= $linkOutput;
        }
        if ($output != null) {
            $tagAttr = $options['tagAttributes'];
            if ($options['dropdown'] && $depth > 1) {
                $tagAttr['class'] = 'dropdown-menu';
            }
            $output .= $this->showCategories();
            $output = $this->Html->tag($options['tag'], $output, $tagAttr);
        }

        return $output;
    }

    //----------------------------------------------------------
    private function __checkIsEqual($currentUrl, $childrens) {
        $childsLinks = Set::extract('{n}.Link.link', $childrens);
        foreach ($childsLinks as $childLink) {
            if(Router::url($childLink) == Router::url('/' . $currentUrl)){
                return true;
            }
        }
        return false;
    }
    //----------------------------------------------------------
    /**
     * Converts strings like controller:abc/action:xyz/ to arrays
     *
     * @param string|array $link link
     * @return array
     */
    public function linkStringToArray($link) {
        if (is_array($link)) {
            $link = key($link);
        }
        $link = explode('/', $link);
        $linkArr = array();
        foreach ($link as $linkElement) {
            if ($linkElement != null) {
                $linkElementE = explode(':', $linkElement);
                if (isset($linkElementE['1'])) {
                    $linkArr[$linkElementE['0']] = $linkElementE['1'];
                } else {
                    $linkArr[] = $linkElement;
                }
            }
        }
        if (!isset($linkArr['plugin'])) {
            $linkArr['plugin'] = false;
        }

        return $linkArr;
    }
    //----------------------------------------------------------
    /**
     *
     * @param type $links
     * @param type $options
     * @param type $depth
     */
    public function nestedImageLinks($links, $options = array(), $depth = 1) {

        $output = '';
        foreach($links as $link){
            $imageOutput = $this->Html->image($link['Link']['link'], array('alt' => $link['Link']['title']));
            $linkOutput = $this->Html->link($imageOutput, '#', array('escape' => false));
            $output .= $this->Html->tag('li', $linkOutput);
        }
        if(!empty($output))
            $output = $this->Html->tag($options['tag'], $output, $options['tagAttributes']);

        return $output;
    }

    public function showCategories(){
        $categories = $this->_View->viewVars['categories_for_layout'];
        $menu_item = false;
        $output = '';
        foreach($categories as $category){
            if($category['Category']['parent_id'] == null){
                $menu_item = true;
                $output .= "<li class='dropdown megamenu-80width'>";
                $output .= "<a data-toggle='dropdown' class='dropdown-toggle' href='#'>".
                              $category['Category']['title'] . " <b class='caret'> </b> ".
                         "</a>";
            }
            if(!empty($category['children'])){
                $output .= '<ul class="dropdown-menu">';
                $output .= '<li class="megamenu-content">';
                foreach($category['children'] as $children){
                    $output .= '<ul class="col-lg-2  col-sm-2 col-md-2  unstyled noMarginLeft">
                              <li>
                                  <p><strong> ' . $children['Category']['title'] . ' </strong></p>
                              </li>';
                        foreach($children['children'] as $subChildren){
                            $output .= '<li><a href="#"> '. $subChildren['Category']['title'] .' </a></li>';
                        }
                    $output .= '</ul>';
                }
                $output .= '</li>';
                $output .= '</ul>';
            }
            if($menu_item){
                $output .= "</li>";
                $menu_item = false;
            }
        }
        return $output;
    }
}