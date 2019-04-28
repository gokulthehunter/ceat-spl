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
        <!-- product details wrapper[start] -->
        <section>
            <div class="product_details">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product_details_imgs">
                                <div class="swiper-container product-slider text-center">
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
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product_details_desc">
                                <h1 class="product_details_desc--title">Farmax 85</h1>
                                <p class="product_details_desc--copy">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris augue nunc, scelerisque a hendrerit sed, faucibus rhoncus erat. Nunc aliquet, augue ut viverra tempus, massa nisi laoreet lacus, molestie faucibus felis nulla in mi. Aenean euismod sapien aliquam lacus accumsan, quis feugiat libero facilisis. Praesent quis posuere justo. Cras non urna euismod, fringilla orci a, aliquet turpis.</p>
                                <form action="javascript:void(0)" class="product_details_desc_form">
                                    <div class="change-input product_details_desc_form--radios d-flex justify-content-between py-2">
                                        <p>
                                            <input data-type="mobile" value="1" type="radio" id="test1" name="prod-area-radio" checked>
                                            <label for="test1">Cal me back</label>
                                        </p>
                                        <p>
                                            <input data-type="email" value="2" type="radio" id="test2" name="prod-area-radio">
                                            <label for="test2">Get a quote</label>
                                        </p>
                                        <p>
                                            <input data-type="text" value="3" type="radio" id="test3" name="prod-area-radio">
                                            <label for="test3">download data sheet</label>
                                        </p>
                                    </div>
                                    <div> <!-- dont remove this empty div wrapper -->
                                        <div class="type-inputs">
                                            <div class="type-mobile c_field with_country">
                                                <select class="country-code-changer" id="prod-area-c-code">
                                                    <option selected value="+91" data-image="<?php echo $imagesurl ?>flags/in.svg">India <span>+91</span></option>
                                                    <option value="+22" data-image="<?php echo $imagesurl ?>flags/it.svg">Italy +22</option>
                                                    <option value="+23" data-image="<?php echo $imagesurl ?>flags/jp.svg">Japan +22</option>
                                                    <option value="+243" data-image="<?php echo $imagesurl ?>flags/sa.svg">Saudi Arabia +24</option>
                                                </select>
                                                <input type="text" id="prod-area-mob" class="c_field--input numeric-only" placeholder="Enter your Mobile Number">
                                                <p class="c_field--error">This field is required</p>
                                            </div>
                                            <div class="type-email c_field">
                                                <input type="email" id="prod-area-email" class="c_field--input" placeholder="Enter your Email ID">
                                                <p class="c_field--error">This field is required</p>
                                            </div>
                                            <div class="type-text c_field">
                                                <input type="text" id="prod-area-text" class="c_field--input" placeholder="Enter your text">
                                                <p class="c_field--error">This field is required</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="product_details_desc_form--spl">
                                            <img src="<?php echo $imagesurl ?>warranty.svg" class="img-fluid" alt="Warranty">
                                            <span>7 Year Warranty</span>
                                        </div>
                                        <div class="c_btn text-right">
                                            <a href="javascript:void(0)" id="prod-area-submit" class="c_btn--inner">Submit</a>
                                        </div>
                                    </div>
                                </form>
                                <div class="pt-md-5 pt-3 pb-4 pb-md-0 text-center text-md-left">
                                    <a href="javascript:void(0)" class="product_details_desc--scrollnote">Scroll down for more details
                                        <svg width="9.466" height="5.301" viewBox="0 0 9.466 5.301">
                                            <g transform="translate(-22.938 40.145) rotate(-90)">
                                                <g transform="translate(34.844 22.937)">
                                                    <path d="M34.844,980.032l.344.361,4.2,4.372.76-.721-3.853-4.011,3.853-4.011-.76-.721-4.2,4.372Z" transform="translate(-34.844 -975.3)"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product details wrapper[end] -->
        <!-- product features[start] -->
        <section class="prod_secs bg_light">
            <div class="container bg_white">
                <div class="row">
                    <div class="col-12 pt-4">
                        <div class="c_title">
                            <h2 class="c_title--inner text-center">Features & Benefits</h2>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-md-4 text-md-right prod_secs-lefted">
                        <div class="prod_secs_copy">
                            <h4 class="prod_secs_copy--title">Tilted Lug Up</h4>
                            <p class="prod_secs_copy--text">Lesser vibration and noise</p>
                        </div>
                        <div class="prod_secs_copy">
                            <h4 class="prod_secs_copy--title">Mud Breaker</h4>
                            <p class="prod_secs_copy--text">Better Self Cleaning</p>
                        </div>
                        <div class="prod_secs_copy">
                            <h4 class="prod_secs_copy--title">Higher Angle <br class="d-none d-md-block"/>& Lug Overlap at Centre</h4>
                            <p class="prod_secs_copy--text">better Roadability</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-none d-md-block">
                        <div class="prod_secs--img">
                            <img src="<?php echo $imagesurl ?>products/featured/prod-1.png" class="img-fluid" alt="Product">
                            <!-- <div class="line to-n"></div> -->
                            <div class="line to-e"></div>
                            <div class="line to-w"></div>
                            <!-- <div class="line to-s"></div> -->

                            <div class="line to-ne"></div>
                            <div class="line to-nw"></div>

                            <div class="line to-se"></div>
                            <div class="line to-sw"></div>
                        </div>
                    </div>
                    <div class="col-md-4 text-md-left prod_secs-righted">
                        <div class="prod_secs_copy">
                            <h4 class="prod_secs_copy--title">Rounder Sholuder</h4>
                            <p class="prod_secs_copy--text">Lessor damage to Sooil and Crop</p>
                        </div>
                        <div class="prod_secs_copy">
                            <h4 class="prod_secs_copy--title">Lower Angle at Sholuder</h4>
                            <p class="prod_secs_copy--text">Superiror Traction</p>
                        </div>
                        <div class="prod_secs_copy">
                            <h4 class="prod_secs_copy--title">R1 W Tread Depth</h4>
                            <p class="prod_secs_copy--text">Longer Tyre Life</p>
                        </div>
                    </div>
                </div>
                <div class="py-2 d-block d-sm-none"></div>
            </div>
        </section>
        <!-- product features[end] -->
        <!-- tyre table[start] -->
        <section class="tyre_table py-5">
            <div class="py-2"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tyre_table_select">
                            <div class="tyre_table_select--each">
                                <select>
                                    <option data-display="Tyre sizes"></option>
                                    <option>480/65 R28</option>
                                    <option>600/65 R34</option>
                                    <option>600/65 R42</option>
                                    <option>480/65 R28</option>
                                    <option>600/65 R34</option>
                                    <option>600/65 R42</option>
                                    <option>480/65 R28</option>
                                    <option>600/65 R34</option>
                                    <option>600/65 R42</option>
                                    <option>480/65 R28</option>
                                    <option>600/65 R34</option>
                                    <option>600/65 R42</option>
                                </select>
                            </div>
                            <div class="tyre_table_select--each">
                                <select>
                                    <option data-display="LI/SS"></option>
                                    <option>480/65 R28</option>
                                    <option>600/65 R34</option>
                                    <option>600/65 R42</option>
                                    <option>480/65 R28</option>
                                    <option>600/65 R34</option>
                                    <option>600/65 R42</option>
                                    <option>480/65 R28</option>
                                    <option>600/65 R34</option>
                                    <option>600/65 R42</option>
                                    <option>480/65 R28</option>
                                    <option>600/65 R34</option>
                                    <option>600/65 R42</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-streach">
                    <div class="col-lg-11 mt-4 pr-lg-0">
                        <div class="wrap-scrolls">
                            <div class="" id="table-holder">
                                <div class="table-loading">
                                    <div class="c_btn_loader_loading">
                                        <div class="c_btn_loader_loading--item"></div>
                                        <div class="c_btn_loader_loading--item"></div>
                                        <div class="c_btn_loader_loading--item"></div>
                                    </div>
                                    <h4 class=" c_title--inner small">please Wait a second...</h4>
                                </div>
                                <!-- appended tables -->
                                <!-- <table class="table-bordered w-100 text-center">
                                    <tr>
                                        <th rowspan="2">Machinery</th>
                                        <th rowspan="2">Tech</th>
                                        <th rowspan="2">Pattern<br/>Name</th>
                                        <th rowspan="2">Size</th>
                                        <th rowspan="2">LI/SS</th>
                                        <th rowspan="2">Rim</th>
                                        <th colspan="2"><div class="small-text">Unloaded Dimension</div></th>
                                        <th rowspan="2">SLR<p>mm/in</p></th>
                                        <th rowspan="2">RC<p>mm/in</p></th>
                                        <th rowspan="2" class="by-split">NSD<p>mm</p><div class="small-text">32nds</div></th>
                                    </tr>
                                    <tr>
                                        <th>SW<p>mm/in</p></th>
                                        <th>OD<p>mm/in</p></th>
                                    </tr>
                                    <tr>
                                        <td>1.0</td>
                                        <td>10.00</td>
                                        <td>40.00</td>
                                        <td>52.00</td>
                                        <td>40</td>
                                        <td>62</td>
                                        <td>1.0</td>
                                        <td>10.00</td>
                                        <td>40.00</td>
                                        <td>52.00</td>
                                        <td>40</td>
                                    </tr>
                                </table> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 pl-lg-0 mt-4">
                        <a href="javascript:void(0)" class="tyre_table--expand d-flex justify-content-center h-100">
                            <!-- <img src="<?php echo $imagesurl ?>expand.svg" class="img-fluid" alt="Expand"> -->
                            <svg width="22" height="22" viewBox="0 0 22 22" class="h-auto">
                                <g transform="translate(-5 -5)">
                                    <g transform="translate(5 5)">
                                    <path d="M26.161,5H10.681a.842.842,0,0,0-.839.839V9.845h-4A.838.838,0,0,0,5,10.684V26.161A.838.838,0,0,0,5.839,27H21.316a.838.838,0,0,0,.839-.839v-4h4.005A.842.842,0,0,0,27,21.319V5.839A.842.842,0,0,0,26.161,5ZM20.477,25.322H6.678v-13.8H9.842v9.8a.842.842,0,0,0,.839.839h9.8Zm4.845-4.842H11.52V6.678h13.8Z" transform="translate(-5 -5)"/>
                                    <path d="M49.805,21.608V26.8a.839.839,0,1,1-1.678,0V23.633l-6.409,6.409a.839.839,0,1,1-1.186-1.186l6.408-6.408H43.774a.839.839,0,1,1,0-1.678h5.192a.808.808,0,0,1,.168.017.656.656,0,0,1,.081.022.832.832,0,0,1,.551.551.7.7,0,0,1,.022.081A.8.8,0,0,1,49.805,21.608Z" transform="translate(-31.659 -16.914)"/>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- quote spl form -->
                <div class="py-2"></div>
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <?php include('../components/cutomer-request-form.php') ?>
                    </div>
                </div>
                <!-- quote spl form -->
            </div>
            <div class="py-2"></div>
        </section>
        <!-- tyre table[end] -->
        <div class="container">
            <div class="c_splitline"></div>
        </div>
        <div class="py-2"></div>
        <!-- related products[start] -->
        <?php include('../components/related-products.php') ?>
        <!-- related products[end] -->
    </main>
    <!-- website footer[start] -->
    <?php include('../components/shared/footer.php') ?>
    <!-- website footer[end] -->
    <!-- scripts[start] -->
    <?php include('../includes/bottom-scripts.php') ?> 
    <!-- scripts[end] -->
    <!-- page dependancy script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    <script src="<?php echo $assetsurl?>js/dragScroll.min.js"></script>
    <!-- page script -->
    <script src="<?php echo $assetsurl ?>js/page-js/products.js"></script>
</body>
</html>