<?php include("../includes/settings.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>Dealer|Farmer Login</title>
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
        <div class="py-md-5"></div>
        <div class="container">
            <div class="py-3"></div>
            <div class="users">
                <div class="row">
                    <div class="col-md-6">
                        <div class="users_copy">
                            <div class="c_title">
                                <h1 class="c_title--inner text-center text-md-left">Distibutor Login</h1>
                            </div>
                            <div class="py-md-5 py-2 my-2"></div>
                            <div class="users_copy_down">
                                <p class="users_copy_down--text">Not a registered Distibutor?</p>
                                <a class="users_copy_down--btn" href="javascript:void(0)">Sign-up Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form class="users_form bg_white">
                            <p class="users_form--title">Enter your Email Id & Password<br class="d-none d-md-block"/>
                            if you are already a registered Distributor</p>
                            <div class="c_field my-2">
                                <input type="text" class="c_field--input" placeholder="Email">
                                <p class="c_field--error">This field is Required</p>
                            </div>
                            <div class="c_field my-2">
                                <input type="password" class="c_field--input" placeholder="Password">
                                <p class="c_field--error">This field is Required</p>
                            </div>
                            <div class="row justify-content-between align-items-center">
                                <div class="col-sm-5 order-sm-1 order-2 text-center text-sm-left pt-4 pt-sm-0">
                                    <a href="javascript:void(0)" class="users_form--spl">Forgot Password?</a>
                                </div>
                                <div class="col-sm-7 order-sm-2 order-1">
                                    <div class="c_btn">
                                        <a href="javascript:void(0)" class="c_btn--inner">Login</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5"></div>
    </main>
    <!-- website footer[start] -->
    <?php include('../components/shared/footer.php') ?>
    <!-- website footer[end] -->
    <!-- scripts[start] -->
    <?php include('../includes/bottom-scripts.php') ?> 
    <!-- scripts[end] -->
    <!-- page script -->
</body>
</html>