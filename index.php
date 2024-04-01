
<!DOCTYPE html>
<html lang="zxx">
<?php
require("layout/header.php");
require("layout/navbar.php");
?>


<body> 

  <!--   <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>/Page Preload -->

    <div class="layer"></div><!-- Opacity Mask -->

    
    <!-- /nav_panel -->

    <main>
        <!-- main index -->
        <div class="hero home-search full-height jarallax" data-jarallax-video="mp4:./video/cover.mp4,webm:./video/sunset.webm,ogv:./video/sunset.ogv" data-speed="0.2">
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <small class="slide-animated one">Luxury Resort Experience</small>
                    <h3>A unique Experience<br>where to stay</h3>
                    <small > Website Under Maintanance</small>
                    <div class="row justify-content-center slide-animated three">
                        <div class="col-xl-10">
                            <div class="row g-0 booking_form">
                                <div class="col-lg-4 ">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="dates" id="dates" placeholder="Check in / Check out" readonly="readonly">
                                        <i class="bi bi-calendar2"></i>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 pe-lg-0 pe-sm-1">
                                    <div class="qty-buttons">
                                        <label>Adults</label>
                                        <input type="button" value="+" class="qtyplus" name="adults">
                                        <input type="text" name="adults" id="adults" value="" class="qty form-control">
                                        <input type="button" value="-" class="qtyminus" name="adults">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 ps-lg-0 ps-sm-1">
                                    <div class="qty-buttons">
                                        <label>Childs</label>
                                        <input type="button" value="+" class="qtyplus" name="childs">
                                        <input type="text" name="childs" id="childs" value="" class="qty form-control">
                                        <input type="button" value="-" class="qtyminus" name="childs">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <input type="submit" class="btn_search" value="Search">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mouse_wp slide-animated four">
                    <a href="index.html" class="btn_scrollto">
                        <div class="mouse"></div>
                    </a>
                </div>
                <!-- /mouse_wp -->
            </div>
        </div>
        <!-- /jarallax video background -->
        <!-- /main index -->

        <div class="pattern_2">
            <div class="container margin_120_95" id="first_section">
                <div class="row justify-content-between flex-lg-row-reverse align-items-center">
                    <div class="col-lg-5">
                        <div class="parallax_wrapper">
                            <img src="img/home_2ooak.jpg" alt="a nother view villa isla" class="img-fluid rounded-img">
                            <div data-cue="slideInUp" class="img_over"><span data-jarallax-element="-30"><img src="img/home_1ooak.jpg" alt="drone view villa Aqua" class="rounded-img"></span></div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="intro">
                            <div class="title">
                                <small>About us</small>
                                <h1>The One Of A Kind Resort at Bintan</h1>
                            </div>
                            <p class="lead">Nature and Modern Concept Resort</p>
                            <p>We have 2 concept Villa's as like as Triangel having garden view with 2 floors and Qubes Concept has a sea view and BBQ on Rooftop. And all Villa's Has Private Pool</p>
                            <p><em>Signature by OOAK</em></p>
                        </div>
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <div class="pinned-image pinned-image--medium">
                <div class="pinned-image__container" id="section_video">
                    <video loop="loop" muted="muted" id="video_home">
                        <source src="video/compre.mp4" type="video/mp4">
                        <source src="video/swimming_pool_2.webm" type="video/webm">
                        <source src="video/swimming_pool_2.ogv" type="video/ogg">
                    </video>
                    <div class="pinned-image__container-overlay"></div>
                </div>
                <div class="pinned_over_content">
                    <div class="title white">
                        <small data-cue="slideInUp" data-delay="200">Luxury Resort</small>
                        <h2 data-cue="slideInUp" data-delay="300">One Of A Kind Bintan <br> Resort - Bintan</h2>
                    </div>
                </div>
            </div>
            <!-- /pinned content -->
        </div>
        <!-- /Pattern  -->   

        <?php
        require("layout/list-villa.php")
        ?>
        <!-- /container-->

        <div class="marquee">
            <div class="track">
                <div class="content">&nbsp;One Of A Kind Resort Bintan   Luxury & Nature Resort at Bintan Island</div>
            </div>
        </div>
        <!-- /marquee-->

        <div class="bg_white">
            <div class="container margin_120_95">
                <div class="row justify-content-between d-flex align-items-center add_bottom_90">
                    <div class="col-lg-6">
                        <div class="pinned-image rounded_container pinned-image--small mb-4">
                            <div class="pinned-image__container">
                                <img src="img/resto_1.jpg" alt="Azura Bistro Resto have vie garden">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="title">
                            <small>Local Amenities</small>
                            <h3>Restaurants</h3>
                            <p>
                                We have 2 restaurants, of which Azura Bistro Resto is located close to the garden
                                Open for breakfast and dinner,
                               Azura is a beach-style restaurant that hosts guests
                                can enjoy various themed buffets
                                with Asian and Western cuisine, and watching movies
                                with a barbeque in the evening in the garden. </p>
                            <p> And Oceanhouse
                                which is located close to the pier
                                open for lunch and dinner,
                                Oceanhouse is an open-air restaurant where guests can enjoy a 
                                variety of Chinese and seafood-themed buffets </p>
                            <p><a href="restaurant.html" class="btn_1 mt-1 outline">Read more</a></p>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row justify-content-between d-flex align-items-center add_bottom_90">
                    <div class="col-lg-6 order-lg-2">
                        <div class="pinned-image rounded_container pinned-image--small mb-4">
                            <div class="pinned-image__container">
                                <img src="img/kindstore_2.jpg" alt="Store at One Of A Kind, you can find souvenir or gift here">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-1">
                        <div class="title">
                            <small>Local Amenities</small>
                            <h3>Kind Store</h3>
                            <p>Kindstore showcases the beauty of Bintan Island with
                                a curated collection of clothing, gifts and art
                                in particular. create a bright display of clothing, jewelry,
                                our quality bags, shoes and works of art such as paintings,
                                statues, and typical Bintan batik which are suitable for gifts or
                                as a memory of your stay experience
                                fun at One Of A Kind Resort.</p>
                            <p><a href="about.html" class="btn_1 mt-1 outline">Read more</a></p>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row justify-content-between d-flex align-items-center">
                    <div class="col-lg-6">
                        <div class="pinned-image rounded_container pinned-image--small mb-4">
                            <div class="pinned-image__container">
                                <img src="img/mainpool_4.jpg" alt="Infinity Pool have beautyview straigh to the sea">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="title">
                            <small>Local Amenities</small>
                            <h3>Main Pool</h3>
                            <p>Our adults only infinity pool is
                                the perfect place to enjoy the tropical sunshine
                                and relax with a cold beer, cocktail or mocktail.
                                offering a sundeck, pool towels and life jackets if available,
                                Infinity Pool has a beautiful view of the beach
                                white with open sea.</p>
                            <p><a href="about.html" class="btn_1 mt-1 outline">Read more</a></p>
                        </div>
                    </div>
                </div>
                <!-- /row-->
            </div>
            <!-- /container-->
        </div>
        <!-- /bg_white -->

        <?php
        require("layout/guest-review.php")
        ?>
        <!-- /parallax_section_1-->

        <!-- Special Offers -->
        <?php
        require("layout/list-package.php")
        ?>
        <!--/bg_white -->

        <!-- Check Avaibility -->
        <?php
        require("layout/avaibility.php")
        ?>
        <!-- /container -->

    </main>
    
    <!-- /footer -->
    <?php
        require("layout/footer.php")
        ?>
    <!-- /footer -->

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>
    <!-- /back to top -->

<!-- COMMON SCRIPTS -->
<script src="js/common_scripts.js"></script>
<script src="js/common_functions.js"></script>
<script src="js/datepicker_search.js"></script>
<script src="js/datepicker_inline.js"></script>
<script src="phpmailer/validate.js"></script>

</body>
</html>