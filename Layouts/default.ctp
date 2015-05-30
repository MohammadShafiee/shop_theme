<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript">
        //<![CDATA[
        try {
            if (!window.CloudFlare) {
                var CloudFlare = [{
                    verbose: 0,
                    p: 0,
                    byc: 0,
                    owlid: "cf",
                    bag2: 1,
                    mirage2: 0,
                    oracle: 0,
                    paths: {cloudflare: "/cdn-cgi/nexp/dok3v=1613a3a185/"},
                    atok: "7e7ee3eb6d68fdd16081c57cd1f9ad29",
                    petok: "bb0794d281bb59993a9b78b284a55d4438c1bc5f-1431455423-1800",
                    zone: "templatecycle.com",
                    rocket: "0",
                    apps: {}
                }];
                CloudFlare.push({"apps": {"ape": "3a6373ca545007d271be322636d225e3"}});
                !function (a, b) {
                    a = document.createElement("script"), b = document.getElementsByTagName("script")[0], a.async = !0, a.src = "//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=7e13c32551/cloudflare.min.js", b.parentNode.insertBefore(a, b)
                }()
            }
        } catch (e) {
        }
        ;
        //]]>
    </script>
    <!--    <link rel="shortcut icon" href="/assets/ico/favicon.png">-->
    <title><?php echo $title_for_layout; ?> &raquo; <?php echo Configure::read('Site.title'); ?></title>

    <?php
    echo $this->Html->css(array(
        '/assets/bootstrap/css/bootstrap.css',
        '/assets/css/skin-3.css',
        '/assets/css/style.css',
    ));
    echo $this->Html->script(array(
        '/assets/js/pace.min.js',
    ));
    ?>


    <!--[if lt IE 9]>
    <?php
        echo $this->Html->script(array(
    '/assets/js/ie9/html5shiv.js',
    '/assets/js/ie9/respond.min.js',
    ));
    ?>
    <![endif]-->

    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <style>.themeControll {
            background: #2d3e50;
            height: auto;
            width: 100px;
            position: fixed;
            left: 0;
            padding: 20px;
            top: 20%;
            z-index: 999999;
            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -o-transform: translateX(0);
            -ms-transform: translateX(0);
            transform: translateX(0);
            opacity: 1;
            -ms-filter: none;
            filter: none;
            -webkit-transition: opacity .5s linear, -webkit-transform .7s cubic-bezier(.56, .48, 0, .99);
            -moz-transition: opacity .5s linear, -moz-transform .7s cubic-bezier(.56, .48, 0, .99);
            -o-transition: opacity .5s linear, -o-transform .7s cubic-bezier(.56, .48, 0, .99);
            -ms-transition: opacity .5s linear, -ms-transform .7s cubic-bezier(.56, .48, 0, .99);
            transition: opacity .5s linear, transform .7s cubic-bezier(.56, .48, 0, .99);
        }

        .themeControll.active {
            display: block;
            -webkit-transform: translateX(-100px);
            -moz-transform: translateX(-100px);
            -o-transform: translateX(-100px);
            -ms-transform: translateX(-1020px);
            transform: translateX(-100px);
            -webkit-transition: opacity .5s linear, -webkit-transform .7s cubic-bezier(.56, .48, 0, .99);
            -moz-transition: opacity .5s linear, -moz-transform .7s cubic-bezier(.56, .48, 0, .99);
            -o-transition: opacity .5s linear, -o-transform .7s cubic-bezier(.56, .48, 0, .99);
            -ms-transition: opacity .5s linear, -ms-transform .7s cubic-bezier(.56, .48, 0, .99);
            transition: opacity .5s linear, transform .7s cubic-bezier(.56, .48, 0, .99);
        }

        .themeControll a {
            border-radius: 3px;
            clear: both;
            display: block;
            height: 25px;
            margin-bottom: 4px;
            width: 50px;
        }

        .tbtn {
            background: #2D3E50;
            color: #FFFFFF !important;
            font-size: 30px;
            height: auto;
            padding: 10px;
            position: absolute;
            right: -40px;
            top: 0;
            width: 40px;
            cursor: pointer;
        }

        @media (max-width: 780px) {
            .themeControll {
                display: none;
            }
        }</style>
