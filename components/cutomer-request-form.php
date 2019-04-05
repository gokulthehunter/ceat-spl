<div class="cutomer-req-form bg_light py-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="javascript:void(0)" class="product_details_desc_form">
                <div class="product_details_desc_form--radios d-flex py-2">
                    <p class="pr-md-3 pr-1">
                        <input type="radio" id="req-test1" name="radio-group" checked>
                        <label for="req-test1">Cal me back</label>
                    </p>
                    <p class="pr-md-3 pr-1">
                        <input type="radio" id="req-test2" name="radio-group">
                        <label for="req-test2">Get a quote</label>
                    </p>
                    <p>
                        <input type="radio" id="req-test3" name="radio-group">
                        <label for="req-test3">Download data sheet</label>
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="c_field with_country">
                            <select class="country-code-changer">
                                <option selected value="+91" data-image="<?php echo $imagesurl ?>flags/in.svg">India <span>+91</span></option>
                                <option value="+22" data-image="<?php echo $imagesurl ?>flags/it.svg">Italy +22</option>
                                <option value="+23" data-image="<?php echo $imagesurl ?>flags/jp.svg">Japan +22</option>
                                <option value="+243" data-image="<?php echo $imagesurl ?>flags/sa.svg">Saudi Arabia +24</option>
                            </select>
                            <input type="text" class="c_field--input" placeholder="Enter your Mobile Number">
                            <p class="c_field--error">Please enter valid Mobile Number</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="c_btn text-right">
                            <a href="javascript:void(0)" class="c_btn--inner w-100">Submit</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>