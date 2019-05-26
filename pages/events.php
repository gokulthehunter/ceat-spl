<?php include("../includes/settings.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>Events</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
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
                    <div class="col-md-12">
                        <div class="page_head_cremb">
                            <a href="javascript:void(0)" class="page_head_cremb--link">Home</a>
                            <a class="page_head_cremb--link">Events</a>
                        </div>
                        <h1 class="page_head--title">Events</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- cremb and heading[end] -->
        <!-- media-tabes[start] -->
        <div class="content_tabs">
            <div class="content_tabs_btns">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <ul class="content_tabs_btns_ul">
                                <li class="content_tabs_btns_ul--li state-active">Upcoming Events</li>
                                <li class="content_tabs_btns_ul--li">Past Events</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_tabs_data py-3">
                <div class="container">
                    <!-- 1 -->
                    <div class="content_tabs_data--each" style="display:block">
                        <div class="row">
                            <div class="col-12">
                                <div class="events_data">
                                    <div class="c_title">
                                        <h2 class="c_title--inner pb-4">SIMA 2019</h2>
                                    </div>
                                    <a href="javascript:void(0)" class="events_data--img d-block">
                                        <img src="<?php echo $imagesurl ?>events/1.jpg" class="img-fluid w-100" alt="Event Poster">
                                    </a>
                                    <div class="events_data_host py-4">
                                        <h4 class="events_data_host--date">24-28 February, 2019</h4>
                                        <p>Hall Number,Stall Number</p>
                                        <p>Paris Nord Villepinte - France</p>
                                    </div>
                                    <div class="events_data_more d-md-flex justify-content-between">
                                        <div class="col-md-6 p-0">
                                            <p>Solutions for all farmers on all continents! SIMA 2019 will be held from 24 to 28 February 2019 at Paris Nord Villepinte, France.</p>
                                        </div>
                                        <div class="col-md-6 p-0">
                                            <div class="c_btn text-right">
                                                <a href="javascript:void(0)" class="c_btn--inner">Know More</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="events_data">
                                    <div class="c_title">
                                        <h2 class="c_title--inner pb-4">SIMA 2019</h2>
                                    </div>
                                    <a href="javascript:void(0)" class="events_data--img d-block">
                                        <img src="<?php echo $imagesurl ?>events/1.jpg" class="img-fluid w-100" alt="Event Poster">
                                    </a>
                                    <div class="events_data_host py-4">
                                        <h4 class="events_data_host--date">24-28 February, 2019</h4>
                                        <p>Hall Number,Stall Number</p>
                                        <p>Paris Nord Villepinte - France</p>
                                    </div>
                                    <div class="events_data_more d-md-flex justify-content-between">
                                        <div class="col-md-6 p-0">
                                            <p>Solutions for all farmers on all continents! SIMA 2019 will be held from 24 to 28 February 2019 at Paris Nord Villepinte, France.</p>
                                        </div>
                                        <div class="col-md-6 p-0">
                                            <div class="c_btn text-right">
                                                <a href="javascript:void(0)" class="c_btn--inner">Know More</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="events_data">
                                    <div class="c_title">
                                        <h2 class="c_title--inner pb-4">SIMA 2019</h2>
                                    </div>
                                    <a href="javascript:void(0)" class="events_data--img d-block">
                                        <img src="<?php echo $imagesurl ?>events/1.jpg" class="img-fluid w-100" alt="Event Poster">
                                    </a>
                                    <div class="events_data_host py-4">
                                        <h4 class="events_data_host--date">24-28 February, 2019</h4>
                                        <p>Hall Number,Stall Number</p>
                                        <p>Paris Nord Villepinte - France</p>
                                    </div>
                                    <div class="events_data_more d-md-flex justify-content-between">
                                        <div class="col-md-6 p-0">
                                            <p>Solutions for all farmers on all continents! SIMA 2019 will be held from 24 to 28 February 2019 at Paris Nord Villepinte, France.</p>
                                        </div>
                                        <div class="col-md-6 p-0">
                                            <div class="c_btn text-right">
                                                <a href="javascript:void(0)" class="c_btn--inner">Know More</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="content_tabs_data--each">
                        <div class="events_data_past">
                            <div class="row">
                                <div class="col-12 pt-5">
                                    <div class="c_title">
                                        <h2 class="c_title--inner lined">2017</h2>
                                        <h5 class="c_title--inner small pt-3">year subtitle</h5>
                                        <p class="c_text--inner">small Discription lorem ipsum dolor amet lucasa imdum and erasdivora itablis navinatos.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <a data-fancybox="event" href="<?php echo $imagesurl?>events/past/1.jpg" class="events_data_past_each">
                                        <div class="events_data_past_each--img">
                                            <img src="<?php echo $imagesurl?>events/past/1.jpg" class="img-fluid" alt="event poster">
                                        </div>
                                        <h5 class="events_data_past_each--title">Event Title Comes here</h4>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a data-fancybox="event" href="<?php echo $imagesurl?>events/past/2.jpg"  class="events_data_past_each">
                                        <div class="events_data_past_each--img">
                                            <img src="<?php echo $imagesurl?>events/past/2.jpg" class="img-fluid" alt="event poster">
                                        </div>
                                        <h5 class="events_data_past_each--title">Event Title Comes here</h4>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a data-fancybox="event" href="<?php echo $imagesurl?>events/past/3.jpg"  class="events_data_past_each">
                                        <div class="events_data_past_each--img">
                                            <img src="<?php echo $imagesurl?>events/past/3.jpg" class="img-fluid" alt="event poster">
                                        </div>
                                        <h5 class="events_data_past_each--title">Event Title Comes here</h4>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a data-fancybox="event" href="<?php echo $imagesurl?>events/past/4.jpg"  class="events_data_past_each">
                                        <div class="events_data_past_each--img">
                                            <img src="<?php echo $imagesurl?>events/past/4.jpg" class="img-fluid" alt="event poster">
                                        </div>
                                        <h5 class="events_data_past_each--title">Event Title Comes here</h4>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a data-fancybox="event" href="<?php echo $imagesurl?>events/past/5.jpg"  class="events_data_past_each">
                                        <div class="events_data_past_each--img">
                                            <img src="<?php echo $imagesurl?>events/past/5.jpg" class="img-fluid" alt="event poster">
                                        </div>
                                        <h5 class="events_data_past_each--title">Event Title Comes here</h4>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a data-fancybox="event" href="<?php echo $imagesurl?>events/past/6.jpg"  class="events_data_past_each">
                                        <div class="events_data_past_each--img">
                                            <img src="<?php echo $imagesurl?>events/past/6.jpg" class="img-fluid" alt="event poster">
                                        </div>
                                        <h5 class="events_data_past_each--title">Event Title Comes here</h4>
                                    </a>
                                </div>
                            </div>
                            <!-- common loadmore [start]-->
                            <div class="row py-4">
                                <div class="col-12 text-center">
                                    <div class="c_btn_loader"> <!-- add class `in-loading` here to loading state -->
                                        <a href="javascript:void(0)" class="c_btn_loader--inner"><i></i><span>Load More</span></a>
                                        <div class="c_btn_loader_loading">
                                            <div class="c_btn_loader_loading--item"></div>
                                            <div class="c_btn_loader_loading--item"></div>
                                            <div class="c_btn_loader_loading--item"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- common loadmore [end]-->
                            <div class="row">
                                <div class="col-12 pt-5">
                                    <div class="c_title">
                                        <h2 class="c_title--inner lined">2017</h2>
                                        <h5 class="c_title--inner small pt-3">year subtitle</h5>
                                        <p class="c_text--inner">small Discription lorem ipsum dolor amet lucasa imdum and erasdivora itablis navinatos.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <a data-fancybox="event" href="<?php echo $imagesurl?>events/past/1.jpg" class="events_data_past_each">
                                        <div class="events_data_past_each--img">
                                            <img src="<?php echo $imagesurl?>events/past/1.jpg" class="img-fluid" alt="event poster">
                                        </div>
                                        <h5 class="events_data_past_each--title">Event Title Comes here</h4>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a data-fancybox="event" href="<?php echo $imagesurl?>events/past/2.jpg"  class="events_data_past_each">
                                        <div class="events_data_past_each--img">
                                            <img src="<?php echo $imagesurl?>events/past/2.jpg" class="img-fluid" alt="event poster">
                                        </div>
                                        <h5 class="events_data_past_each--title">Event Title Comes here</h4>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a data-fancybox="event" href="<?php echo $imagesurl?>events/past/3.jpg"  class="events_data_past_each">
                                        <div class="events_data_past_each--img">
                                            <img src="<?php echo $imagesurl?>events/past/3.jpg" class="img-fluid" alt="event poster">
                                        </div>
                                        <h5 class="events_data_past_each--title">Event Title Comes here</h4>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a data-fancybox="event" href="<?php echo $imagesurl?>events/past/4.jpg"  class="events_data_past_each">
                                        <div class="events_data_past_each--img">
                                            <img src="<?php echo $imagesurl?>events/past/4.jpg" class="img-fluid" alt="event poster">
                                        </div>
                                        <h5 class="events_data_past_each--title">Event Title Comes here</h4>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a data-fancybox="event" href="<?php echo $imagesurl?>events/past/5.jpg"  class="events_data_past_each">
                                        <div class="events_data_past_each--img">
                                            <img src="<?php echo $imagesurl?>events/past/5.jpg" class="img-fluid" alt="event poster">
                                        </div>
                                        <h5 class="events_data_past_each--title">Event Title Comes here</h4>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a data-fancybox="event" href="<?php echo $imagesurl?>events/past/6.jpg"  class="events_data_past_each">
                                        <div class="events_data_past_each--img">
                                            <img src="<?php echo $imagesurl?>events/past/6.jpg" class="img-fluid" alt="event poster">
                                        </div>
                                        <h5 class="events_data_past_each--title">Event Title Comes here</h4>
                                    </a>
                                </div>
                            </div>
                            <!-- common loadmore [start]-->
                            <div class="row py-4">
                                <div class="col-12 text-center">
                                    <div class="c_btn_loader"> <!-- add class `in-loading` here to loading state -->
                                        <a href="javascript:void(0)" class="c_btn_loader--inner"><i></i><span>Load More</span></a>
                                        <div class="c_btn_loader_loading">
                                            <div class="c_btn_loader_loading--item"></div>
                                            <div class="c_btn_loader_loading--item"></div>
                                            <div class="c_btn_loader_loading--item"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- common loadmore [end]-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- media-tabes[end] -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 my-md-5 pb-5">
                    <?php include('../components/stay-connected.php') ?>
                </div>
            </div>
        </div>
    </main>
    <!-- website footer[start] -->
    <?php include('../components/shared/footer.php') ?>
    <!-- website footer[end] -->
    <!-- scripts[start] -->
    <?php include('../includes/bottom-scripts.php') ?> 
    <!-- scripts[end] -->
    <!-- page script -->
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
    <script>
        // loading mock
        $(".c_btn_loader--inner").on("click",function(){
            $(this).parent().addClass("in-loading");
            setTimeout(() => {
                $(this).parent().removeClass("in-loading");
                
            }, 2400);
        })
    </script>
</body>
</html>