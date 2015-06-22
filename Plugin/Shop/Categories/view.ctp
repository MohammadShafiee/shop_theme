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
                <div class="category-products-container">
                    <?php echo $this->element('category_products_list'); ?>
                </div>
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
        var window_href_segments = window.location.href.split("/");
        function filtering(){
            $("div.loader").show();
            var $inputs = $('form.filtering-form :input:checked, form.filtering-form :input:text');
            var url_segments = [], index = 0;
            $inputs.each(function(){
                $this = $(this);
                if($this.val() != '' && $this.val() != undefined){
                    url_segments[index++] = this.name + ':' + $this.val();
                }
            });
            var find_segment = 0;
            for(var i = 0; i < url_segments.length; i++){
                if( (find_segment = window_href_segments.indexOf(url_segments[i]) ) >= 0 ){
                    delete url_segments[i];
                }
            }
            var new_url = '';
            url_segments.forEach(function(element){
                new_url += element + '/' ;
            });
            new_url = new_url.substring(0, new_url.length-1);
            if(new_url != ""){
                new_url = '/' + new_url ;
            }
            new_url = window.location.href + new_url;
            window.history.pushState("", "", new_url);
            $.ajax({
                type: "GET",
                url: window.location.href,
                dataType: "text",
                success: function(response){
                    $('div.category-products-container').html(response);
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