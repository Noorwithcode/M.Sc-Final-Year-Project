<?php require "./widgets/header.php" ?>



<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2 class="lang_trans" data-trans="#contact-us_breadcrumb_page_title">
                        contact us
                    </h2>
                    <span class="hide" id="contact-us_breadcrumb_page_title">contact us</span>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"
                                data-trans-key="general.breadcrumb.home">Home</a></li>
                        <li class="breadcrumb-item active lang_trans"
                            data-trans="#contact-us_breadcrumb_active_page_title">
                            contact us
                        </li>
                        <span class="hide" id="contact-us_breadcrumb_active_page_title">contact us</span>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->
<div id="shopify-section-contact" class="shopify-section"><!--section start-->
    <section class="contact-page section-b-space">
        <div class="container">
            <div class="row section-b-space">
                <!-- <div class="col-lg-7 map">
                    <iframe src="https://www.google.com/maps/@25.6155251,88.1388979,11z?authuser=0&entry=ttu&g_ep=EgoyMDI0MDkxMS4wIKXMDSoASAFQAw%3D%3D" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div> -->
                <div class="col-lg-5">
                    <div class="contact-right">
                        <ul class="contact-right">
                            <li>
                                <div class="contact-icon">
                                    <h6 class="lang_trans" data-trans="#contact_1543297049952_service_title">
                                        CONTACT US
                                    </h6>
                                    <span class="hide" id="contact_1543297049952_service_title"></span>
                                </div>
                                <div>
                                    <p>+91-7001381035</p>
                                    <p>+91-8129735618</p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon">
                                    <h6 class="lang_trans" data-trans="#contact_1543297051597_service_title">
                                        address
                                    </h6>
                                    <span class="hide" id="contact_1543297051597_service_title"></span>
                                </div>
                                <div>
                                    <p>Itahar,Near Govt.Office, Raiganj </p>
                                    <p>INDIA 733128</p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon">
                                    <h6 class="lang_trans" data-trans="#contact_1543297053441_service_title">
                                        email
                                    </h6>
                                    <span class="hide" id="contact_1543297053441_service_title"></span>
                                </div>
                                <div>
                                    <p>Support@snplant.com</p>
                                    <p>info@SNursery.com</p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon">
                                    <h6 class="lang_trans" data-trans="#contact_1543297055067_service_title">
                                        fax
                                    </h6>
                                    <span class="hide" id="contact_1543297055067_service_title"></span>
                                </div>
                                <div>
                                <p>Support@snplant.com</p>
                                <p>info@SNursery.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <form method="post" action="contact-us.php" id="contact_form" accept-charset="UTF-8"
                        class="theme-form"><input type="hidden" name="form_type" value="contact"><input type="hidden"
                            name="utf8" value="✓">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="name" data-trans-key="contact.form.name">Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="ContactFormName"
                                    name="contact[name]" value="" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email" data-trans-key="contact.form.email">Email</label>
                                <input type="email" required="" class="form-control" placeholder="Email"
                                    id="ContactFormEmail" name="contact[email]" autocorrect="off" autocapitalize="off"
                                    value="">
                            </div>
                            <div class="col-md-12">
                                <label for="review" data-trans-key="contact.form.phone">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="ContactFormPhone"
                                    name="contact[phone]" pattern="[0-9\-]*" value="" required="">
                            </div>
                            <div class="col-md-12">
                                <label for="review" data-trans-key="contact.form.message">Message</label>
                                <textarea class="form-control" placeholder="Message" id="ContactFormMessage"
                                    name="contact[body]" rows="6"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button id="submit" class="btn btn-solid" name="submit"
                                    data-trans-key="contact.form.submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->
</div>
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
                                        <input type="email" class="required email form-control" value="" name="EMAIL"
                                            placeholder="Enter Your Email" id="mce-EMAIL" required="">
                                    </div>
                                    <div id="mce-responses" class="clear">
                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                    </div>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" hidden="">
                                        <input type="text" name="b_17af379706d80b694776f991f_9ebb72e4d2" tabindex="-1"
                                            value="">
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
<?php require "./widgets/footer.php" ?>