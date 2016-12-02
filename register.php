<?php
require('core/init.php');
if (isset($_POST['submit'])) {

    if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email']) || empty($_POST['confirm_password'])) {

        $errors[] = 'All fields are required.';

    } else {


        if ($users->user_exists($_POST['username']) === true) {
            $errors[] = 'That username already exists';
        }
        if (!preg_match("/[a-zA-Z0-9-_]+/", $_POST['username'])) {
            $errors[] = 'The user name should be alphanumeric characters with some special symbols (-,_).';
        }
        if (strlen($_POST['password']) < 6) {
            $errors[] = 'Your password must be at least 6 characters';
        } else if (strlen($_POST['password']) > 12) {
            $errors[] = 'Your password cannot be more than 12 characters long';
        }
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
            $errors[] = 'Please enter a valid email address';
        } else if ($users->email_exists($_POST['email']) === true) {
            $errors[] = 'That email already exists.';
        }

        if ($_POST['password'] != $_POST['confirm_password']) {
            $errors[] = 'passwords don\'t match';
        }
        if ($_POST['tc'] != "1") {
            $errors[] = 'Please accept the terms and condition';
        }


    }

    if (empty($errors) === true) {

        $username = htmlentities($_POST['username']);
        $password = $_POST['password'];
        $email = htmlentities($_POST['email']);

        $users->register($username, $password, $email);
        header('Location: register.php?success');
        exit();
    }
}

if (isset($_GET['success']) && empty($_GET['success'])) {
    echo 'Thank you for registering. Please check your email.';
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

    <!-- Sign In -->
    <div class="container" style="margin-top: 30px">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="box-material">
                    <h3>Create an account</h3>
                    <form method="post" action="">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" title="First Name" required/><br>
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" title="Email" required/><br>
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" title="Password"
                               required/><br>
                        <Button type="submit" class="btn btn-primary btn-block" name="submit">Sign up</Button>
                    </form>
                    <br>
                    <label style="color: #484848">Already have an account, <a href="signin.html" style="color: #6b15a1">click
                            here</a> to
                        login.</label>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div id="footer" class="text-center" style="margin-top: 130px">
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