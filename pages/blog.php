  <?php include("../includes/settings.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
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
        <!-- cremb and heading[start] -->
        <div class="page_head">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="page_head_cremb">
                            <a href="javascript:void(0)" class="page_head_cremb--link">Home</a>
                            <a class="page_head_cremb--link">Blogs</a>
                        </div>
                        <h1 class="page_head--title">blog</h1>
                    </div>
                    <div class="col-md-6">
                        <form class="blog_search" action="javascript:void(0)">
                            <div class="blog_search_holder">
                                <img src="<?php echo $imagesurl ?>search-icon.svg" class="img-fluid" alt="search icon">
                                <input type="text" placeholder="Search" class="blog_search_holder--input">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- cremb and heading[end] -->
        <!-- main post [start] -->
        <div class="main_post part-bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="main_post_img">
                            <img src="<?php echo $imagesurl?>blog/1.jpg" class="img-fluid w-100" alt="img">
                            <div class="main_post_img--text">Featured</div>
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
                                    <h2 class="c_title--inner big">Pressure for Profit on the Farm</h2>
                                </div>
                                <div class="c_text">
                                    <p class="c_text--inner">Today’s agricultural machines are marvels of versatility—they can travel safely on the road, carry enormous weight, and work in the field while causing minimal soil compaction. The techniques and methodologies used include the reduction or elimination of tillage in combination with planting cover crops on fallows in crop rotation cycles and maintaining the residue of these crops on the land (green mulch)</p>
                                </div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main post [end] -->
        <!-- blog filter[start] -->
        <div class="filter_blog py-lg-5 py-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9 pb-lg-0 pb-3">
                        <ul class="filter_blog_ul">
                            <li class="filter_blog_ul--li"><a>Categories</a></li>
                            <li class="filter_blog_ul--li"><a href="#">All</a></li>
                            <li class="filter_blog_ul--li"><a href="#">product</a></li>
                            <li class="filter_blog_ul--li"><a href="#">Tyre care & Maintenance</a></li>
                            <li class="filter_blog_ul--li"><a href="#">Exhibition</a></li>
                            <li class="filter_blog_ul--li"><a href="#">Industry News</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 text-md-right">
                        <div class="filter_blog--select">
                            <select>
                                <option value="" data-display="Sort By">Sort By</option>
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog filter[end] -->
        <!-- single blog post[start] -->
        <div class="container pb-5">
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