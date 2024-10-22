<?php require "./widgets/header.php" ?>


<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2 class="lang_trans" data-trans="#trending-offer_breadcrumb_page_title">
                        trending offer
                    </h2>
                    <span class="hide" id="trending-offer_breadcrumb_page_title">trending offer</span>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.htm"
                                data-trans-key="general.breadcrumb.home">Home</a></li>
                        <li class="breadcrumb-item active lang_trans"
                            data-trans="#trending-offer_breadcrumb_active_page_title">
                            trending offer
                        </li>
                        <span class="hide" id="trending-offer_breadcrumb_active_page_title">trending offer</span>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->




<!-- section start -->
<div id="shopify-section-collection-without-sidebar-template" class="shopify-section">
    <section class="section-b-space ratio_asos">
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="collection-content col" data-sticky_column="">
                        <div class="page-main-content">
                            <div class="container">
                                <div class="row">
                                    <div class="collection-content col">
                                        <div class="top-banner-wrapper">
                                            <div class="top-banner-content small-section">
                                                <h4 class="coll_title" data-trans-key="collections.filters.all_tags">
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="collection-product-wrapper">

                                            <div class="product-wrapper-ajax ">
                                                <div class="product-wrapper-grid collection-grid">
                                                    <div class="container-fluid">
                                                        <div class="collection_ajax_loader">
                                                            <div class="cssload-thecube">
                                                                <div class="cssload-cube cssload-c1"></div>
                                                                <div class="cssload-cube cssload-c2"></div>
                                                                <div class="cssload-cube cssload-c4"></div>
                                                                <div class="cssload-cube cssload-c3"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row sapce-category product">


                                                            <?php  $ch = $con->query("SELECT *  FROM `products` order by id desc  ");
                                                            while($data = $ch->fetch_assoc())  {?>


                                                                <div class="col-lg-3 col-md-4 col-6 col-grid-box ">
                                                                    <div class="product-box plant-product"
                                                                        data-pro-id="4453321736236">
                                                                        <div class="img-wrapper">
                                                                            <div class="lable-block">
                                                                                <span class="lable3 round large center"
                                                                                    data-trans-key="sections.featured_product.new_tag">new</span>
                                                                               
                                                                            </div>
                                                                            <div class="front">
                                                                                <a
                                                                                    href="product.php?pid=<?= $data['id'] ?>">
                                                                                    <img src="img/<?= $data['thumbnail'] ?>"
                                                                                        class="lazyload  img-fluid  w-100"
                                                                                        alt="Letraset">
                                                                                </a>
                                                                            </div>
                                                                             
                                                                        </div>
                                                                        <div class="product-detail">
                                                                            <div class="rating">
                                                                                <span class="shopify-product-reviews-badge"
                                                                                    data-id="4453321736236"></span>
                                                                            </div>
                                                                            <a
                                                                                href="product.php?pid=<?= $data['id'] ?>">
                                                                                <h6 itemprop="name" class="lang_trans"
                                                                                    data-trans="#4453321736236_pro_title">
                                                                                    <?= $data['title'] ?>
                                                                                </h6>
                                                                               
                                                                            </a>
                                                                            <h4 data-id="4453321736236" data-price="10000">
                                                                                <span class="money">₹ <?= $data['price'] ?> </span>
                                                                               
                                                                            </h4>
                                                                        </div>
                                                                        
                                                                        <div class="hide">163705618476</div>
                                                                        <script>
                                                                        </script>
                                                                    </div>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section End -->
     
    <script>
        //  category page //
        $('.collapse-block-title').on('click', function (e) {
            e.preventDefault;
            var speed = 300;
            var thisItem = $(this).parent(),
                nextLevel = $(this).next().next('.collection-collapse-block-content');
            if (thisItem.hasClass('open')) {
                thisItem.removeClass('open');
                nextLevel.slideUp(speed);
            }
            else {
                thisItem.addClass('open');
                nextLevel.slideDown(speed);
            }
        });
        //list layout view
        $('.list-layout-view').on('click', function (e) {
            $(".product-wrapper-grid").css("opacity", "0.2");
            $('.ajax-loader').css("display", "block");
            $('.product-wrapper-grid').addClass("list-view");
            $(".product-wrapper-grid").children().children().children().removeClass();
            $(".product-wrapper-grid").children().children().children().addClass("col-lg-12");
            $('.product-box .img-wrapper').css({
                'min-height': 'auto',
                'max-height': 'inherit'
            });
            setTimeout(function () {
                $(".product-wrapper-grid").css("opacity", "1");
                $('.ajax-loader').css("display", "none");
            }, 500);
        });
        //grid layout view
        $('.grid-layout-view').on('click', function (e) {
            $('.product-wrapper-grid').removeClass("list-view");
            $(".product-wrapper-grid").children().children().children().removeClass();
            $(".product-wrapper-grid").children().children().children().addClass("col-lg-3");
            $('.product-box .img-wrapper').css({
                'min-height': 'auto',
                'max-height': 'inherit'
            });
            setTimeout(function () {
                var max = -1;
                $('.product-box .img-wrapper').each(function () {
                    var minHeight = $(this).innerHeight();
                    max = minHeight > max ? minHeight : max;
                });
                $('.product-box .img-wrapper').css({
                    'min-height': max,
                    'max-height': max
                });
            }, 200);
        });
        $('.product-2-layout-view').on('click', function (e) {
            if ($('.product-wrapper-grid').hasClass("list-view")) { }
            else {
                $(this).parent().addClass('active').siblings().removeClass('active');
                $(".product-wrapper-grid").children().children().children().removeClass();
                $(".product-wrapper-grid").children().children().children().addClass("col-lg-6");
                $('.product-box .img-wrapper').css({
                    'min-height': 'auto',
                    'max-height': 'inherit'
                });
                setTimeout(function () {
                    var max = -1;
                    $('.product-box .img-wrapper').each(function () {
                        var minHeight = $(this).innerHeight();
                        max = minHeight > max ? minHeight : max;
                    });
                    $('.product-box .img-wrapper').css({
                        'min-height': max,
                        'max-height': max
                    });
                }, 200);
            }
        });
        $('.product-3-layout-view').on('click', function (e) {
            if ($('.product-wrapper-grid').hasClass("list-view")) { }
            else {
                $(this).parent().addClass('active').siblings().removeClass('active');
                $(".product-wrapper-grid").children().children().children().removeClass();
                $(".product-wrapper-grid").children().children().children().addClass("col-lg-4");
                $('.product-box .img-wrapper').css({
                    'min-height': 'auto',
                    'max-height': 'inherit'
                });
                setTimeout(function () {
                    var max = -1;
                    $('.product-box .img-wrapper').each(function () {
                        var minHeight = $(this).innerHeight();
                        max = minHeight > max ? minHeight : max;
                    });
                    $('.product-box .img-wrapper').css({
                        'min-height': max,
                        'max-height': max
                    });
                }, 200);
            }
        });
        $('.product-4-layout-view').on('click', function (e) {
            if ($('.product-wrapper-grid').hasClass("list-view")) { }
            else {
                $(this).parent().addClass('active').siblings().removeClass('active');
                $(".product-wrapper-grid").children().children().children().removeClass();
                $(".product-wrapper-grid").children().children().children().addClass("col-lg-3");
                $('.product-box .img-wrapper').css({
                    'min-height': 'auto',
                    'max-height': 'inherit'
                });
                setTimeout(function () {
                    var max = -1;
                    $('.product-box .img-wrapper').each(function () {
                        var minHeight = $(this).innerHeight();
                        max = minHeight > max ? minHeight : max;
                    });
                    $('.product-box .img-wrapper').css({
                        'min-height': max,
                        'max-height': max
                    });
                }, 200);
            }
        });
        $('.product-6-layout-view').on('click', function (e) {
            if ($('.product-wrapper-grid').hasClass("list-view")) { }
            else {
                $(this).parent().addClass('active').siblings().removeClass('active');
                $(".product-wrapper-grid").children().children().children().removeClass();
                $(".product-wrapper-grid").children().children().children().addClass("col-lg-2");
                $('.product-box .img-wrapper').css({
                    'min-height': 'auto',
                    'max-height': 'inherit'
                });
                setTimeout(function () {
                    var max = -1;
                    $('.product-box .img-wrapper').each(function () {
                        var minHeight = $(this).innerHeight();
                        max = minHeight > max ? minHeight : max;
                    });
                    $('.product-box .img-wrapper').css({
                        'min-height': max,
                        'max-height': max
                    });
                }, 200);
            }
        });
        $(document).ready(function () {
            if ($(window).width() > 991) {
                $(".coll_sidebar, .collection-content").stick_in_parent();
            }
        });
    </script>
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