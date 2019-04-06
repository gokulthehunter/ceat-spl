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
                                <h1 class="c_title--inner text-center text-md-left">Distributor<br/>Registration</h1>
                            </div>
                            <div class="py-md-5 py-2 my-2"></div>
                            <div class="users_copy_down">
                                <p class="users_copy_down--text">Already Distributor?</p>
                                <a class="users_copy_down--btn" href="javascript:void(0)">Login Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <form class="users_form bg_white">
                            <p class="users_form--title">Please fill the following details to <br class="d-none d-md-block"/>Register as a Distributor</p>
                            <div class="c_field my-2">
                                <input type="text" class="c_field--input" placeholder="Full Name">
                                <p class="c_field--error">This field is Required</p>
                            </div>
                            <div class="c_field my-2">
                                <input type="email" class="c_field--input" placeholder="Email ID">
                                <p class="c_field--error">This field is Required</p>
                            </div>
                            <div class="c_field with_country optional">
                                <select class="country-code-changer" id="prod-area-c-code">
                                    <option selected value="+91" data-image="<?php echo $imagesurl ?>flags/in.svg">India <span>+91</span></option>
                                    <option value="+22" data-image="<?php echo $imagesurl ?>flags/it.svg">Italy +22</option>
                                    <option value="+23" data-image="<?php echo $imagesurl ?>flags/jp.svg">Japan +22</option>
                                    <option value="+243" data-image="<?php echo $imagesurl ?>flags/sa.svg">Saudi Arabia +24</option>
                                </select>
                                <input type="text" id="prod-area-mob" class="c_field--input numeric-only" placeholder="Mobile Number">
                                <p class="c_field--error">This field is required</p>
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
                            <div class="c_field my-2 labelfix">
                                <textarea type="text" class="c_field--textarea" placeholder="Tell us about your business"></textarea>
                                <p class="c_field--error">This field is Required</p>
                            </div>
                            <!-- <div class="c_field my-2 labelfix">
                                <input type="checkbox" class="c_field--checkbox">
                                <label for="html">HTML</label>
                                <p class="c_field--error">This field is Required</p>
                                <input  id="html">
                            </div> -->
                            <div class="c_field checktype optional">
                                <!-- <div class="form-group"> -->
                                    <input type="checkbox" id="subscribe" checked>
                                    <label for="subscribe"><span>Subscribe to us for details on upcoming events and other information from CEAT</span></label>
                                <!-- </div> -->
                            </div>
                            <div class="row justify-content-between align-items-center">
                                <div class="col-sm-5">
                                    <!-- <a href="javascript:void(0)" class="users_form--spl">Forgot Password?</a> -->
                                </div>
                                <div class="col-sm-7">
                                    <div class="c_btn">
                                        <a href="javascript:void(0)" class="c_btn--inner">Register</a>
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