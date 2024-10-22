<?php require "./widgets/header.php" ?>
<?php
require "./widgets/db.php";

$con = $conn;

if (isset($_POST['register'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "INSERT INTO login SET `first_name`='$first_name', `last_name`='$last_name',`email`='$email', `password`='$password' ";
  $query = mysqli_query($con, $sql);

  if ($query == true)
    {
			echo '<script> alert("Registered Sucessfully !"); window.location="login.php" </script>';
		}
		else {
			echo '<script> alert("Enter Data Correctly !"); window.location="Register.php" </script>';
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
  <link rel="canonical" href="register.php">
  <link rel="shortcut icon" href="../cdn/shop/files/icon_1_32x32.png?v=1613705152" type="image/png">
  <title>Create Account &ndash; ps-plants</title>
</head>

<body class="template-customers/register ">

  <!-- breadcrumb start -->


  <div class="breadcrumb-section">
    <div class="container">
      <div class="row">


        <div class="col-sm-6">
          <div class="page-title">




            <h2 class="lang_trans" data-trans="#create-account_breadcrumb_page_title">
              Create Account
            </h2>

            <span class="hide" id="create-account_breadcrumb_page_title">Create Account</span>


          </div>
        </div>
        <div class="col-sm-6">
          <nav aria-label="breadcrumb" class="theme-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../index.php" data-trans-key="general.breadcrumb.home">Home</a></li>



              <li class="breadcrumb-item active lang_trans" data-trans="#create-account_breadcrumb_active_page_title">
                Create Account
              </li>

              <span class="hide" id="create-account_breadcrumb_active_page_title">Create Account</span>


            </ol>
          </nav>
        </div>


      </div>
    </div>
  </div>

  <!-- breadcrumb End -->


  <!--section start-->
  <section class="register-page section-b-space">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3 data-trans-key="customer.register.title">Create Account</h3>
          <div class="theme-card">
            <form method="post" action="" id="create_customer" accept-charset="UTF-8"
              data-login-with-shop-sign-up="true" class="theme-form">

             
              <div class="form-row">
                <div class="col-md-6">
                  <label for="FirstName" data-trans-key="customer.register.first_name">First Name</label>
                  <input type="text" class="form-control" name="first_name" placeholder="First Name" id="FirstName"
                    autofocus="">
                </div>
                <div class="col-md-6">
                  <label for="LastName" data-trans-key="customer.register.last_name">Last Name</label>
                  <input type="text" class="form-control" name="last_name" id="LastName" placeholder="Last Name">
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6">
                  <label for="email" data-trans-key="customer.register.email">Email</label>
                  <input type="email" name="email" id="Email" placeholder="Email" class="form-control "
                    autocorrect="off" autocapitalize="off">
                </div>
                <div class="col-md-6">
                  <label for="review" data-trans-key="customer.register.password">Password</label>
                  <input type="password" name="password" placeholder="Password" id="CreatePassword"
                    class="form-control ">
                </div>
                <button class="btn btn-solid"  name="register" >Create</button>
              </div>
            </form>
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
                <form action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                  class="validate" target="_blank" novalidate="">
                  <div id="mc_embed_signup_scroll">
                    <div class="form-group">
                      <input type="email" class="required email form-control" value="" name="EMAIL"
                        placeholder="Enter Your Email" id="mce-EMAIL" required="">
                    </div>
                    <div id="mce-responses" class="clear">
                      <div class="response" id="mce-error-response" style="display:none"></div>
                      <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" hidden="">
                      <input type="text" name="b_17af379706d80b694776f991f_9ebb72e4d2" tabindex="-1" value="">
                    </div>
                    <button type="submit" class="btn btn-solid" name="subscribe" id="mc-embedded-subscribe"
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