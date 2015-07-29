<footer>
    <div class="footer-bottom">
        <div class="container">
            <p class="pull-right"> &copy; <span>کلیه حقوق کپی رایت برای شرکت ... محفوظ می باشد.</span> </p>

            <div class="pull-left paymentMethodImg">
                <?php
//                echo $this->Html->image('/images/site/payment/master_card.png', array(
//                    'height' => "30",
//                    'class' => "pull-right"
//                ));
//                echo $this->Html->image('/images/site/payment/visa_card.png', array(
//                    'height' => "30",
//                    'class' => "pull-right"
//                ));
//                echo $this->Html->image('/images/site/payment/paypal.png', array(
//                    'height' => "30",
//                    'class' => "pull-right"
//                ));
//                echo $this->Html->image('/images/site/payment/american_express_card.png', array(
//                    'height' => "30",
//                    'class' => "pull-right"
//                ));
//                echo $this->Html->image('/images/site/payment/discover_network_card.png', array(
//                    'height' => "30",
//                    'class' => "pull-right"
//                ));
//                echo $this->Html->image('/images/site/payment/google_wallet.png', array(
//                    'height' => "30",
//                    'class' => "pull-right"
//                ));
                ?>
            </div>
        </div>
    </div>
</footer>
<?php
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
    'Shop.jquery.filtering.js',
    'Shop.jquery.product.combinations.js',
    //'Shop.jquery.remove.from.cart.js',
));
echo $this->fetch('bottomScript');
?>