<?php require "./widgets/header.php";

if(isset($_GET['pid'])) {
    $q = $con->query("SELECT * FROM `products` WHERE `id`='".$_GET['pid']."' "); 
    $data = $q->fetch_assoc();

    if($data==null) {
        die("<script>location.href='./'</script>");
    }
}

?>

    <!-- breadcrumb start -->


    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">


                <div class="col-sm-6">
                    <div class="page-title">

                        <h2 class="lang_trans" data-trans="#money-plant_breadcrumb_page_title">
                            money plant
                        </h2>

                        <span class="hide" id="money-plant_breadcrumb_page_title">money plant</span>

                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./"
                                    data-trans-key="general.breadcrumb.home">Home</a></li>
                            

                            <span class="hide" id="money-plant_breadcrumb_active_page_title"><?= $data['title'] ?></span>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb End -->

<!-- section start -->
    <div id="shopify-section-product-left-image-template" class="shopify-section">
        <section id="ProductSection-product-left-image-template" data-section-id="product-left-image-template"
            data-section-type="product" data-enable-history-state="true">
            <meta itemprop="name" content="money plant">
            <meta itemprop="url" content="https://ps-plants.myshopify.com/products/money-plant">
            <meta itemprop="image"
                content="//ps-plants.myshopify.com/cdn/shop/products/11-min_c828606d-118f-4c2c-bc25-eb7c8a83e572_800x.jpg?v=1580473590">


            <div class="collection-wrapper">
                <div class="container">
                    <div class="row">
                        <div class=" col-lg-1 col-sm-2 col-xs-12 ">
                            <div class="row">
                                <div class="col-12 p-0">
                                     
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-10 col-xs-12 order-up">
                            <div class="product-right-slick">
                                <div id="FeaturedImageZoom-product-left-image-template-13851884191788-wrapper">
                                    <img itemprop="image"
                                        src="./img/<?= $data['thumbnail'] ?>"
                                        class="lazyload  img-fluid image_zoom_cls-0 main_img" alt="money plant">
                                </div>
                                

                            </div>
                        </div>

                        <div class="col-lg-7 ">
                            <div class="product-right">

                                <div class="product-counter">
                                    <div class="product_count">

                                    </div>
                                </div>

                                <h2 itemprop="name" class="lang_trans" data-trans="#4453320556588_pro_title"
                                    style="font-size: 25px;">
                                    <?= $data['title'] ?>
                                </h2>

                                <span class="hide" id="4453320556588_pro_title"><?= $data['title'] ?></span>


                                <meta itemprop="priceCurrency" content="USD">
                                <link itemprop="availability" href="http://schema.org/InStock">

                                <h4>

                                    <del id="product_compare_pricxe"> ₹ <?= $data['price'] ?>  </del>
                                    <span>-33% off</span>

                                </h4>
                                <h3 id="product_pricex"><span class="money">₹<?= $data['price'] ?></span> </h3>


                                 

                                <form action="/cart/add" method="post" enctype="multipart/form-data"
                                    id="AddToCartForm_id" data-section="product-left-image-template"> 
                                    <div class="product-description border-product"> 
                                        <h6 data-trans-key="products.product.quantity">Quantity:</h6>
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-left-minus"
                                                        data-type="minus" data-field="">
                                                        <i class="ti-angle-left"></i>
                                                    </button>
                                                </span>
                                                <input type="text" id="quantity" name="quantity"
                                                    class="form-control input-number" value="1" min="1" max="100">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-right-plus"
                                                        data-type="plus" data-field="">
                                                        <i class="ti-angle-right"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-product"></div>
                                    <div class="product-buttons">
                                        <!---<button type="submit" id="addtocart_btn_id"
                                            class="add_to_cart_btn_cls cart_btn_class btn btn-solid"
                                            data-trans-key="products.product.add_to_cart">Add to cart</button> -->

                                        <div class="dynamic-payment-button ml-2">
                                            <div data-shopify="payment-button" class="shopify-payment-button">
                                                <button type="button" 
                                                    class="shopify-payment-button__button shopify-payment-button__button--unbranded" 
                                                    onclick="makeOrder()">Buy Now</button>
                                                <button aria-disabled="true" aria-hidden="true"
                                                    class="shopify-payment-button__more-options shopify-payment-button__button--hidden"
                                                    type="button">More payment options</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-title cate-mode  mb-2">
                                        <h6 class="mb-1">Please <a href="nooralamb012@gmail.com">contact us</a> if
                                            you are interested in this product.</h6>
                                        <span>
                                            <a href="" data-toggle="modal" data-target="#product-inquiry"
                                                data-trans-key="products.product.ask_abt_pro">inquiry about product?</a>
                                        </span>
                                    </div>

                                    <!-- <div class="border-product">

                                        <div>
                                            <h6 class="product-title" data-trans-key="products.product.pro_details">
                                                product details
                                            </h6>
                                            <div class="pro-desc">
                                                <p class="lang1">Add an extra dose of style with this raw look henley
                                                    t-shirt from the house of Tinted. Team this T-shirt with distressed
                                                    jeans and leather sandals for a relaxed and cool look.Lorem Ipsum is
                                                    simply dummy text of the printing and typesetting industry. Lorem
                                                    Ipsum has been the industry's standard dummy text ever since the
                                                    1500s.Lorem Ipsum has been the...
                                                </p>
                                            </div>
                                        </div>
                                    </div> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section ends -->