</head>
<body>
<div class="modal signUpContent fade" id="ModalLogin" tabindex="-1" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h3 class="modal-title-site text-center"> Login to TSHOP </h3>
            </div>
            <div class="modal-body">
                <div class="form-group login-username">
                    <div>
                        <input name="log" id="login-user" class="form-control input" size="20"
                               placeholder="Enter Username" type="text">
                    </div>
                </div>
                <div class="form-group login-password">
                    <div>
                        <input name="Password" id="login-password" class="form-control input" size="20"
                               placeholder="Password" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <div class="checkbox login-remember">
                            <label>
                                <input name="rememberme" value="forever" checked="checked" type="checkbox">
                                Remember Me </label>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <input name="submit" class="btn  btn-block btn-lg btn-primary" value="LOGIN" type="submit">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center"> Not here before? <a data-toggle="modal" data-dismiss="modal"
                                                            href="#ModalSignup"> Sign Up. </a> <br>
                    <a href="forgot-password.html"> Lost your password? </a></p>
            </div>
        </div>

    </div>

</div>
<div class="modal signUpContent fade" id="ModalSignup" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h3 class="modal-title-site text-center"> REGISTER </h3>
            </div>
            <div class="modal-body">
                <div class="control-group"><a class="fb_button btn  btn-block btn-lg " href="#"> SIGNUP WITH
                        FACEBOOK </a></div>
                <h5 style="padding:10px 0 10px 0;" class="text-center"> OR </h5>

                <div class="form-group reg-username">
                    <div>
                        <input name="login" class="form-control input" size="20" placeholder="Enter Username"
                               type="text">
                    </div>
                </div>
                <div class="form-group reg-email">
                    <div>
                        <input name="reg" class="form-control input" size="20" placeholder="Enter Email" type="text">
                    </div>
                </div>
                <div class="form-group reg-password">
                    <div>
                        <input name="password" class="form-control input" size="20" placeholder="Password"
                               type="password">
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <div class="checkbox login-remember">
                            <label>
                                <input name="rememberme" id="rememberme" value="forever" checked="checked"
                                       type="checkbox">
                                Remember Me </label>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <input name="submit" class="btn  btn-block btn-lg btn-primary" value="REGISTER" type="submit">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <p class="text-center"> Already member? <a data-toggle="modal" data-dismiss="modal" href="#ModalLogin">
                        Sign in </a></p>
            </div>
        </div>

    </div>

</div>
<div style="height: 100px; position: relative">
    <div class="navbar navbar-tshop navbar-fixed-top megamenu" role="navigation">
        <?php
            echo $this->element('top_menu');
            echo $this->element('main_menu');
        ?>
    </div>
