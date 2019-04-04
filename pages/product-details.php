<?php include("../includes/settings.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
    <?php include('../includes/header-imports.php') ?>
</head>
<body>
    <!-- common loader[start] -->
    <?php include('../components/shared/loader.php') ?>
    <!-- common loader[end] -->
    <!-- website header[start] -->
    <?php include('../components/shared/header.php') ?> 
    <!-- website header[end] -->
    <main>
        <?php include('../components/cremb-only-white.php') ?>
        <!-- product listing wrapper[start] -->
        <section>
            <div class="product_details">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product_details_imgs">
                                <div class="swiper-container product-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo $imagesurl ?>products/prod-1.png" class="img-fluid" alt="Product Image">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo $imagesurl ?>products/prod-2.png" class="img-fluid" alt="Product Image">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo $imagesurl ?>products/prod-1.png" class="img-fluid" alt="Product Image">
                                        </div>
                                    </div>
                                    <div class="slider_controls">
                                        <!-- Add Pagination -->
                                        <div class="slider_controls_dots slide-dots"></div>
                                        <!-- Add Arrows -->
                                        <div class="slider_controls_arrows slide-next"></div>
                                        <div class="slider_controls_arrows slide-prev"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product_details_desc"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product listing wrapper[end] -->
    </main>
    <!-- website footer[start] -->
    <?php include('../components/shared/footer.php') ?>
    <!-- website footer[end] -->
    <!-- scripts[start] -->
    <?php include('../includes/bottom-scripts.php') ?> 
    <!-- scripts[end] -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    <!-- page script -->
    <script src="<?php echo $assetsurl ?>js/page-js/products.js"></script>
</body>
</html>