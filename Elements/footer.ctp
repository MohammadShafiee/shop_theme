<footer>
    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left"> &copy; TSHOP 2014. All right reserved. </p>

            <div class="pull-right paymentMethodImg">
                <?php
                echo $this->Html->image('/images/site/payment/master_card.png', array(
                    'height' => "30",
                    'class' => "pull-right"
                ));
                echo $this->Html->image('/images/site/payment/visa_card.png', array(
                    'height' => "30",
                    'class' => "pull-right"
                ));
                echo $this->Html->image('/images/site/payment/paypal.png', array(
                    'height' => "30",
                    'class' => "pull-right"
                ));
                echo $this->Html->image('/images/site/payment/american_express_card.png', array(
                    'height' => "30",
                    'class' => "pull-right"
                ));
                echo $this->Html->image('/images/site/payment/discover_network_card.png', array(
                    'height' => "30",
                    'class' => "pull-right"
                ));
                echo $this->Html->image('/images/site/payment/google_wallet.png', array(
                    'height' => "30",
                    'class' => "pull-right"
                ));
                ?>
            </div>
        </div>
    </div>
</footer>
<?php
echo $this->Html->script(array(
    'https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js',
    '/assets/bootstrap/js/bootstrap.min.js',
));
echo $this->Html->script(array(
    '/assets/js/jquery.cycle2.min.js',
    '/assets/js/jquery.easing.1.3.js',
    '/assets/js/jquery.parallax-1.1.js',
    '/assets/js/helper-plugins/jquery.mousewheel.min.js',
    '/assets/js/jquery.mCustomScrollbar.js',
    '/assets/js/ion-checkRadio/ion.checkRadio.min.js',
    '/assets/js/grids.js',
    '/assets/js/owl.carousel.min.js',
    '/assets/js/jquery.minimalect.min.js',
    '/assets/js/bootstrap.touchspin.js',
    '/assets/js/home.js',
    '/assets/js/script.js',
));
echo $this->fetch('bottomScript');
?>
<script type="text/javascript">
    $(function(){
        $(".remove-from-cart").on("click", function(){
            var productId = $(this).parents('tr').attr('id');
            productId = productId.replace( /^\D+/g, '');
            $.ajax({
                url: "<?php echo Router::url(array('plugin' => 'shop', 'controller' => 'products', 'action' => 'remove_from_cart')); ?>/" + productId,
                success: function(response){
                    response = JSON.parse(response);
                    if (response.status == 'success') {
                        var itemCartQuantity = $('tr#item-' + productId).find('td.miniCartQuantity a');
                        var factureItemCount = itemCartQuantity.text();
                        var itemCount = factureItemCount.replace( /^\D+/g, '');
                        itemCount = parseInt(itemCount);
                        if(--itemCount == 0){
                            $('tr#item-' + productId).remove();
                        }else{
                            itemCartQuantity.text( factureItemCount.replace( /\d+/g, itemCount ) );
                        }
                    }
                }
            });
        });
    });
</script>