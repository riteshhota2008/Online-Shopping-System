<?php

require 'core/init.php';
session_start();


?>

<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="side-shopping-cart/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="side-shopping-cart/css/style.css"> <!-- Gem style -->
    <script src="side-shopping-cart/js/modernizr.js"></script> <!-- Modernizr -->

    <!-- Quick add to cart -->

    <link rel="stylesheet" href="quick-add-to-cart/css/style.css">
    <script src="quick-add-to-cart/js/main.js"></script>

    <!-- Quick end to cart end -->

    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="Slider/engine1/style.css"/>
    <script type="text/javascript" src="Slider/engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->


    <style>
        @media only screen and (max-width: 768px) {
            #wowslider-container1 {
                padding-top: 20px;
            }
        }
    </style>

    <style>

        /* Footer */
        #footer {
            background: #31353d;
            padding: 15px 0 15px 0;
            text-align: center;
        }

        #footer p {
            font-size: 13px;
            margin-top: 10px;
            color: #fff;
            text-align: center;
        }

    </style>

    <title>SRMkart</title>
</head>
<body>


<header>
    <div id="logo"><img src="side-shopping-cart/img/cd-logo.svg" alt="Homepage"></div>

    <div id="cd-hamburger-menu"><a class="cd-img-replace" href="#0">Menu</a></div>
    <div id="cd-cart-trigger"><a class="cd-img-replace" href="#0">Cart</a></div>
</header>

<nav id="main-nav">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="products-view.html">Products</a></li>
        <li><a href="logout.php">FAQ</a></li>
        <li><a href="#0">Contact Us</a></li>
    </ul>
</nav>