<script>
    function makeOrder() {
        var qty =document.getElementById("quantity").value;
        window.open(`https://wa.me/+918129735618?text=Hello+I+want+to+purchase+<?= $data['title'] ?>, in ${qty} quantity.%0aPlease+connect+me+back!`)
    }
</script>
        <!-- product-tab starts -->

        <!-- <div class="container section-b-space">
            <div class="tab-product m-0">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link active" id="top-home-tab" data-toggle="tab" href="#top-home"
                                    role="tab" aria-selected="true">
                                    <i class="icofont icofont-ui-home"></i>
                                    <span class="lang_trans" data-trans="#tab_horizontal_4453320556588_tab_title_1">
                                        Description
                                    </span>

                                    <span class="hide" id="tab_horizontal_4453320556588_tab_title_1"></span>

                                </a>
                                <div class="material-border"></div>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" id="profile-top-tab" data-toggle="tab" href="#top-profile"
                                    role="tab" aria-selected="false">
                                    <i class="icofont icofont-man-in-glasses"></i>
                                    <span class="lang_trans" data-trans="#tab_horizontal_4453320556588_tab_title_2">
                                        Size Guide
                                    </span>

                                    <span class="hide" id="tab_horizontal_4453320556588_tab_title_2"></span>

                                </a>
                                <div class="material-border"></div>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" id="review-top-tab" data-toggle="tab" href="#top-review" role="tab"
                                    aria-selected="false">
                                    <i class="icofont icofont-contacts"></i>
                                    <span class="lang_trans" data-trans="#tab_horizontal_4453320556588_tab_title_3">
                                        Review
                                    </span>

                                    <span class="hide" id="tab_horizontal_4453320556588_tab_title_3"></span>

                                </a>
                                <div class="material-border"></div>
                            </li>

                        </ul>
                        <div class="tab-content nav-material" id="top-tabContent">

                            <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                                aria-labelledby="top-home-tab">

                                <div class="lang_desc_trans" data-trans="#tabs_4453320556588_desc">
                                    Add an extra dose of style with this raw look henley t-shirt from the house of
                                    Tinted. Team this T-shirt with distressed jeans and leather sandals for a relaxed
                                    and cool look.Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    but also the leap into electronic typesetting, remaining essentially unchanged. It
                                    was popularised in the 1960s with the release, and more recently with desktop
                                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem
                                    Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                    been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book. It has
                                    survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    [countdowntimer-date-start]
                                    <div class="timer_date" data-date="des 10,2021"></div>
                                    [countdowntimer-date-end]
                                </div>

                                <span class="hide" id="tabs_4453320556588_desc">Add an extra dose of style with this raw
                                    look henley t-shirt from the house of Tinted. Team this T-shirt with distressed
                                    jeans and leather sandals for a relaxed and cool look.Lorem Ipsum is simply dummy
                                    text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s.Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release, and more recently with desktop publishing software like Aldus PageMaker
                                    including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing
                                    and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                                    to make a type specimen book. It has survived not only five centuries, but also the
                                    leap into electronic typesetting, remaining essentially unchanged. It was
                                    popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                    passages, and more recently with desktop publishing software like Aldus PageMaker
                                    including versions of Lorem Ipsum. [countdowntimer-date-start]
                                    <div class="timer_date" data-date="des 10,2021"></div>
                                    [countdowntimer-date-end]
                                </span>


                            </div>


                            <div class="tab-pane fade" id="top-profile" role="tabpanel"
                                aria-labelledby="profile-top-tab">
                                <div>
                                    Enjoy the flexibility of our 30-day free returns policy! Simply pack the item, with
                                    its original packaging and tags, and the returns slip into the iOne delivery
                                    package. Feel free to drop the package of at any counter!
                                </div>
                            </div>


                            <div class="tab-pane fade" id="top-review" role="tabpanel" aria-labelledby="review-top-tab">
                                <div id="shopify-product-reviews" data-id="4453320556588"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- product-tab ends -->


        <!-- product section start -->

