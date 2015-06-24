<div class="container main-container">
    <?php
    echo $this->element('product_bread_crumb', array(
        'paths' => [],
        'currentPath' => $categoriesTree['Category']['title']
    ));
    ?>
    <?php echo $this->Form->create('Category', array(
        'url' => Router::url($this->request->here(false), true),
        'type' => 'GET',
        'class' => 'form-inline filtering-form',
        'onSubmit' => 'filtering()',
    ));?>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="panel-group" id="accordionNo">
                    <?php echo $this->element('categories_searchable_properties', compact('categoryProperties')); ?>
                    <?php echo $this->Layout->blocks('category_side_panel');?>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <?php echo $this->Layout->blocks('view_category_center_top');?>
                <?php echo $this->element('category_products_list'); ?>
            </div>
            <div class="loader">
                <?php echo $this->Html->image('/images/loader/loader.gif'); ?>
            </div>
        </div>
    <?php echo $this->Form->end(); ?>
</div>
<style>
    .minict_wrapper {
        width: 40%;
        float: right !important;
    }
</style>
<script>
    $(function(){
        function filtering(){
            $("div.loader").show();
            var data = $('form.filtering-form').serializeArray();
            var fix_elements = ['sort', 'direction', 'minPrice', 'maxPrice'];
            $.each(data, function(key, element){
                var find_segment = false;
                var replace_segment = false;
                var is_fix_element = fix_elements.indexOf(element.name);
                if(element.value != "" && element.value != 0){
                    $.each(window_href_segments, function(k, e){
                        if(e.name == element.name){
                            if(e.value == element.value){
                                find_segment = true;
                                window_href_segments[k].foundInForm = true
                            }else if(is_fix_element >= 0){
                                replace_segment = k;
                            }
                            return false;
                        }
                    });
                    if(replace_segment !== false){
                        window_href_segments[replace_segment].value = element.value;
                        window_href_segments[replace_segment].foundInForm = true;
                    }
                    else if(!find_segment){
                        var length = window_href_segments.length;
                        element.foundInForm = true;
                        window_href_segments[length] = element;
                    }
                }
            });
            $.each(window_href_segments, function(k, e){
                if( (e.foundInForm == undefined) || e.foundInForm == false ){
                    delete window_href_segments[k];
                }
            });
            var new_url = '';
            if(window_href_segments.length > 0){
                $.each(window_href_segments, function(key, element){
                    if(element != undefined){
                        new_url += element.name + ':' + element.value + '/' ;
                    }
                });
            }
            new_url = new_url.substring(0, new_url.length-1);
            if(new_url != ""){
                new_url = '/' + new_url ;
            }
            var base_url = 'http://localhost/_croogo/shop/category/26';
            new_url = base_url + new_url;
            console.log(new_url);
            window.history.pushState("", "", new_url);
            $.ajax({
                type: "GET",
                url: window.location.href,
                dataType: "text",
                success: function(response){
                    $('div.category-products-container').html(response);
                    $('strong.pagination-counter').text(pageCounter);
                    setTimeout( "$('div.loader').hide();", 400 );
                },
                error: function(){}
            });
        }
        $('body').on('click', 'span.icr, button#filter-by-price, button#sort-products', function(e){
            e.preventDefault();
            filtering();
        });
    });
</script>