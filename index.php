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
        <div class="py-5"></div>    
        <!-- main slider[end] -->
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