</div>
    <div class="container main-container">
        <?php
            echo $content_for_layout;
        ?>
    </div>
    <div class="modal fade" id="product-details-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button aria-hidden="true" data-dismiss="modal" class="close" type="button"> × </button>
            <div class="col-lg-5 col-md-5 col-sm-5  col-xs-12">

                <div class="main-image  col-lg-12 no-padding style3">
                    <a class="product-largeimg-link" href="product-details.html">
                        <?php echo $this->Html->image('/images/zoom/zoom1.jpg', array(
                            'class' => 'img-responsive product-largeimg',
                            'alt' => 'img',
                        ));
                        ?>
                    </a>
                </div>

                <div class="modal-product-thumb">
                    <a class="thumbLink selected">
                        <?php echo $this->Html->image('/images/zoom/zoom1.jpg', array(
                            'class' => 'img-responsive',
                            'alt' => 'img',
                        ));
                        ?>
                    </a>
                    <a class="thumbLink">
                        <?php echo $this->Html->image('/images/zoom/zoom2.jpg', array(
                            'class' => 'img-responsive',
                            'alt' => 'img',
                        ));
                        ?>
                    </a>
                    <a class="thumbLink">
                        <?php echo $this->Html->image('/images/zoom/zoom3.jpg', array(
                            'class' => 'img-responsive',
                            'alt' => 'img',
                        ));
                        ?>
                    </a>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 modal-details no-padding">
                <div class="modal-details-inner">
                    <h1 class="product-title"> Lorem ipsum dolor sit amet</h1>
                    <h3 class="product-code">Product Code : DEN1098</h3>
                    <div class="product-price"> <span class="price-sales"> $70</span> <span class="price-standard">$95</span> </div>
                    <div class="details-description">
                        <p>In scelerisque libero ut elit porttitor commodo Suspendisse laoreet magna. </p>
                    </div>
                    <div class="color-details"> <span class="selected-color"><strong>COLOR</strong></span>
                        <ul class="swatches Color">
                            <li class="selected">
                                <a style="background-color:#f1f40e"> </a>
                            </li>
                            <li>
                                <a style="background-color:#adadad"> </a>
                            </li>
                            <li>
                                <a style="background-color:#4EC67F"> </a>
                            </li>
                        </ul>
                    </div>

                    <div class="productFilter productFilterLook2">
                        <div class="filterBox">
                            <select>
                                <option value="strawberries" selected>Quantity</option>
                                <option value="mango">1</option>
                                <option value="bananas">2</option>
                                <option value="watermelon">3</option>
                                <option value="grapes">4</option>
                                <option value="oranges">5</option>
                                <option value="pineapple">6</option>
                                <option value="peaches">7</option>
                                <option value="cherries">8</option>
                            </select>
                        </div>
                        <div class="filterBox">
                            <select>
                                <option value="strawberries" selected>Size</option>
                                <option value="mango">XL</option>
                                <option value="bananas">XXL</option>
                                <option value="watermelon">M</option>
                                <option value="apples">L</option>
                                <option value="apples">S</option>
                            </select>
                        </div>
                    </div>

                    <div class="cart-actions">
                        <div class="addto">
                            <button onclick="productAddToCartForm.submit(this);" class="button btn-cart cart first" title="Add to Cart" type="button">Add to Cart</button>
                            <a class="link-wishlist wishlist">Add to Wishlist</a> </div>
                    </div>

                    <div class="product-share clearfix">
                        <p> SHARE </p>
                        <div class="socialIcon">
                            <a href="#"> <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#"> <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#"> <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="#"> <i class="fa fa-pinterest"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="clear"></div>
        </div>
    </div>
</div>
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
?>
<script type="text/javascript">
    (function(){
        var productDetailsModal = $('#product-details-modal');
        productDetailsModal.on('show.bs.modal', function (e) {
            var productTitle, productPrice, productImage;
            var clicked = $(e.relatedTarget),
                quickView = clicked.parent('div.quickview');
            productImage = quickView.next().children('img').attr('src');
            productTitle = quickView.parent('div.image').siblings('div.description').children('h4').children('a').text();
            productPrice = quickView.parent('div.image').siblings('div.price').find('span').eq(0).text();
            productDetailsModal.find('a.product-largeimg-link').children('img').attr('src', productImage);
            productDetailsModal.find('div.modal-details-inner').children('h1').text(productTitle);
            productDetailsModal.find('div.modal-details-inner').find('div.product-price').find('span.price-sales').text(productPrice);

        });
        function add_product_to_cart(productId){
            var productBox = $('div#prod-' + productId);
            var cartBox = $('div.miniCartTable table');
            cartBox.append('<tr class="miniCartProduct">');
            console.log(cartBox);

        }
        //add product to cart.
        $('div.action-control > a').on('click', function(e){
            e.preventDefault();
            var productId = $(this).parents('.item').attr('id');
            productId = productId.replace( /^\D+/g, '');
            add_product_to_cart(productId);
            /*$.ajax({
                url: "<?php echo Router::url('/shop/products/add_to_card/'); ?>" + productId,
                success: function(msg){
                    msg = JSON.parse(msg);
                    console.log(msg);
                    if (msg.status == 'success') {
                        add_product_to_cart(productId);
                    } else {

                    }
                }
            });*/
        });
        $('tr.miniCartProduct td.delete a').on('click', function(e){
            e.preventDefault();
            var productId = '';
            $.ajax({
                type: "POST",
                url: "<?php echo Router::url('/shop/products/remove_from_cart/'); ?>" + productId,
                data: $('form.').serialize(),
                success: function(msg){
                    msg = JSON.parse(msg);
                    if (msg.status == 'success') {
                        var cartRow = $(this).parents('tr.miniCartProduct');
                        cartRow.remove();
                    } else {

                    }
                }
            });
        });
    })();
</script>
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
</body>
</html>