<main>


    <!-- Start WOWSlider.com BODY section -->
    <div id="wowslider-container1" style="margin-top: -60px">
        <div class="ws_images">
            <ul>
                <li><img src="Slider/data1/images/1.jpg" alt="" title="" id="wows1_0"/></li>
                <li><img src="Slider/data1/images/2.jpg" alt="" title="" id="wows1_1"/></li>
                <li><img src="Slider/data1/images/3.jpg" alt="" title="" id="wows1_2"/></li>
                <li><img src="Slider/data1/images/4.jpg" alt="" title="" id="wows1_3"/></li>
            </ul>
        </div>
        <div class="ws_bullets">
            <div>
                <a href="#" title=""><span><img src="Slider/data1/tooltips/1.jpg" alt=""/>1</span></a>
                <a href="#" title=""><span><img src="Slider/data1/tooltips/2.jpg" alt=""/>2</span></a>
                <a href="#" title=""><span><img src="Slider/data1/tooltips/3.jpg" alt=""/>3</span></a>
                <a href="#" title=""><span><img src="Slider/data1/tooltips/4.jpg" alt=""/>4</span></a>
            </div>
        </div>
        <div class="ws_script" style="position:absolute;left:-99%"></div>
        <div class="ws_shadow"></div>
    </div>
    <script type="text/javascript" src="Slider/engine1/wowslider.js"></script>
    <script type="text/javascript" src="Slider/engine1/script.js"></script>
    <!-- End WOWSlider.com BODY section -->


    <!-- Products -->


    <ul class="cd-gallery">
        <li>
            <div class="cd-single-item">
                <a href="products/DeekshaMen'sSolidShirt.php">
                    <ul class="cd-slider-wrapper">
                        <li><img src="quick-add-to-cart/img/thumb-1.jpg" alt="Preview image"></li>
                        <li class="selected"><img src="quick-add-to-cart/img/thumb-2.jpg" alt="Preview image"></li>
                        <li><img src="quick-add-to-cart/img/thumb-3.jpg" alt="Preview image"></li>
                    </ul>
                </a>

                <div class="cd-customization">
                    <div class="color selected-2" data-type="select">
                        <ul>
                            <li class="color-1">color-1</li>
                            <li class="color-2 active">color-2</li>
                            <li class="color-3">color-3</li>
                        </ul>
                    </div>

                    <div class="size" data-type="select">
                        <ul>
                            <li class="small active">Small</li>
                            <li class="medium">Medium</li>
                            <li class="large">Large</li>
                        </ul>
                    </div>

                    <button class="add-to-cart">
                        <em>Add to Cart</em>
                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                            <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF"
                                  stroke-width="2" stroke-linecap="square" stroke-miterlimit="10"
                                  d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
                        </svg>
                    </button>
                </div> <!-- .cd-customization -->

                <button class="cd-customization-trigger">Customize</button>
            </div> <!-- .cd-single-item -->

            <div class="cd-item-info">
                <b><a href="products/DeekshaMen'sSolidShirt.php">Deeksha Men's Solid Shirt</a></b>
                <em>Rs 630.00</em>
            </div> <!-- cd-item-info -->
        </li>

        <li>
            <div class="cd-single-item">
                <a href="products/HighlandMen'sCasualShirt.php">
                    <ul class="cd-slider-wrapper">
                        <li class="selected"><img src="quick-add-to-cart/img/thumb-1.jpg" alt="Preview image"></li>
                        <li><img src="quick-add-to-cart/img/thumb-2.jpg" alt="Preview image"></li>
                        <li><img src="quick-add-to-cart/img/thumb-3.jpg" alt="Preview image"></li>
                    </ul>
                </a>

                <div class="cd-customization">
                    <div class="color" data-type="select">
                        <ul>
                            <li class="color-1 active">color-1</li>
                            <li class="color-2">color-2</li>
                            <li class="color-3">color-3</li>
                        </ul>
                    </div>

                    <div class="size" data-type="select">
                        <ul>
                            <li class="small active">Small</li>
                            <li class="medium">Medium</li>
                            <li class="large">Large</li>
                        </ul>
                    </div>

                    <button class="add-to-cart">
                        <em>Add to Cart</em>
                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                            <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF"
                                  stroke-width="2" stroke-linecap="square" stroke-miterlimit="10"
                                  d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
                        </svg>
                    </button>
                </div> <!-- .cd-customization -->

                <button class="cd-customization-trigger">Customize</button>
            </div> <!-- .cd-single-item -->

            <div class="cd-item-info">
                <b><a href="products/HighlandMen'sCasualShirt.php">Highland Men's Casual Shirt</a></b>
                <em>Rs 630.00</em>
            </div> <!-- cd-item-info -->
        </li>

        <li>
            <div class="cd-single-item">
                <a href="products/SuspenseMen'sCasualShirt.php">
                    <ul class="cd-slider-wrapper">
                        <li><img src="quick-add-to-cart/img/thumb-1.jpg" alt="Preview image"></li>
                        <li><img src="quick-add-to-cart/img/thumb-2.jpg" alt="Preview image"></li>
                        <li class="selected"><img src="quick-add-to-cart/img/thumb-3.jpg" alt="Preview image"></li>
                    </ul>
                </a>

                <div class="cd-customization">
                    <div class="color selected-3" data-type="select">
                        <ul>
                            <li class="color-1">color-1</li>
                            <li class="color-2">color-2</li>
                            <li class="color-3 active">color-3</li>
                        </ul>
                    </div>

                    <div class="size" data-type="select">
                        <ul>
                            <li class="small active">Small</li>
                            <li class="medium">Medium</li>
                            <li class="large">Large</li>
                        </ul>
                    </div>

                    <button class="add-to-cart">
                        <em>Add to Cart</em>
                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                            <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF"
                                  stroke-width="2" stroke-linecap="square" stroke-miterlimit="10"
                                  d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
                        </svg>
                    </button>
                </div> <!-- .cd-customization -->

                <button class="cd-customization-trigger">Customize</button>
            </div> <!-- .cd-single-item -->

            <div class="cd-item-info">
                <b><a href="products/SuspenseMen'sCasualShirt.php">Suspense Men's Casual Shirt</a></b>
                <em>Rs 630.00</em>
            </div> <!-- cd-item-info -->
        </li>

        <li>
            <div class="cd-single-item">
                <a href="products/RapphaelMen'sCasualShirt.php">
                    <ul class="cd-slider-wrapper">
                        <li class="selected"><img src="quick-add-to-cart/img/thumb-1.jpg" alt="Preview image"></li>
                        <li><img src="quick-add-to-cart/img/thumb-2.jpg" alt="Preview image"></li>
                        <li><img src="quick-add-to-cart/img/thumb-3.jpg" alt="Preview image"></li>
                    </ul>
                </a>

                <div class="cd-customization">
                    <div class="color" data-type="select">
                        <ul>
                            <li class="color-1 active">color-1</li>
                            <li class="color-2">color-2</li>
                            <li class="color-3">color-3</li>
                        </ul>
                    </div>

                    <div class="size" data-type="select">
                        <ul>
                            <li class="small active">Small</li>
                            <li class="medium">Medium</li>
                            <li class="large">Large</li>
                        </ul>
                    </div>

                    <button class="add-to-cart">
                        <em>Add to Cart</em>
                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                            <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF"
                                  stroke-width="2" stroke-linecap="square" stroke-miterlimit="10"
                                  d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
                        </svg>
                    </button>
                </div> <!-- .cd-customization -->

                <button class="cd-customization-trigger">Customize</button>
            </div> <!-- .cd-single-item -->

            <div class="cd-item-info">
                <b><a href="products/RapphaelMen'sCasualShirt.php">Rapphael Men's Casual Shirt</a></b>
                <em>Rs 630.00</em>
            </div> <!-- cd-item-info -->
        </li>

        <li>
            <div class="cd-single-item">
                <a href="products/FeedUpMen'sCasualShirt.php">
                    <ul class="cd-slider-wrapper">
                        <li><img src="quick-add-to-cart/img/thumb-1.jpg" alt="Preview image"></li>
                        <li class="selected"><img src="quick-add-to-cart/img/thumb-2.jpg" alt="Preview image"></li>
                        <li><img src="quick-add-to-cart/img/thumb-3.jpg" alt="Preview image"></li>
                    </ul>
                </a>

                <div class="cd-customization">
                    <div class="color selected-2" data-type="select">
                        <ul>
                            <li class="color-1">color-1</li>
                            <li class="color-2 active">color-2</li>
                            <li class="color-3">color-3</li>
                        </ul>
                    </div>

                    <div class="size" data-type="select">
                        <ul>
                            <li class="small active">Small</li>
                            <li class="medium">Medium</li>
                            <li class="large">Large</li>
                        </ul>
                    </div>

                    <button class="add-to-cart">
                        <em>Add to Cart</em>
                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                            <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF"
                                  stroke-width="2" stroke-linecap="square" stroke-miterlimit="10"
                                  d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
                        </svg>
                    </button>
                </div> <!-- .cd-customization -->

                <button class="cd-customization-trigger">Customize</button>
            </div> <!-- .cd-single-item -->

            <div class="cd-item-info">
                <b><a href="products/FeedUpMen'sCasualShirt.php">Feed Up Men's Casual Shirt</a></b>
                <em>Rs 630.00</em>
            </div> <!-- cd-item-info -->
        </li>

        <li>
            <div class="cd-single-item">
                <a href="products/BeingFabMen'sCasualShirt.php">
                    <ul class="cd-slider-wrapper">
                        <li class="selected"><img src="quick-add-to-cart/img/thumb-1.jpg" alt="Preview image"></li>
                        <li><img src="quick-add-to-cart/img/thumb-2.jpg" alt="Preview image"></li>
                        <li><img src="quick-add-to-cart/img/thumb-3.jpg" alt="Preview image"></li>
                    </ul>
                </a>

                <div class="cd-customization">
                    <div class="color" data-type="select">
                        <ul>
                            <li class="color-1 active">color-1</li>
                            <li class="color-2">color-2</li>
                            <li class="color-3">color-3</li>
                        </ul>
                    </div>

                    <div class="size" data-type="select">
                        <ul>
                            <li class="small active">Small</li>
                            <li class="medium">Medium</li>
                            <li class="large">Large</li>
                        </ul>
                    </div>

                    <button class="add-to-cart">
                        <em>Add to Cart</em>
                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                            <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF"
                                  stroke-width="2" stroke-linecap="square" stroke-miterlimit="10"
                                  d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
                        </svg>
                    </button>
                </div> <!-- .cd-customization -->

                <button class="cd-customization-trigger">Customize</button>
            </div> <!-- .cd-single-item -->

            <div class="cd-item-info">
                <b><a href="products/BeingFabMen'sCasualShirt.php">Being Fab Men's Casual Shirt</a></b>
                <em>Rs 630.00</em>
            </div> <!-- cd-item-info -->
        </li>
    </ul> <!-- cd-gallery -->

    <!-- Products End -->

    <!--

            <ul id="cd-gallery-items" class="cd-container" style="margin-top: 100px">
                <li>
                    <img src="side-shopping-cart/img/thumb.jpg" alt="Preview image">
                </li>

                <li>
                    <img src="side-shopping-cart/img/thumb.jpg" alt="Preview image">
                </li>

                <li>
                    <img src="side-shopping-cart/img/thumb.jpg" alt="Preview image">
                </li>

                <li>
                    <img src="side-shopping-cart/img/thumb.jpg" alt="Preview image">
                </li>

                <li>
                    <img src="side-shopping-cart/img/thumb.jpg" alt="Preview image">
                </li>

                <li>
                    <img src="side-shopping-cart/img/thumb.jpg" alt="Preview image">
                </li>

                <li>
                    <img src="side-shopping-cart/img/thumb.jpg" alt="Preview image">
                </li>

                <li>
                    <img src="side-shopping-cart/img/thumb.jpg" alt="Preview image">
                </li>

                <li>
                    <img src="side-shopping-cart/img/thumb.jpg" alt="Preview image">
                </li>
            </ul> <!-- cd-gallery-items -->


    <!-- Footer -->

    <div id="footer" class="text-center">
        <div class="container">
            <p>Copyright &copy; SRMkart. All rights reserved.</p>
            <div id="google_translate_element" style="float: left;margin-top: -10px"></div>
            <script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({
                        pageLanguage: 'en',
                        includedLanguages: 'bn,de,en,es,fr,gu,hi,it,ja,jv,kn,ko,ml,mr,pa,ta,te,ur,zh-CN',
                        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                    }, 'google_translate_element');
                }
            </script>
            <script type="text/javascript"
                    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </div>
    </div>

    <!-- Footer End -->

