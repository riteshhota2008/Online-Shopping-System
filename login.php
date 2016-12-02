<?php
require 'core/init.php';
session_start();
if (isset($_GET['successforgotpass']) && empty($_GET['successforgotpass'])) {
    echo 'Password saved successfully';
}
$general->logged_in_protect();

if (empty($_POST) === false) {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) === true || empty($password) === true) {
        $errors[] = 'Sorry, but we need your username and password.';
    } else if ($users->user_exists($username) === false) {
        $errors[] = 'Sorry that username doesn\'t exists.';
    } else if ($users->is_email_confirmed($username) === false) {
        $errors[] = 'Sorry, but you need to activate your account.
					 Please check your email.';
    } else {

        $login = $users->login($username, $password);
        if ($login === false) {
            $errors[] = 'Sorry, that username/password is invalid';
        }else{
            session_start();
            $_SESSION['user_name'] =  $login;
            header('Location: index.html');
            exit();
        }
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

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>


    <style>
        /* Box Card Design */
        .box-material {
            padding: 30px;
            background-color: white;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.04);
            border-radius: 5px;
            border: 1px solid #e5e5e5;
        }
    </style>

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
        <li><a href="index.html">Home</a></li>
        <li><a href="products-view.html">Products</a></li>
        <li><a href="#0">FAQ</a></li>
        <li><a href="#0">Contact Us</a></li>
    </ul>
</nav>

<main>

    <!-- Sign Up -->
    <div class="container" style="margin-top: 30px">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="box-material">
                    <h3>Sign in to continue</h3>
                    <form method="post" action="">
                        <label>Username</label>
                        <input type="email" class="form-control" name="email" title="email"
                               placeholder="Enter your Username" required/><br>
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" title="Password" required/><br>
                        <a href="forgotpass.html"><h6 style="float: right;color: #484848">Forgot Password?</h6></a>
                        <br><br>
                        <Button type="submit" class="btn btn-primary btn-block" name="submit">Sign in</Button>
                    </form>
                    <br>
                    <label style="color: #484848">Don't have an account, <a href="register.php" style="color: #6b15a1">click
                            here</a>
                        to register.
                    </label>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div id="footer" class="text-center" style="margin-top: 170px">
        <div class="container">
            <p>Copyright &copy; SRMkart. All rights reserved.</p>
            <!--<div id="google_translate_element" style="float: left;margin-top: -10px"></div>
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
                    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>-->
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

<script>

    $('select.dropdown')
        .dropdown()
    ;

</script>

<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>
</html>