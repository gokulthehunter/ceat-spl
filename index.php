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
            <img src="<?php echo $imagesurl ?>main-banner.jpg" class="img-fluid" alt="banner">
            <img src="<?php echo $imagesurl ?>main-banner.jpg" class="img-fluid" alt="banner">
            <img src="<?php echo $imagesurl ?>main-banner.jpg" class="img-fluid" alt="banner">
            <img src="<?php echo $imagesurl ?>main-banner.jpg" class="img-fluid" alt="banner">
        </section>
        <!-- main slider[end] -->
    </main>
    <!-- website footer[start] -->
    <?php include('./components/shared/footer.php') ?>
    <!-- website footer[end] -->
    <!-- scripts[start] -->
    <?php include('./includes/bottom-scripts.php') ?> 
    <!-- scripts[end] -->
    <!-- page dependency scripts -->
</body>
</html>