<?php include("../includes/settings.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>Distributor Registration</title>
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
                    <div class="col-lg-6 col-md-4">
                        <div class="users_copy">
                            <div class="c_title">
                                <h1 class="c_title--inner text-center text-md-left">Let us tell you more.</h1>
                                <p>Email us your queries to start<br class="d-none d-sm-block"/>the conversation.</p>
                            </div>
                            <div class="py-md-4 py-2"></div>
                            <div class="users_copy_down">
                                <p class="users_copy_down--text">Email Us</p>
                                <a class="users_copy_down--btn" href="mailto:queries@ceatspeciality.com" target="_blank">queries@ceatspeciality.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <form class="users_form bg_white">
                            <!-- <p class="users_form--title">Please fill the following details to <br class="d-none d-md-block"/>Register as a Distributor</p> -->
                            <div class="c_field my-2">
                                <input type="text" class="c_field--input" placeholder="Full Name">
                                <p class="c_field--error">This field is Required</p>
                            </div>
                            <div class="c_field my-2">
                                <input type="email" class="c_field--input" placeholder="Email ID">
                                <p class="c_field--error">This field is Required</p>
                            </div>
                            <div class="c_field type-select my-2">
                                <select class="c_field--select">
                                    <option data-display="Country">Country</option>
                                    <option value="India">India</option>
                                    <option value="Italy">Italy</option>
                                    <option value="japan">Japan</option>
                                    <option value="Saudi">Saudi Arabia</option>
                                </select>
                                <p class="c_field--error">This field is Required</p>
                            </div>
                            <div class="c_field my-2">
                                <input type="text" class="c_field--input numeric-only" placeholder="Zip/Pin Code">
                                <p class="c_field--error">This field is Required</p>
                            </div>
                            
                            <div class="c_field my-2 labelfix">
                                <textarea class="c_field--textarea" placeholder="How can we help?"></textarea>
                                <p class="c_field--error">This field is Required</p>
                            </div>
                            
                            <div class="row justify-content-between align-items-center">
                                <div class="col-sm-5">
                                    <!-- <a href="javascript:void(0)" class="users_form--spl">Forgot Password?</a> -->
                                </div>
                                <div class="col-sm-7">
                                    <div class="c_btn">
                                        <a href="javascript:void(0)" class="c_btn--inner">Submit</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="users--note text-center">
                            <p>By clicking the  Register button you agree to our <a href="javascript:void(0)">Terms & Conditions</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-md-5 py-4"></div>
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