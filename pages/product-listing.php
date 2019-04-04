<?php include("../includes/settings.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Listing</title>
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
        <?php include('../components/page-header-and-cremb.php') ?>
        <!-- product listing wrapper[start] -->
        <section>
            <div class="product_listing">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <?php include('../components/product-filter.php') ?>
                        </div>
                        <div class="col-lg-8">
                            <?php include('../components/product-list.php') ?>
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
    <!-- page script -->
    <script src="<?php echo $assetsurl ?>js/page-js/products.js"></script>
</body>
</html>