<!-- 
        <section class="section-b-space ratio_square product-related ">
            <div class="container">
                <div class="row">
                    <div class="col-12 product-related">
                        <h2 class=" title lang_trans" data-trans="#_related_pro_title">
                            Related Products
                        </h2>

                        <span class="hide" id="_related_pro_title"></span>

                    </div>
                </div>
                <div class="slide-6"
                    data-slick='{"slidesToShow": 6,"slidesToScroll": 1, "autoplay": true, "autoplaySpeed": 3000, "infinite": false, "arrows": true,"dots": false, "responsive":[{"breakpoint": 1367,"settings":{"slidesToShow": 5 }},{"breakpoint": 1024,"settings":{"slidesToShow": 4 }},{"breakpoint": 767,"settings":{"slidesToShow": 3 }},{"breakpoint": 420,"settings":{"slidesToShow": 2 }} ]}'>
                    <div>
                        <div class="product-box plant-product" data-pro-id="4453323112492">
                            <div class="img-wrapper">
                                <div class="lable-block">
                                    <span class="lable3 round large center"
                                        data-trans-key="sections.featured_product.new_tag">new</span>
                                    <span class="lable4 round large center"
                                        data-trans-key="sections.featured_product.sale_tag">sale</span>
                                </div>
                                <div class="front">
                                    <a href="voluptate-velit.html">
                                        <img src="../../../cdn/shop/products/image_4_81cf0dcf-b572-4063-a1ba-fa070eef721e_340x455.png?v=1580473826"
                                            class="lazyload  img-fluid  w-100" alt="Voluptate Velit">
                                    </a>
                                </div>

                                <div class="cart-info cart-wrap">

                                    <form method="post" enctype="multipart/form-data" action="/cart/add"
                                        class="product_grid_cart_form" id="product_grid_id_31756519538732">
                                        <input type="hidden" name="id" value="31756519538732">
                                        <button type="submit" title="Add to cart"
                                            class="add_to_cart_btn_cls fly_addtocart">
                                            <i class="ti-shopping-cart"></i>
                                        </button>
                                    </form>


                                    <a class="action--wishlist tile-actions--btn flex wishlist-btn"
                                        href="javascript:void(0)" data-product-handle="voluptate-velit">
                                        <i class="ti-heart btn--main" aria-hidden="true"></i>
                                    </a>


                                    <a class="quick-view" href="#quick-view-product" data-id="4453323112492"
                                        data-handle="voluptate-velit" title="Quick View"><i class="ti-search"
                                            aria-hidden="true"></i></a>



                                    <a href="#" data-pid="voluptate-velit" title="Compare" class="compare"><i
                                            class="ti-reload" aria-hidden="true"></i></a>


                                </div>
                            </div>

                            <div class="product-detail">


                                <div class="rating">
                                    <span class="shopify-product-reviews-badge" data-id="4453323112492"></span>
                                </div>


                                <a href="voluptate-velit.html">


                                    <h6 itemprop="name" class="lang_trans" data-trans="#4453323112492_pro_title">
                                        Voluptate Velit
                                    </h6>

                                    <span class="hide" id="4453323112492_pro_title">Voluptate Velit</span>

                                </a>


                                <h4 data-id="4453323112492" data-price="30100">
                                    <span class="money">₹301.00 </span>

                                    <del><span class="money">₹400.00 </span></del>

                                </h4>








                            </div>

                            <span id="pro_tags"
                                style="display:none;">large,new,nursery,small,upsell_plants,yellow</span>









                            <div class="hide">163705618476</div>



                            <script>





                            </script>

                        </div>

                    </div>





                    <div>

                        <div class="product-box plant-product" data-pro-id="4453321179180">
                            <div class="img-wrapper">

                                <div class="lable-block">






                                    <span class="lable4 round large center"
                                        data-trans-key="sections.featured_product.sale_tag">sale</span>


                                </div>

                                <div class="front">
                                    <a href="tenetur-1.html">

                                        <img src="../../../cdn/shop/products/image_17_f04f50a0-1762-4c0d-b726-e2f980029076_340x455.png?v=1580473995"
                                            class="lazyload  img-fluid  w-100" alt="Suscipit">

                                    </a>
                                </div>

                                <div class="cart-info cart-wrap">

                                    <form method="post" enctype="multipart/form-data" action="/cart/add"
                                        class="product_grid_cart_form" id="product_grid_id_31756514230316">
                                        <input type="hidden" name="id" value="31756514230316">
                                        <button type="submit" title="Add to cart"
                                            class="add_to_cart_btn_cls fly_addtocart">
                                            <i class="ti-shopping-cart"></i>
                                        </button>
                                    </form>


                                    <a class="action--wishlist tile-actions--btn flex wishlist-btn"
                                        href="javascript:void(0)" data-product-handle="tenetur-1">
                                        <i class="ti-heart btn--main" aria-hidden="true"></i>
                                    </a>


                                    <a class="quick-view" href="#quick-view-product" data-id="4453321179180"
                                        data-handle="tenetur-1" title="Quick View"><i class="ti-search"
                                            aria-hidden="true"></i></a>



                                    <a href="#" data-pid="tenetur-1" title="Compare" class="compare"><i
                                            class="ti-reload" aria-hidden="true"></i></a>


                                </div>
                            </div>

                            <div class="product-detail">


                                <div class="rating">
                                    <span class="shopify-product-reviews-badge" data-id="4453321179180"></span>
                                </div>


                                <a href="tenetur-1.html">


                                    <h6 itemprop="name" class="lang_trans" data-trans="#4453321179180_pro_title">
                                        Suscipit
                                    </h6>

                                    <span class="hide" id="4453321179180_pro_title">Suscipit</span>

                                </a>


                                <h4 data-id="4453321179180" data-price="10000">
                                    <span class="money">₹100.00 </span>

                                    <del><span class="money">₹200.00 </span></del>

                                </h4>

















                            </div>

                            <span id="pro_tags" style="display:none;">₹101-₹200,green,nursery,upsell_plants</span>









                            <div class="hide">163705618476</div>



                            <script>





                            </script>

                        </div>

                    </div>





                    <div>

                        <div class="product-box plant-product" data-pro-id="4453320818732">
                            <div class="img-wrapper">

                                <div class="lable-block">


                                    <span class="lable3 round large center"
                                        data-trans-key="sections.featured_product.new_tag">new</span>






                                </div>

                                <div class="front">
                                    <a href="tenetur.html">

                                        <img src="../../../cdn/shop/products/image_10_df5a40a6-41f4-4781-8801-92b2481d7bbc_340x455.png?v=1580473950"
                                            class="lazyload  img-fluid  w-100" alt="tenetur">

                                    </a>
                                </div>

                                <div class="cart-info cart-wrap">

                                    <form method="post" enctype="multipart/form-data" action="/cart/add"
                                        class="product_grid_cart_form" id="product_grid_id_31756510855212">
                                        <input type="hidden" name="id" value="31756510855212">
                                        <button type="submit" title="Add to cart"
                                            class="add_to_cart_btn_cls fly_addtocart">
                                            <i class="ti-shopping-cart"></i>
                                        </button>
                                    </form>


                                    <a class="action--wishlist tile-actions--btn flex wishlist-btn"
                                        href="javascript:void(0)" data-product-handle="tenetur">
                                        <i class="ti-heart btn--main" aria-hidden="true"></i>
                                    </a>


                                    <a class="quick-view" href="#quick-view-product" data-id="4453320818732"
                                        data-handle="tenetur" title="Quick View"><i class="ti-search"
                                            aria-hidden="true"></i></a>



                                    <a href="#" data-pid="tenetur" title="Compare" class="compare"><i class="ti-reload"
                                            aria-hidden="true"></i></a>


                                </div>
                            </div>

                            <div class="product-detail">


                                <div class="rating">
                                    <span class="shopify-product-reviews-badge" data-id="4453320818732"></span>
                                </div>


                                <a href="tenetur.html">


                                    <h6 itemprop="name" class="lang_trans" data-trans="#4453320818732_pro_title">
                                        tenetur
                                    </h6>

                                    <span class="hide" id="4453320818732_pro_title">tenetur</span>

                                </a>


                                <h4 data-id="4453320818732" data-price="25000">
                                    <span class="money">₹250.00 </span>

                                </h4>








                            </div>

                            <span id="pro_tags" style="display:none;">₹201-₹300,green,new,nursery,upsell_plants</span>









                            <div class="hide">163705618476</div>



                            <script>





                            </script>

                        </div>

                    </div>









                    <div>

                        <div class="product-box plant-product" data-pro-id="4453322260524">
                            <div class="img-wrapper">

                                <div class="lable-block">


                                    <span class="lable3 round large center"
                                        data-trans-key="sections.featured_product.new_tag">new</span>





                                    <span class="lable4 round large center"
                                        data-trans-key="sections.featured_product.sale_tag">sale</span>


                                </div>

                                <div class="front">
                                    <a href="malorum.html">

                                        <img src="../../../cdn/shop/products/image_16_124693d1-b116-4844-b987-e5dae15275f1_340x455.png?v=1580473680"
                                            class="lazyload  img-fluid  w-100" alt="Malorum">

                                    </a>
                                </div>

                                <div class="cart-info cart-wrap">

                                    <form method="post" enctype="multipart/form-data" action="/cart/add"
                                        class="product_grid_cart_form" id="product_grid_id_31756517441580">
                                        <input type="hidden" name="id" value="31756517441580">
                                        <button type="submit" title="Add to cart"
                                            class="add_to_cart_btn_cls fly_addtocart">
                                            <i class="ti-shopping-cart"></i>
                                        </button>
                                    </form>


                                    <a class="action--wishlist tile-actions--btn flex wishlist-btn"
                                        href="javascript:void(0)" data-product-handle="malorum">
                                        <i class="ti-heart btn--main" aria-hidden="true"></i>
                                    </a>


                                    <a class="quick-view" href="#quick-view-product" data-id="4453322260524"
                                        data-handle="malorum" title="Quick View"><i class="ti-search"
                                            aria-hidden="true"></i></a>



                                    <a href="#" data-pid="malorum" title="Compare" class="compare"><i class="ti-reload"
                                            aria-hidden="true"></i></a>


                                </div>
                            </div>

                            <div class="product-detail">


                                <div class="rating">
                                    <span class="shopify-product-reviews-badge" data-id="4453322260524"></span>
                                </div>


                                <a href="malorum.html">


                                    <h6 itemprop="name" class="lang_trans" data-trans="#4453322260524_pro_title">
                                        Malorum
                                    </h6>

                                    <span class="hide" id="4453322260524_pro_title">Malorum</span>

                                </a>


                                <h4 data-id="4453322260524" data-price="25000">
                                    <span class="money">₹250.00 </span>

                                    <del><span class="money">₹400.00 </span></del>

                                </h4>


















                            </div>

                            <span id="pro_tags" style="display:none;">₹301-₹400,green,new,nursery,upsell_plants</span>











                            <div class="hide">163705618476</div>



                            <script>





                            </script>

                        </div>

                    </div>





                    <div>

                        <div class="product-box plant-product" data-pro-id="4453321736236">
                            <div class="img-wrapper">

                                <div class="lable-block">






                                    <span class="lable4 round large center"
                                        data-trans-key="sections.featured_product.sale_tag">sale</span>


                                </div>

                                <div class="front">
                                    <a href="letraset-1.html">

                                        <img src="../../../cdn/shop/products/image_19_5d601062-dd8c-42fd-8546-029ddb6b7072_340x455.png?v=1580473582"
                                            class="lazyload  img-fluid  w-100" alt="Letraset">

                                    </a>
                                </div>

                                <div class="cart-info cart-wrap">

                                    <form method="post" enctype="multipart/form-data" action="/cart/add"
                                        class="product_grid_cart_form" id="product_grid_id_31756515115052">
                                        <input type="hidden" name="id" value="31756515115052">
                                        <button type="submit" title="Add to cart"
                                            class="add_to_cart_btn_cls fly_addtocart">
                                            <i class="ti-shopping-cart"></i>
                                        </button>
                                    </form>


                                    <a class="action--wishlist tile-actions--btn flex wishlist-btn"
                                        href="javascript:void(0)" data-product-handle="letraset-1">
                                        <i class="ti-heart btn--main" aria-hidden="true"></i>
                                    </a>


                                    <a class="quick-view" href="#quick-view-product" data-id="4453321736236"
                                        data-handle="letraset-1" title="Quick View"><i class="ti-search"
                                            aria-hidden="true"></i></a>



                                    <a href="#" data-pid="letraset-1" title="Compare" class="compare"><i
                                            class="ti-reload" aria-hidden="true"></i></a>


                                </div>
                            </div>

                            <div class="product-detail">


                                <div class="rating">
                                    <span class="shopify-product-reviews-badge" data-id="4453321736236"></span>
                                </div>


                                <a href="letraset-1.html">


                                    <h6 itemprop="name" class="lang_trans" data-trans="#4453321736236_pro_title">
                                        Letraset
                                    </h6>

                                    <span class="hide" id="4453321736236_pro_title">Letraset</span>

                                </a>


                                <h4 data-id="4453321736236" data-price="10000">
                                    <span class="money">₹100.00 </span>

                                    <del><span class="money">₹200.00 </span></del>

                                </h4>


















                            </div>

                            <span id="pro_tags"
                                style="display:none;">₹101-₹200,green,large,medium,nursery,small,upsell_plants,yellow</span>











                            <div class="hide">163705618476</div>



                            <script>





                            </script>

                        </div>

                    </div>




                </div>
            </div>
        </section> -->




 

        <!-- product section end -->

        <div class="modal fade" id="sizemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">



                        <h5 id="exampleModalLabel" class="modal-title lang_trans" data-trans="#4453320556588_pro_title">
                            money plant
                        </h5>

                        <span class="hide" id="4453320556588_pro_title">money plant</span>


                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">



                        <img src="../../../s/files/1/0032/3279/2674/files/size-chart.jpg?v=1542965023" alt="">

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="product-inquiry" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Have a question?</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8"
                            class="theme-form"><input type="hidden" name="form_type" value="contact"><input
                                type="hidden" name="utf8" value="✓">





                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" class="form-control" placeholder="Name" id="ContactFormName"
                                        name="contact[name]" value="" required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" required="" class="form-control" placeholder="Email"
                                        id="ContactFormEmail" name="contact[email]" autocorrect="off"
                                        autocapitalize="off" value="">
                                </div>
                                <div class="col-md-12">
                                    <label for="review">Phone number</label>
                                    <input type="tel" class="form-control" placeholder="Phone Number"
                                        id="ContactFormPhone" name="contact[phone]" pattern="[0-9\-]*" value=""
                                        required="">
                                </div>
                                <div class="col-md-12">
                                    <label for="review">Your Message</label>
                                    <textarea class="form-control" placeholder="Message" id="ContactFormMessage"
                                        name="contact[body]" rows="6"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button id="submit" class="btn btn-solid" name="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <script type="application/json" id="ProductJson-product-left-image-template">
    {"id":4453320556588,"title":"money plant","handle":"money-plant","description":"Add an extra dose of style with this raw look henley t-shirt from the house of Tinted. Team this T-shirt with distressed jeans and leather sandals for a relaxed and cool look.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. [countdowntimer-date-start]\n\u003cdiv class=\"timer_date\" data-date=\"des 10,2021\"\u003e\u003c\/div\u003e\n[countdowntimer-date-end]","published_at":"2020-01-16T06:20:38-05:00","created_at":"2020-01-16T06:20:43-05:00","vendor":"Multikart_fashion","type":"","tags":["green","large","medium","new","nursery","sma","upsell_plants"],"price":20100,"price_min":20100,"price_max":20100,"available":true,"price_varies":false,"compare_at_price":30000,"compare_at_price_min":30000,"compare_at_price_max":30000,"compare_at_price_varies":false,"variants":[{"id":31756510003244,"title":"green","option1":"green","option2":null,"option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"money plant - green","public_title":"green","options":["green"],"price":20100,"weight":0,"compare_at_price":30000,"inventory_management":"shopify","barcode":"","requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}}],"images":["\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/11-min_c828606d-118f-4c2c-bc25-eb7c8a83e572.jpg?v=1580473590","\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/13-min_61e2a3fd-b5ef-431f-a7b4-35b053a2b2ee.jpg?v=1580473693","\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/12-min_882e39ec-a4ac-42ce-bb59-6fbb978c7a8e.jpg?v=1580473693","\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/image_14_36d7412d-8336-45bd-8cc6-b6cb27347e0a.png?v=1580473693"],"featured_image":"\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/11-min_c828606d-118f-4c2c-bc25-eb7c8a83e572.jpg?v=1580473590","options":["Color"],"media":[{"alt":null,"id":6024781070380,"position":1,"preview_image":{"aspect_ratio":0.736,"height":1000,"width":736,"src":"\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/11-min_c828606d-118f-4c2c-bc25-eb7c8a83e572.jpg?v=1580473590"},"aspect_ratio":0.736,"height":1000,"media_type":"image","src":"\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/11-min_c828606d-118f-4c2c-bc25-eb7c8a83e572.jpg?v=1580473590","width":736},{"alt":null,"id":6024781135916,"position":2,"preview_image":{"aspect_ratio":0.736,"height":1000,"width":736,"src":"\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/13-min_61e2a3fd-b5ef-431f-a7b4-35b053a2b2ee.jpg?v=1580473693"},"aspect_ratio":0.736,"height":1000,"media_type":"image","src":"\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/13-min_61e2a3fd-b5ef-431f-a7b4-35b053a2b2ee.jpg?v=1580473693","width":736},{"alt":null,"id":6024781103148,"position":3,"preview_image":{"aspect_ratio":0.736,"height":1000,"width":736,"src":"\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/12-min_882e39ec-a4ac-42ce-bb59-6fbb978c7a8e.jpg?v=1580473693"},"aspect_ratio":0.736,"height":1000,"media_type":"image","src":"\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/12-min_882e39ec-a4ac-42ce-bb59-6fbb978c7a8e.jpg?v=1580473693","width":736},{"alt":null,"id":6179517726764,"position":4,"preview_image":{"aspect_ratio":0.747,"height":455,"width":340,"src":"\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/image_14_36d7412d-8336-45bd-8cc6-b6cb27347e0a.png?v=1580473693"},"aspect_ratio":0.747,"height":455,"media_type":"image","src":"\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/image_14_36d7412d-8336-45bd-8cc6-b6cb27347e0a.png?v=1580473693","width":340}],"requires_selling_plan":false,"selling_plan_groups":[],"content":"Add an extra dose of style with this raw look henley t-shirt from the house of Tinted. Team this T-shirt with distressed jeans and leather sandals for a relaxed and cool look.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. [countdowntimer-date-start]\n\u003cdiv class=\"timer_date\" data-date=\"des 10,2021\"\u003e\u003c\/div\u003e\n[countdowntimer-date-end]"}
