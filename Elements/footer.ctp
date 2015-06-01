<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
                    <h3> Support </h3>
                    <ul>
                        <li class="supportLi">
                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                            <h4><a class="inline" href="callto:+88016000000"> <strong> <i class="fa fa-phone"> </i> 88
                                        0160 000 000</strong> </a></h4>
                            <h4><a class="inline"
                                   href="/cdn-cgi/l/email-protection#533b363f231327203b3c232436317d303c3e"> <i
                                        class="fa fa-envelope-o"> </i> <span class="__cf_email__"
                                                                             data-cfemail="88e0ede4f8c8fcfbe0e7f8ffedeaa6ebe7e5">[email&#160;protected]</span>
                                    <script cf-hash='f9e31' type="text/javascript">
                                        /* <![CDATA[ */
                                        !function () {
                                            try {
                                                var t = "currentScript"in document ? document.currentScript : function () {
                                                    for (var t = document.getElementsByTagName("script"), e = t.length; e--;)if (t[e].getAttribute("cf-hash"))return t[e]
                                                }();
                                                if (t && t.previousSibling) {
                                                    var e, r, n, i, c = t.previousSibling, a = c.getAttribute("data-cfemail");
                                                    if (a) {
                                                        for (e = "", r = parseInt(a.substr(0, 2), 16), n = 2; a.length - n; n += 2)i = parseInt(a.substr(n, 2), 16) ^ r, e += String.fromCharCode(i);
                                                        e = document.createTextNode(e), c.parentNode.replaceChild(e, c)
                                                    }
                                                }
                                            } catch (u) {
                                            }
                                        }();
                                        /* ]]> */</script>
                                </a></h4>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Shop </h3>
                    <ul>
                        <li><a href="index.html"> Home </a></li>
                        <li><a href="category.html"> Category </a></li>
                        <li><a href="category2.html"> Category Style 2 [Parallax] </a></li>
                        <li><a href="sub-category.html"> Sub Category </a></li>
                    </ul>
                </div>
                <div style="clear:both" class="hide visible-xs"></div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Information </h3>
                    <ul>
                        <li><a href="product-details.html"> Product Details </a></li>
                        <li><a href="product-details-style2.html"> Product Details Version 2 </a></li>
                        <li><a href="cart.html"> Cart </a></li>
                        <li><a href="about-us.html"> About us </a></li>
                        <li><a href="about-us-2.html"> About us 2 </a></li>
                        <li><a href="contact-us.html"> Contact us </a></li>
                        <li><a href="contact-us-2.html"> Contact us 2 </a></li>
                        <li><a href="terms-conditions.html"> Terms &amp; Conditions </a></li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> My Account </h3>
                    <ul>
                        <li><a href="account-1.html"> Account Login </a></li>
                        <li><a href="account.html"> My Account </a></li>
                        <li><a href="my-address.html"> My Address </a></li>
                        <li><a href="wishlist.html"> Wish List </a></li>
                        <li><a href="order-list.html"> Order list </a></li>
                        <li><a href="order-status.html"> Order Status </a></li>
                    </ul>
                </div>
                <div style="clear:both" class="hide visible-xs"></div>
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Stay in touch </h3>
                    <ul>
                        <li>
                            <div class="input-append newsLatterBox text-center">
                                <input type="text" class="full text-center" placeholder="Email ">
                                <button class="btn  bg-gray" type="button"> Subscribe <i
                                        class="fa fa-long-arrow-right"> </i></button>
                            </div>
                        </li>
                    </ul>
                    <ul class="social">
                        <li><a href="http://facebook.com"> <i class=" fa fa-facebook"> &nbsp; </i> </a></li>
                        <li><a href="http://twitter.com"> <i class="fa fa-twitter"> &nbsp; </i> </a></li>
                        <li><a href="https://plus.google.com"> <i class="fa fa-google-plus"> &nbsp; </i> </a></li>
                        <li><a href="http://youtube.com"> <i class="fa fa-pinterest"> &nbsp; </i> </a></li>
                        <li><a href="http://youtube.com"> <i class="fa fa-youtube"> &nbsp; </i> </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

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
    /* <![CDATA[ */
    (function () {
        try {
            var s, a, i, j, r, c, l = document.getElementsByTagName("a"), t = document.createElement("textarea");
            for (i = 0; l.length - i; i++) {
                try {
                    a = l[i].getAttribute("href");
                    if (a && a.indexOf("/cdn-cgi/l/email-protection") > -1 && (a.length > 28)) {
                        s = '';
                        j = 27 + 1 + a.indexOf("/cdn-cgi/l/email-protection");
                        if (a.length > j) {
                            r = parseInt(a.substr(j, 2), 16);
                            for (j += 2; a.length > j && a.substr(j, 1) != 'X'; j += 2) {
                                c = parseInt(a.substr(j, 2), 16) ^ r;
                                s += String.fromCharCode(c);
                            }
                            j += 1;
                            s += a.substr(j, a.length - j);
                        }
                        t.innerHTML = s.replace(/</g, "&lt;").replace(/>/g, "&gt;");
                        l[i].setAttribute("href", "mailto:" + t.value);
                    }
                } catch (e) {
                }
            }
        } catch (e) {
        }
    })();
    /* ]]> */
</script>
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