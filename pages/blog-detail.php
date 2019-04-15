  <?php include("../includes/settings.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>Blog Detail</title>
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
        <!-- cremb [start] -->
        <div class="page_head white-bg pt-4 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page_head_cremb">
                            <a href="javascript:void(0)" class="page_head_cremb--link">Home</a>
                            <a href="javascript:void(0)" class="page_head_cremb--link">Blogs</a>
                            <a class="page_head_cremb--link">Pressure for Profit on the Farm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cremb [end] -->
        <!-- main post [start] -->
        <div class="main_post">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="main_post_img">
                            <img src="<?php echo $imagesurl?>blog/1.jpg" class="img-fluid w-100" alt="img">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mx_800 py-4">
                            <div class="main_post_info">
                                <ul>
                                    <li class="main_post_info--date">January 23, 2019</li>
                                    <li>Agriculture</li>
                                </ul>
                            </div>
                            <div class="main_post_data pt-2">
                                <div class="c_title pb-2">
                                    <h1 class="c_title--inner big">Pressure for Profit on the Farm</h1 >
                                </div>
                                <p class="c_text--inner">Today’s agricultural machines are marvels of versatility—they can travel safely on the road, carry enormous weight, and work in the field while causing minimal soil compaction. The techniques and methodologies used include the reduction or elimination of tillage in combination with planting cover crops on fallows in crop rotation cycles and maintaining the residue of these crops on the land (green mulch)</p>
                                <p class="c_text--inner">After all, tyres are what connect the equipment to the ground, and a tyre’s pressure regulates just how much of that expensive horsepower turns into actual pulling power. Here are just some of the ways how operating at proper tyre pressure—in the field and on the road—will benefit your business.</p>
                                <p class="c_text--inner">In general, one of the easiest ways to maximize your equipment’s performance in the field is to lower its tyre pressure. Tyres operating at lower inflation pressures are softer and more flexible, putting more of the tyre’s tread on the ground to deliver more traction.</p>
                                <h4 class="c_title--inner small lined pb-3">Lowering a tyre’s pressure creates a softer tyre that flexes more, resulting in better self-cleaning of the tread, which also leads to better traction.</h4>
                                <p class="c_text--inner">After all, tyres are what connect the equipment to the ground, and a tyre’s pressure regulates just how much of that expensive horsepower turns into actual pulling power. Here are just some of the ways how operating at proper tyre pressure—in the field and on the road—will benefit your business.</p>
                                <p class="c_text--inner">In general, one of the easiest ways to maximize your equipment’s performance in the field is to lower its tyre pressure. Tyres operating at lower inflation pressures are softer and more flexible, putting more of the tyre’s tread on the ground to deliver more traction.</p>
                                <div class="py-4"></div>
                                <div class="c_splitline"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 pb-5">
                        <div class="mx_800 pb-4">
                            <form class="leave_form pt-3">
                                <h4 class="c_title--inner">Leave Reply</h4>
                                <p class="c_text--inner clr_light">Your email address will not be published.</p>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="c_field">
                                            <textarea placeholder="Comment"></textarea>
                                            <div class="c_field--error">This field Required</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="c_field">
                                            <input type="text" placeholder="Name">
                                            <div class="c_field--error">This field Required</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="c_field">
                                            <input type="email" placeholder="Email">
                                            <div class="c_field--error">This field Required</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="c_btn">
                                            <a class="c_btn--inner" href="javascript:void(0)">Submit</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main post [end] -->
        <!-- single blog post[start] -->
        <div class="bg_light">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 pb-4">
                        <div class="c_title">
                            <h3 class="c_title--inner">Related Posts</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="blog_post_each pb-5">
                            <a href="javascript:void(0)" class="d-block">
                                <img src="<?php echo $imagesurl ?>blog/post/1.jpg" class="img-fluid w-100" alt="img">
                            </a>
                            <div class="blog_post_each--info py-3">
                                <ul>
                                    <li>January 20, 2019</li>
                                    <li>Agriculture</li>
                                </ul>
                            </div>
                            <h3 class="c_title--inner small">Lorem ipsum is simply a dummy text</h3>
                            <p class="c_text--inner pt-3">No matter how huge, powerful and bombard-safe your tractor may seem, it’s the tires really that take the beating on the field. But, it’s only when you…</p>
                            <div class="c_btn">
                                <a href="#" class="c_btn--plain">Read More
                                    <svg width="3.753" height="6.7" viewBox="0 0 3.753 6.7">
                                        <g transform="translate(38.597 29.637) rotate(180)">
                                            <g transform="translate(34.844 22.937)">
                                                <path d="M34.844,978.65l.244.255,2.971,3.1.538-.511-2.727-2.84,2.727-2.84-.538-.511-2.971,3.1Z" transform="translate(-34.844 -975.3)"/>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                            <div class="blog_post_each--counts">
                                <ul>
                                    <li>Likes: <span>50</span></li>
                                    <li>Comments: <span>4</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog_post_each pb-5">
                            <a href="javascript:void(0)" class="d-block">
                                <img src="<?php echo $imagesurl ?>blog/post/1.jpg" class="img-fluid w-100" alt="img">
                            </a>
                            <div class="blog_post_each--info py-3">
                                <ul>
                                    <li>January 20, 2019</li>
                                    <li>Agriculture</li>
                                </ul>
                            </div>
                            <h3 class="c_title--inner small">Lorem ipsum is simply a dummy text</h3>
                            <p class="c_text--inner pt-3">No matter how huge, powerful and bombard-safe your tractor may seem, it’s the tires really that take the beating on the field. But, it’s only when you…</p>
                            <div class="c_btn">
                                <a href="#" class="c_btn--plain">Read More
                                    <svg width="3.753" height="6.7" viewBox="0 0 3.753 6.7">
                                        <g transform="translate(38.597 29.637) rotate(180)">
                                            <g transform="translate(34.844 22.937)">
                                                <path d="M34.844,978.65l.244.255,2.971,3.1.538-.511-2.727-2.84,2.727-2.84-.538-.511-2.971,3.1Z" transform="translate(-34.844 -975.3)"/>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                            <div class="blog_post_each--counts">
                                <ul>
                                    <li>Likes: <span>50</span></li>
                                    <li>Comments: <span>4</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog_post_each pb-5">
                            <a href="javascript:void(0)" class="d-block">
                                <img src="<?php echo $imagesurl ?>blog/post/1.jpg" class="img-fluid w-100" alt="img">
                            </a>
                            <div class="blog_post_each--info py-3">
                                <ul>
                                    <li>January 20, 2019</li>
                                    <li>Agriculture</li>
                                </ul>
                            </div>
                            <h3 class="c_title--inner small">Lorem ipsum is simply a dummy text</h3>
                            <p class="c_text--inner pt-3">No matter how huge, powerful and bombard-safe your tractor may seem, it’s the tires really that take the beating on the field. But, it’s only when you…</p>
                            <div class="c_btn">
                                <a href="#" class="c_btn--plain">Read More
                                    <svg width="3.753" height="6.7" viewBox="0 0 3.753 6.7">
                                        <g transform="translate(38.597 29.637) rotate(180)">
                                            <g transform="translate(34.844 22.937)">
                                                <path d="M34.844,978.65l.244.255,2.971,3.1.538-.511-2.727-2.84,2.727-2.84-.538-.511-2.971,3.1Z" transform="translate(-34.844 -975.3)"/>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                            <div class="blog_post_each--counts">
                                <ul>
                                    <li>Likes: <span>50</span></li>
                                    <li>Comments: <span>4</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single blog post[end] -->
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