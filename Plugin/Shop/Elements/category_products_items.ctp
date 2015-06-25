<div class="row categoryProduct xsResponse clearfix">
    <?php
    foreach($products as $product){
        echo $this->element('Shop.category_product_box', compact('product'));
    }
    ?>
</div>

<?php if($this->Paginator->param('pageCount') > 1): ?>
    <div class="w100 categoryFooter">
        <div class="pagination pagination-large">
            <ul class="pagination">
                <?php
                echo $this->Paginator->next(__('بعد'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                echo $this->Paginator->prev(__('قبل'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
<?php
    $segments = $this->request->params['named'];
    $window_href_segments = [];
    if(isset($segments['p'])){
        if(!is_array($segments['p'])){
            $segments['p'] = array($segments['p']);
        }
        foreach($segments['p'] as $property){
            list($property_id, $property_value) = explode(":", $property);
            $object = new stdClass();
            $object->name = 'p:' . $property_id;
            $object->value = $property_value;
            $window_href_segments[] = $object;
        }
        unset($segments['p']);
    }
    $direction_ignore = false;
    foreach($segments as $key => $value){
        if($key == 'sort' && $value == 'Product.id'){
            $direction_ignore = true;
            continue;
        }
        if($key == 'direction' && $direction_ignore)continue;
        $object = new stdClass();
        $object->name = $key;
        $object->value = $value;
        $window_href_segments[] = $object;
    }
?>
<?php
    $baseUrl = $this->request->url;
    $urlParts = explode('/', $baseUrl);
    foreach($urlParts as $key => $part){
        if(strpos($part, ':')){
            unset($urlParts[$key]);
        }
    }
    $baseUrl = Router::fullBaseUrl() . $this->request->webroot . implode('/', $urlParts);
?>
<script>
    var base_url = '<?php echo $baseUrl; ?>';
    var window_href_segments = <?php echo json_encode($window_href_segments) ?>;
    var pageCounter = '<?php echo $this->Paginator->counter(); ?>';
</script>