</main>

<div id="cd-shadow-layer"></div>

<div id="cd-cart">
    <h2>Cart</h2>
    <ul class="cd-cart-items">
        <li>
            <span class="cd-qty">1x</span> Deeksha Men's Solid Shirt
            <div class="cd-price">Rs 630.00</div>
            <a href="#0" class="cd-item-remove cd-img-replace">Remove</a>
        </li>

        <li>
            <span class="cd-qty">2x</span> Highland Men's Casual Shirt
            <div class="cd-price">Rs 630.00</div>
            <a href="#0" class="cd-item-remove cd-img-replace">Remove</a>
        </li>

        <li>
            <span class="cd-qty">1x</span> Suspense Men's Casual Shirt
            <div class="cd-price">RS 630.00</div>
            <a href="#0" class="cd-item-remove cd-img-replace">Remove</a>
        </li>
    </ul> <!-- cd-cart-items -->

    <div class="cd-cart-total">
        <p>Total <span>Rs 1890.00</span></p>
    </div> <!-- cd-cart-total -->

    <a href="#0" class="checkout-btn">Checkout</a>

    <!--<p class="cd-go-to-cart"><a href="#0">Go to cart page</a></p>-->
</div> <!-- cd-cart -->

<script src="quick-add-to-cart/js/jquery-2.1.4.js"></script> <!-- Quick add to cart -->
<script src="quick-add-to-cart/js/main.js"></script> <!-- Quick add to cart -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="side-shopping-cart/js/main.js"></script> <!-- Gem jQuery -->

<!-- Crisp chat -->

<script type="text/javascript">CRISP_WEBSITE_ID = "-KFs0nxkeSUFWMl4hFXt";
    (function () {
        d = document;
        s = d.createElement("script");
        s.src = "https://client.crisp.im/l.js";
        s.async = 1;
        d.getElementsByTagName("head")[0].appendChild(s);
    })();</script>

<!-- Crisp chat end -->

</body>
</html>