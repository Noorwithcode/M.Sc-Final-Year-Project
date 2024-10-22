<?php require "./widgets/header.php" ?>
<!-- BEGIN content_for_index -->

<?php

require "./widgets/db.php";

$con = $conn;

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $ch = $con->query("SELECT * FROM `login` WHERE `email`='$email' and `password`='$password' ");
    if ($ch->num_rows > 0) {

        $user = mysqli_fetch_array($ch);

        $_SESSION['uid'] = $user['id'];
        echo '<script> alert("Login Successfull !"); window.location="index.php" </script>';

    } else {
        echo '<script> alert("Invalid Password !"); window.location="Login.php" </script>';
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="">
    <link rel="canonical" href="login.php">
    <link rel="shortcut icon" href="../cdn/shop/files/icon_1_32x32.png?v=1613705152" type="image/png">
    <title>Account &ndash; ps-plants</title>
</head>

<body class="template-customers/login">

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2 class="lang_trans" data-trans="#account_breadcrumb_page_title">
                            Account
                        </h2>
                        <span class="hide" id="account_breadcrumb_page_title">Account</span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php"
                                    data-trans-key="general.breadcrumb.home">Home</a></li>
                            <li class="breadcrumb-item active lang_trans"
                                data-trans="#account_breadcrumb_active_page_title">
                                Account
                            </li>
                            <span class="hide" id="account_breadcrumb_active_page_title">Account</span>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb End -->


    <!--section start-->

    <section class="login-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div id="CustomerLoginForm">

                        <h3 data-trans-key="customer.login.login">Login</h3>
                        <div class="form-message form-message--success hide" id="ResetSuccess">
                            We&#39;ve sent you an email with a link to update your password.
                        </div>
                        <div class="theme-card">
                            <form method="post" action="login.php" id="customer_login" accept-charset="UTF-8"
                                data-login-with-shop-sign-in="true" class="theme-form"><input type="hidden"
                                    name="form_type" value="customer_login"><input type="hidden" name="utf8" value="✓">

                                <div class="form-group">
                                    <label for="email" data-trans-key="customer.login.email">Email</label>
                                    <input type="email" name="email" id="CustomerEmail" placeholder="Email"
                                        class="form-control " autocorrect="off" autocapitalize="off" autofocus="">
                                </div>
                                <div class="form-group">
                                    <label for="review">Password</label>
                                    <input type="password" value="" name="password" placeholder="Password"
                                        id="CustomerPassword" class="form-control ">
                                </div>
                                <button type="submit" class="btn btn-solid" name="login">Login</button>
                                <p class="text-left"><a href="forgot.php" id="RecoverPassword"
                                        data-trans-key="customer.login.forgot_password"name="forgot">Forgot your password?</a></p>
                            </form>
                        </div>
                    </div>
                    <div id="RecoverPasswordForm" class="hide">
                        <h3 data-trans-key="customer.recover_password.title">Reset your password</h3>
                        <div class="theme-card">

                            <form method="post" action="forgot.php" accept-charset="UTF-8" class="theme-form">
                                <input type="hidden" name="form_type" value="recover_customer_password"><input
                                    type="hidden" name="utf8" value="✓">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label for="RecoverEmail"
                                            data-trans-key="customer.recover_password.email">Email</label>
                                        <input type="email" value="" name="email" id="RecoverEmail" class="form-control"
                                            placeholder="Email" autocorrect="off" autocapitalize="off">
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <button type="submit" class="btn btn-solid"
                                            data-trans-key="customer.recover_password.submit"name="forgot">Submit</button>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="button" id="HideRecoverPasswordLink" class="btn btn-solid"
                                            data-trans-key="customer.recover_password.cancel">Cancel</button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
                <div class="col-lg-6 right-login">
                    <h3 data-trans-key="customer.register.heading">New customer</h3>
                    <div class="theme-card authentication-right">
                        <h6 class="title-font" data-trans-key="customer.register.title">Create Account</h6>
                        <p data-trans-key="customer.register.content">Sign up for a free account at our store.
                            Registration is quick and easy. It allows you to be able to order from our shop. To start
                            shopping click register.</p>
                        <a href="register.php" class="btn btn-solid"
                            data-trans-key="customer.register.submit">Create</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->


    
    <!--NewsLetter Start--->

    <div id="shopify-section-newsletter" class="shopify-section">
        <section class="plant-footer "
            style="padding:70px 0px 70px 0px ; background-image: url(../cdn/shop/files/newsletter2.png);    background-repeat: no-repeat; ">

            <div class="container">

                <div class="row">

                    <div class="col-xl-6 offset-xl-3 footer-main">
                        <div class="subscribe">
                            <div>

                                <div class="title1">


                                    <h2 class="title-inner1 lang_trans" data-trans="#FeatureVideo__title">
                                        OUR NEWSLETTER
                                    </h2>

                                    <span class="hide" id="FeatureVideo__title"></span>



                                    <h5 class="lang_trans" data-trans="#FeatureVideo__subtitle">
                                        Enter Your email address to join our mailing list and keep yourself update
                                    </h5>

                                    <span class="hide" id="FeatureVideo__subtitle"></span>


                                </div>

                            </div>
                            <div>
                                <form action="" method="post" id="mc-embedded-subscribe-form"
                                    name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
                                    <div id="mc_embed_signup_scroll">
                                        <div class="form-group">
                                            <input type="email" class="required email form-control" value=""
                                                name="EMAIL" placeholder="Enter Your Email" id="mce-EMAIL" required="">
                                        </div>
                                        <div id="mce-responses" class="clear">
                                            <div class="response" id="mce-error-response" style="display:none"></div>
                                            <div class="response" id="mce-success-response" style="display:none"></div>
                                        </div>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" hidden="">
                                            <input type="text" name="b_17af379706d80b694776f991f_9ebb72e4d2"
                                                tabindex="-1" value="">
                                        </div>
                                        <button type="submit" class="btn btn-solid" name="subscribe"
                                            id="mc-embedded-subscribe"
                                            data-trans-key="general.newsletter_form.submit">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>
    </div>
    <!--NewsLetter End--->

    <!-- Footer Scripts ================================ -->
       <?php require "./widgets/footer.php" ?>
   </body>

</html>