</script>



        <script type="text/javascript">
            $(document).ready(function () {
                $('.product-slick').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    autoplay: true,
                    autoplaySpeed: 1500,
                    fade: true,
                    adaptiveHeight: true,
                    asNavFor: '.slider-nav'
                });

                $('.slider-nav').slick({
                    vertical: false,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    asNavFor: '.product-slick',
                    arrows: false,
                    dots: false,
                    autoplay: true,
                    focusOnSelect: true,
                    autoplaySpeed: 1500,
                });

                $('.product-right-slick').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    fade: true,
                    adaptiveHeight: true,
                    asNavFor: '.slider-right-nav',
                    autoplay: true,
                    autoplaySpeed: 1500,
                });
                if ($(window).width() > 576) {
                    $('.slider-right-nav').slick({
                        vertical: true,
                        verticalSwiping: true,
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        asNavFor: '.product-right-slick',
                        arrows: false,
                        infinite: true,
                        dots: false,
                        centerMode: false,
                        focusOnSelect: true,
                        autoplay: true,
                        autoplaySpeed: 1500,
                    });
                } else {
                    $('.slider-right-nav').slick({
                        vertical: false,
                        verticalSwiping: false,
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        asNavFor: '.product-right-slick',
                        arrows: false,
                        infinite: true,
                        centerMode: false,
                        dots: false,
                        focusOnSelect: true,

                        responsive: [
                            {
                                breakpoint: 576,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 1
                                }
                            }
                        ]
                    });
                }
            });

            var selectCallback = function (variant, selector) {


                if (variant && variant.available == true) {
                    var shop_curr = '<span class=money>${{amount}} </span>';
                    // selected a valid variant
                    jQuery('#addtocart_btn_id').removeClass('disabled').removeAttr('disabled');
                    jQuery('#product_price').html(Shopify.formatMoney(variant.price, shop_curr));
                    jQuery('#product_compare_price').html(Shopify.formatMoney(variant.compare_at_price, shop_curr));
                    var var_title = variant.title;
                    jQuery('.pro_sku span').text(variant.sku);
                    jQuery('.in-stock').show();
                    jQuery('.out-of-stock').hide();
                    jQuery('.sold_notify_form').hide();
                    jQuery('.pro_inventory p, .inventory-scroll').each(function () {
                        var inventry_val = jQuery(this).attr('data-value');
                        if (inventry_val == var_title) {
                            jQuery(this).addClass('active');
                        } else {
                            jQuery(this).removeClass('active');
                        }
                    });
                    jQuery('.pro_inventory p, .inventory-scroll').hide();
                    jQuery('.pro_inventory p.active, .inventory-scroll.active').show();

                } else {
                    // variant doesn't exist
                    jQuery('#addtocart_btn_id').addClass('disabled').attr('disabled', 'disabled');
                    var message = variant ? "Sold Out" : "Unavailable";
                    jQuery('#product_price').text(message);
                    jQuery('#product_compare_price').html('');
                    jQuery('.pro_sku span').text('Sold');
                    jQuery('.in-stock').hide();
                    jQuery('.out-of-stock').show();
                    jQuery('.sold_notify_form').show();
                    jQuery('.pro_inventory p, .inventory-scroll').hide();
                }

                // END SWATCHES
                if (variant && variant.featured_image) {
                    var originalImage = $(".product-right-slick .slick-active img, .product-slick .slick-active img");
                    var newImage = variant.featured_image;
                    var element = originalImage[0]
                        , groupImage = String(variant.featured_image.alt);


                    if (groupImage != 'null') {
                        jQuery('.slider-right-nav .slick-slide, .slider-nav .slick-slide').each(function () {
                            var _group_class = jQuery(this).find('img').attr("alt");
                            jQuery(this).addClass(_group_class);
                        });
                        $('.slider-right-nav, .slider-nav').slick('slickUnfilter');
                        $('.slider-right-nav, .slider-nav').slick('slickFilter', '.' + groupImage + ',.group-all');
                        $('.slider-right-nav, .slider-nav').attr('data-filter', '.' + groupImage);
                    };


                    Shopify.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
                        $(".product-right-slick .slick-slide, .product-slick .slick-slide").each(function (index) {
                            var temp_img_src = $(this).find('img').attr('src');
                            var new_temp_img_src = temp_img_src.substring(0, temp_img_src.indexOf("?"));
                            var temp_newImageSizedSrc = newImageSizedSrc.substring(0, newImageSizedSrc.indexOf("?"));
                            var temp_data_index = $(this).attr('data-slick-index');
                            if (new_temp_img_src == temp_newImageSizedSrc) {
                                $('.product-right-slick, .product-slick').slick('slickGoTo', temp_data_index);
                            }
                        });
                    });
                }
            };

            jQuery(function ($) {
                new Shopify.OptionSelectors('productSelect', {
                    product: { "id": 4453320556588, "title": "money plant", "handle": "money-plant", "description": "Add an extra dose of style with this raw look henley t-shirt from the house of Tinted. Team this T-shirt with distressed jeans and leather sandals for a relaxed and cool look.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. [countdowntimer-date-start]\n\u003cdiv class=\"timer_date\" data-date=\"des 10,2021\"\u003e\u003c\/div\u003e\n[countdowntimer-date-end]", "published_at": "2020-01-16T06:20:38-05:00", "created_at": "2020-01-16T06:20:43-05:00", "vendor": "Multikart_fashion", "type": "", "tags": ["green", "large", "medium", "new", "nursery", "sma", "upsell_plants"], "price": 20100, "price_min": 20100, "price_max": 20100, "available": true, "price_varies": false, "compare_at_price": 30000, "compare_at_price_min": 30000, "compare_at_price_max": 30000, "compare_at_price_varies": false, "variants": [{ "id": 31756510003244, "title": "green", "option1": "green", "option2": null, "option3": null, "sku": "", "requires_shipping": true, "taxable": true, "featured_image": null, "available": true, "name": "money plant - green", "public_title": "green", "options": ["green"], "price": 20100, "weight": 0, "compare_at_price": 30000, "inventory_management": "shopify", "barcode": "", "requires_selling_plan": false, "selling_plan_allocations": [], "quantity_rule": { "min": 1, "max": null, "increment": 1 } }], "images": ["\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/11-min_c828606d-118f-4c2c-bc25-eb7c8a83e572.jpg?v=1580473590", "\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/13-min_61e2a3fd-b5ef-431f-a7b4-35b053a2b2ee.jpg?v=1580473693", "\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/12-min_882e39ec-a4ac-42ce-bb59-6fbb978c7a8e.jpg?v=1580473693", "\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/image_14_36d7412d-8336-45bd-8cc6-b6cb27347e0a.png?v=1580473693"], "featured_image": "\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/11-min_c828606d-118f-4c2c-bc25-eb7c8a83e572.jpg?v=1580473590", "options": ["Color"], "media": [{ "alt": null, "id": 6024781070380, "position": 1, "preview_image": { "aspect_ratio": 0.736, "height": 1000, "width": 736, "src": "\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/11-min_c828606d-118f-4c2c-bc25-eb7c8a83e572.jpg?v=1580473590" }, "aspect_ratio": 0.736, "height": 1000, "media_type": "image", "src": "\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/11-min_c828606d-118f-4c2c-bc25-eb7c8a83e572.jpg?v=1580473590", "width": 736 }, { "alt": null, "id": 6024781135916, "position": 2, "preview_image": { "aspect_ratio": 0.736, "height": 1000, "width": 736, "src": "\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/13-min_61e2a3fd-b5ef-431f-a7b4-35b053a2b2ee.jpg?v=1580473693" }, "aspect_ratio": 0.736, "height": 1000, "media_type": "image", "src": "\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/13-min_61e2a3fd-b5ef-431f-a7b4-35b053a2b2ee.jpg?v=1580473693", "width": 736 }, { "alt": null, "id": 6024781103148, "position": 3, "preview_image": { "aspect_ratio": 0.736, "height": 1000, "width": 736, "src": "\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/12-min_882e39ec-a4ac-42ce-bb59-6fbb978c7a8e.jpg?v=1580473693" }, "aspect_ratio": 0.736, "height": 1000, "media_type": "image", "src": "\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/12-min_882e39ec-a4ac-42ce-bb59-6fbb978c7a8e.jpg?v=1580473693", "width": 736 }, { "alt": null, "id": 6179517726764, "position": 4, "preview_image": { "aspect_ratio": 0.747, "height": 455, "width": 340, "src": "\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/image_14_36d7412d-8336-45bd-8cc6-b6cb27347e0a.png?v=1580473693" }, "aspect_ratio": 0.747, "height": 455, "media_type": "image", "src": "\/\/ps-plants.myshopify.com\/cdn\/shop\/products\/image_14_36d7412d-8336-45bd-8cc6-b6cb27347e0a.png?v=1580473693", "width": 340 }], "requires_selling_plan": false, "selling_plan_groups": [], "content": "Add an extra dose of style with this raw look henley t-shirt from the house of Tinted. Team this T-shirt with distressed jeans and leather sandals for a relaxed and cool look.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. [countdowntimer-date-start]\n\u003cdiv class=\"timer_date\" data-date=\"des 10,2021\"\u003e\u003c\/div\u003e\n[countdowntimer-date-end]" },
                    onVariantSelected: selectCallback,
                    enableHistoryState: true
                });
                // Add label if only one product option and it isn't 'Title'. Could be 'Size'.

                var label_text = 'Color';
                $('.selector-wrapper:eq(0)').prepend('<label for="productSelect-option-0">' + label_text + '</label>');


                // Hide selectors if we only have 1 variant and its title contains 'Default'.



                $('.selector-wrapper').addClass('hide');







                $('.single-option-selector:eq(0)').val("green").trigger('change');




            });

            if ($(window).width() > 991) {
                $('.product-right-slick, .product-slick').on('afterChange', function (event, slick, currentSlide, nextSlide) {
                    var img_url_temp = $(this).find('img').attr('src');
                    var imgs = $('.image_zoom_cls');
                    $('.zoomContainer').remove();
                    imgs.removeData('elevateZoom');
                    imgs.removeData('zoomImage');
                    var temp_zoom_cls = '.image_zoom_cls-' + currentSlide;
                    setTimeout(function () {
                        $(temp_zoom_cls).elevateZoom({
                            zoomType: "inner",
                            cursor: "crosshair"
                        });
                    }, 300);
                });
            }
            if ($(window).width() > 991) {
                setTimeout(function () {
                    $(".slick-current .main_img").elevateZoom({
                        zoomType: "inner",
                        cursor: "crosshair"
                    });
                }, 300);
            }




            var timer_date = $('.timer_date').attr('data-date');
            var countDownDate = new Date(timer_date).getTime();

            var x = setInterval(function () {

                var now = new Date().getTime();

                var distance = countDownDate - now;

                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById("timer").innerHTML = "<span>" + days + "<span class='padding-l'>:</span><span class='timer-cal'>Days</span></span>" + "<span>" + hours + "<span class='padding-l'>:</span><span class='timer-cal'>Hrs</span></span>"
                    + "<span>" + minutes + "<span class='padding-l'>:</span><span class='timer-cal'>Min</span></span>" + "<span>" + seconds + "<span class='timer-cal'>Sec</span></span> ";

                // If the count down is over, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("timer").innerHTML = "EXPIRED";
                }
            }, 1000);



            $(document).ready(function () {
                $('.image-360').click(function () {
                    $('body').addClass('show-360');

                });
                $('.close-360').click(function () {
                    $('body').removeClass('show-360');
                });
                $('#notify-me').click(function () {
                    jQuery('#notify-me-wrapper').fadeIn();
                    return false;
                });

            });

        </script>







    </div>
<!-- section End -->


<!--NewsLetter Start--->
    <div id="shopify-section-newsletter" class="shopify-section">
        <section class="plant-footer "
            style="padding:70px 0px 70px 0px ; background-image: url(../../../cdn/shop/files/newsletter2.png);    background-repeat: no-repeat; ">

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

   <?php  require "./widgets/footer.php" ?>