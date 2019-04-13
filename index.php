<?php include("./includes/settings.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>
    <?php include('./includes/header-imports.php') ?>
</head>
<body>
    <!-- website header[start] -->
    <?php include('./components/shared/header.php') ?> 
    <!-- website header[end] -->
    <!-- common loader[start] -->
    <?php include('./components/shared/loader.php') ?>
    <!-- common loader[end] -->
    <main>
        <!-- main slider[start] -->   
        <section class="main_banner">
            <div class="hero_slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="hero_slider_each swiper-slide">
                        <div class="hero_slider_each--img" style="background-image: url('<?php echo $imagesurl ?>main-banner.jpg')"></div>                        
                        <div class="hero_slider_each_data">
                            <div class="container">
                                <h2 class="hero_slider_each_data--title">GREATER LUG OVERLAP.<br/>LESS VIBRATIONS ON ROAD.</h2>
                                <h2 class="hero_slider_each_data--sub">Presenting CEAT Farmax85 Farm Radials</h2>
                                <a href="javascript:void(0)" class="hero_slider_each_data--btn">Know More</a>
                            </div>
                        </div>
                    </div>
                    <div class="hero_slider_each swiper-slide">
                        <div class="hero_slider_each--img" style="background-image: url('<?php echo $imagesurl ?>main-banner.jpg')"></div>
                        <div class="hero_slider_each_data">
                            <div class="container">
                                <h2 class="hero_slider_each_data--title">GREATER LUG OVERLAP.<br/>LESS VIBRATIONS ON ROAD.</h2>
                                <h2 class="hero_slider_each_data--sub">Presenting CEAT Farmax85 Farm Radials</h2>
                                <a href="javascript:void(0)" class="hero_slider_each_data--btn">Know More</a>
                            </div>
                        </div>
                    </div>
                    <div class="hero_slider_each swiper-slide">
                        <div class="hero_slider_each--img" style="background-image: url('<?php echo $imagesurl ?>main-banner.jpg')"></div>
                        <div class="hero_slider_each_data">
                            <div class="container">
                                <h2 class="hero_slider_each_data--title">GREATER LUG OVERLAP.<br/>LESS VIBRATIONS ON ROAD.</h2>
                                <h2 class="hero_slider_each_data--sub">Presenting CEAT Farmax85 Farm Radials</h2>
                                <a href="javascript:void(0)" class="hero_slider_each_data--btn">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider_controls">
                    <div class="slider_controls_arrows slide-prev">
                        <svg width="12.297" height="10.078" viewBox="0 0 12.297 10.078">
                            <g transform="translate(-0.591 11.664) rotate(-90)">
                                <g transform="translate(1.586 0.591)">
                                    <path d="M7.109,12.888H6.141V2.443L2.27,6.314,1.586,5.63,6.625.591,11.664,5.63l-.684.684L7.109,2.443Z" transform="translate(-1.586 -0.591)" fill-rule="evenodd"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="slider_controls_dots slide-dots"></div>
                    <div class="slider_controls_arrows slide-next">
                        <svg width="12.298" height="10.078" viewBox="0 0 12.298 10.078">
                            <g  transform="translate(12.888 -1.586) rotate(90)">
                                <g transform="translate(1.586 0.591)">
                                    <path d="M7.109,12.888H6.141V2.443L2.27,6.314,1.586,5.63,6.625.591,11.664,5.63l-.684.684L7.109,2.443Z" transform="translate(-1.586 -0.591)" fill="#076ed5" fill-rule="evenodd"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </section>
        <!-- main slider[end] -->
        <div class="py-3"></div>
        <!-- single box post[start] -->
        <div class="container">
            <div class="row py-md-5 py-4">
                <div class="col-md-6 offset-md-3">
                    <div class="c_title pb-2">
                        <h1 class="c_title--inner big">Driven by the power of CTR</h1>
                    </div>
                    <div class="c_text">
                        <p clas="c_text--inner">Our agricultural tyres score well on low compaction, high traction and high roadability.  So you’ll experience less downtime, more productivity and superior driving comfort.</p>
                    </div>
                    <div class="c_btn pt-2">
                        <a href="javascript:void(0)" class="c_btn--plain">Learn More
                            <svg width="3.753" height="6.7" viewBox="0 0 3.753 6.7">
                                <g transform="translate(38.597 29.637) rotate(180)">
                                    <g transform="translate(34.844 22.937)">
                                        <path d="M34.844,978.65l.244.255,2.971,3.1.538-.511-2.727-2.84,2.727-2.84-.538-.511-2.971,3.1Z" transform="translate(-34.844 -975.3)"/>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- single box post[end] -->
        <!-- 3 cloumn post[start] -->
        <div class="container">
            <div class="row py-md-5 py-4">
                <div class="col-md-4">
                    <a href="javascript:void(0)" class="pb-4 d-block">
                        <img src="<?php echo $imagesurl ?>press/1.png" class="img-fluid w-100" alt="image">
                    </a>
                    <div class="c_title py-2">
                        <h1 class="c_title--inner">Compaction</h1>
                    </div>
                    <div class="c_text pt-2">
                        <p clas="c_text--inner">We’re  tough on our tyres, so they can be gentle on your soil and protect your crop.</p>
                    </div>
                    <div class="c_btn">
                        <a href="javascript:void(0)" class="c_btn--plain">Learn More
                            <svg width="3.753" height="6.7" viewBox="0 0 3.753 6.7">
                                <g transform="translate(38.597 29.637) rotate(180)">
                                    <g transform="translate(34.844 22.937)">
                                        <path d="M34.844,978.65l.244.255,2.971,3.1.538-.511-2.727-2.84,2.727-2.84-.538-.511-2.971,3.1Z" transform="translate(-34.844 -975.3)"/>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <a href="javascript:void(0)" class="pb-4 d-block">
                        <img src="<?php echo $imagesurl ?>press/1.png" class="img-fluid w-100" alt="image">
                    </a>
                    <div class="c_title py-2">
                        <h1 class="c_title--inner">Compaction</h1>
                    </div>
                    <div class="c_text pt-2">
                        <p clas="c_text--inner">We’re  tough on our tyres, so they can be gentle on your soil and protect your crop.</p>
                    </div>
                    <div class="c_btn">
                        <a href="javascript:void(0)" class="c_btn--plain">Learn More
                            <svg width="3.753" height="6.7" viewBox="0 0 3.753 6.7">
                                <g transform="translate(38.597 29.637) rotate(180)">
                                    <g transform="translate(34.844 22.937)">
                                        <path d="M34.844,978.65l.244.255,2.971,3.1.538-.511-2.727-2.84,2.727-2.84-.538-.511-2.971,3.1Z" transform="translate(-34.844 -975.3)"/>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <a href="javascript:void(0)" class="pb-4 d-block">
                        <img src="<?php echo $imagesurl ?>press/1.png" class="img-fluid w-100" alt="image">
                    </a>
                    <div class="c_title py-2">
                        <h1 class="c_title--inner">Compaction</h1>
                    </div>
                    <div class="c_text pt-2">
                        <p clas="c_text--inner">We’re  tough on our tyres, so they can be gentle on your soil and protect your crop.</p>
                    </div>
                    <div class="c_btn">
                        <a href="javascript:void(0)" class="c_btn--plain">Learn More
                            <svg width="3.753" height="6.7" viewBox="0 0 3.753 6.7">
                                <g transform="translate(38.597 29.637) rotate(180)">
                                    <g transform="translate(34.844 22.937)">
                                        <path d="M34.844,978.65l.244.255,2.971,3.1.538-.511-2.727-2.84,2.727-2.84-.538-.511-2.971,3.1Z" transform="translate(-34.844 -975.3)"/>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 3 cloumn post[end] -->
        <div class="py-4"></div>
        <!-- events full sec[start] -->
        <div class="land_event">
            <div class="d-flex">
                <div class="col-md-6 p-0">
                    <div class="land_event_data">
                        <h6 class="land_event_data--title clr_white--text">EVENTS</h6>
                        <h2 class="land_event_data--copy clr_white--text py-3 m-0">CEAT Speciality Tyres participates at <br class="d-none d-md-block"/>events and confluences across the globe.</h2>
                        <div class="c_btn">
                            <a href="javascript:void(0)" class="c_btn--plain clr_white--text clr_white--fill">All Events
                                <svg width="3.753" height="6.7" viewBox="0 0 3.753 6.7">
                                    <g transform="translate(38.597 29.637) rotate(180)">
                                        <g transform="translate(34.844 22.937)">
                                            <path d="M34.844,978.65l.244.255,2.971,3.1.538-.511-2.727-2.84,2.727-2.84-.538-.511-2.971,3.1Z" transform="translate(-34.844 -975.3)"/>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div class="c_title land_event_data--fnote">
                            <h6 class="c_title--inner lined small clr_white--text">We’d love to meet you in person.</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <div class="swiper-container event_img_slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide event_img_slider--each">
                                <img src="<?php echo  $imagesurl ?>slide-img.jpg" class="img-fluid" alt="event">
                            </div>
                            <div class="swiper-slide event_img_slider--each">
                                <img src="<?php echo  $imagesurl ?>slide-img.jpg" class="img-fluid" alt="event">
                            </div>
                            <div class="swiper-slide event_img_slider--each">
                                <img src="<?php echo  $imagesurl ?>slide-img.jpg" class="img-fluid" alt="event">
                            </div>
                            <div class="swiper-slide event_img_slider--each">
                                <img src="<?php echo  $imagesurl ?>slide-img.jpg" class="img-fluid" alt="event">
                            </div>
                        </div>
                        <div class="slider_controls">
                            <div class="slider_controls_arrows event-slide-prev">
                                <svg width="12.297" height="10.078" viewBox="0 0 12.297 10.078">
                                    <g transform="translate(-0.591 11.664) rotate(-90)">
                                        <g transform="translate(1.586 0.591)">
                                            <path d="M7.109,12.888H6.141V2.443L2.27,6.314,1.586,5.63,6.625.591,11.664,5.63l-.684.684L7.109,2.443Z" transform="translate(-1.586 -0.591)" fill-rule="evenodd"/>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="slider_controls_dots slide-dots"></div>
                            <div class="slider_controls_arrows event-slide-next">
                                <svg width="12.298" height="10.078" viewBox="0 0 12.298 10.078">
                                    <g  transform="translate(12.888 -1.586) rotate(90)">
                                        <g transform="translate(1.586 0.591)">
                                            <path d="M7.109,12.888H6.141V2.443L2.27,6.314,1.586,5.63,6.625.591,11.664,5.63l-.684.684L7.109,2.443Z" transform="translate(-1.586 -0.591)" fill="#076ed5" fill-rule="evenodd"/>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>      
                    </div>
                </div>
            </div>
        </div>
        <!-- events full sec[end] -->
        <!-- partners[start] -->
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="col-12 ">
                    <div class="c_title pt-5 pb-3">
                        <h2 class="c_title--inner">Our Partners</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 partners_each">
                    <a href="javascript:void(0)" class="partners_each--btn d-flex">
                        <img src="<?php echo $imagesurl?>partners/1.svg" alt="partners">
                    </a>
                </div>
                <div class="col-md-2 partners_each">
                    <a href="javascript:void(0)" class="partners_each--btn d-flex">
                        <img src="<?php echo $imagesurl?>partners/1.svg" alt="partners">
                    </a>
                </div>
                <div class="col-md-2 partners_each">
                    <a href="javascript:void(0)" class="partners_each--btn d-flex">
                        <img src="<?php echo $imagesurl?>partners/1.svg" alt="partners">
                    </a>
                </div>
                <div class="col-md-2 partners_each">
                    <a href="javascript:void(0)" class="partners_each--btn d-flex">
                        <img src="<?php echo $imagesurl?>partners/1.svg" alt="partners">
                    </a>
                </div>
                <div class="col-md-2 partners_each">
                    <a href="javascript:void(0)" class="partners_each--btn d-flex">
                        <img src="<?php echo $imagesurl?>partners/1.svg" alt="partners">
                    </a>
                </div>
                <div class="col-md-2 partners_each">
                    <a href="javascript:void(0)" class="partners_each--btn d-flex">
                        <img src="<?php echo $imagesurl?>partners/1.svg" alt="partners">
                    </a>
                </div>
                <div class="col-md-2 partners_each">
                    <a href="javascript:void(0)" class="partners_each--btn d-flex">
                        <img src="<?php echo $imagesurl?>partners/1.svg" alt="partners">
                    </a>
                </div>
                <div class="col-md-2 partners_each">
                    <a href="javascript:void(0)" class="partners_each--btn d-flex">
                        <img src="<?php echo $imagesurl?>partners/1.svg" alt="partners">
                    </a>
                </div>
                <div class="col-md-2 partners_each">
                    <a href="javascript:void(0)" class="partners_each--btn d-flex">
                        <img src="<?php echo $imagesurl?>partners/1.svg" alt="partners">
                    </a>
                </div>
                <div class="col-md-2 partners_each">
                    <a href="javascript:void(0)" class="partners_each--btn d-flex">
                        <img src="<?php echo $imagesurl?>partners/1.svg" alt="partners">
                    </a>
                </div>
                <div class="col-md-2 partners_each">
                    <a href="javascript:void(0)" class="partners_each--btn d-flex">
                        <img src="<?php echo $imagesurl?>partners/1.svg" alt="partners">
                    </a>
                </div>
                <div class="col-md-2 partners_each">
                    <a href="javascript:void(0)" class="partners_each--btn d-flex">
                        <img src="<?php echo $imagesurl?>partners/1.svg" alt="partners">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 pt-3">
                    <div class="c_btn text-center">
                        <a href="#" class="c_btn--plain">See all Partners
                            <svg width="3.753" height="6.7" viewBox="0 0 3.753 6.7">
                                <g transform="translate(38.597 29.637) rotate(180)">
                                    <g transform="translate(34.844 22.937)">
                                        <path d="M34.844,978.65l.244.255,2.971,3.1.538-.511-2.727-2.84,2.727-2.84-.538-.511-2.971,3.1Z" transform="translate(-34.844 -975.3)"/>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- partners[end] -->
        <div class="py-5"></div>
        <div class="py-5"></div>
    </main>
    <!-- website footer[start] -->
    <?php include('./components/shared/footer.php') ?>
    <!-- website footer[end] -->
    <!-- scripts[start] -->
    <?php include('./includes/bottom-scripts.php') ?> 
    <!-- scripts[end] -->
    <!-- page dependancy scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    <!-- page scripts -->
    <script src="<?php echo $assetsurl ?>js/page-js/index.js"></script>
</body>
</html>