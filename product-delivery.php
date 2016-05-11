<?php

if(isset($_POST["submit"])){
    $hostname='localhost';
    $username='username';//username
    $password='password';//password

    try {
        $dbh = new PDO("mysql:host=$hostname;dbname=databasename",$username,$password);//replce dbname with actual database name

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
        $sql = "INSERT INTO users (street, landmark, city, pincode)
VALUES ('".$_POST["street"]."','".$_POST["landmark"]."','".$_POST["city"]."','".$_POST["pincode"]."')";
        if ($dbh->query($sql))
        {
            echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
           
        }
        else

            echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
           


$dbh = null;
}
catch(PDOException $e)
{
    echo $e->getMessage();
}

}
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
    <link rel="stylesheet" type="text/css" href="Slider/engine1/style.css" />
    <script type="text/javascript" src="Slider/engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->

    <!-- Contact Form -->

    <link rel="stylesheet" href="contact-form/css/style.css">

    <!-- Contact Form end -->

   

    <style>
        @media only screen and (max-width: 768px)	{
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
        <li><a href="index.html">Home</a></li>
        <li><a href="products-view.html">Products</a></li>
        <li><a href="#0">FAQ</a></li>
        <li><a href="#0">Contact Us</a></li>
    </ul>
</nav>

<main style="background-color: #ffffff">

    <form class="cd-form floating-labels" method="post" action="">
        <fieldset>
            <legend>Delivery Address:</legend>

            <!--   <div class="error-message">
                   <p>Please enter a valid email address</p>
               </div>  -->

            <div class="icon">
                <label class="cd-label" for="cd-textarea"></label>
                <textarea class="message" placeholder="Street Address" name="street" id="cd-textarea" required></textarea>
            </div>

            <div class="icon">
                <label class="cd-label" for="cd-company">Landmark</label>
                <input class="company" type="text" name="landmark" id="cd-company">
            </div>

            <div class="icon">
                <label class="cd-label" for="cd-company">City</label>
                <input class="company" type="text" name="city" id="cd-company">
            </div>

            <div>
                <h4>State</h4>

                <p class="cd-select icon">
                    <select class="budget">
                        <option value='Andhra Pradesh'>Andhra Pradesh</option>
                        <option value='Arunachal Pradesh'>Arunachal Pradesh</option>
                        <option value='Assam'>Assam</option>
                        <option value='Bihar'>Bihar</option>
                        <option value='Chandigarh'>Chandigarh</option>
                        <option value='Chhattisgarh'>Chhattisgarh</option>
                        <option value='Delhi'>Delhi</option>
                        <option value='Goa'>Goa</option>
                        <option value='Gujarat'>Gujarat</option>
                        <option value='Haryana'>Haryana</option>
                        <option value='Himachal Pradesh'>Himachal Pradesh</option>
                        <option value='Jammu and Kashmir'>Jammu and Kashmir</option>
                        <option value='Jharkhand'>Jharkhand</option>
                        <option value='Karnataka'>Karnataka</option>
                        <option value='Kerala'>Kerala</option>
                        <option value='Madhya Pradesh'>Madhya Pradesh</option>
                        <option value='Maharashtra'>Maharashtra</option>
                        <option value='Manipur'>Manipur</option>
                        <option value='Meghalaya'>Meghalaya</option>
                        <option value='Mizoram'>Mizoram</option>
                        <option value='Nagaland'>Nagaland</option>
                        <option value='Odisha'>Odisha</option>
                        <option value='Puducherry'>Puducherry</option>
                        <option value='Punjab'>Punjab</option>
                        <option value='Rajasthan'>Rajasthan</option>
                        <option value='Sikkim'>Sikkim</option>
                        <option value='Tamil Nadu'>Tamil Nadu</option>
                        <option value='Telengana'>Telengana</option>
                        <option value='Tripura'>Tripura</option>
                        <option value='Uttar Pradesh'>Uttar Pradesh</option>
                        <option value='Uttarakhand'>Uttarakhand</option>
                        <option value='West Bengal'>West Bengal</option>
                    </select>
                </p>
            </div>

            <div class="icon">
                <label class="cd-label" for="cd-company">Pincode</label>
                <input class="company" type="text" name="pincode" id="cd-company">
            </div>

        </fieldset>

        <div>
            <input type="submit" name="submit" value="Submit">
        </div>
    </form>

    <!-- Footer -->

    <div id="footer" class="text-center">
        <div class="container">
            <p>Copyright &copy; SRMkart. All rights reserved.</p>
            <div id="google_translate_element" style="float: left;margin-top: -10px"></div><script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'bn,de,en,es,fr,gu,hi,it,ja,jv,kn,ko,ml,mr,pa,ta,te,ur,zh-CN', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                }
            </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
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
<script src="contact-form/js/main.js"></script> <!-- Contact Form -->
</body>
</html>