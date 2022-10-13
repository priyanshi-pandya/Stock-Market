<!DOCTYPE html>
<html lang="zxx">
<head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-TXSMXKVFY1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-TXSMXKVFY1');
        </script>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Perfect Hit</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
        <!-- aos css -->
        <link rel="stylesheet" type="text/css" href="assets/css/aos.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
        <!-- linea-font css -->
        <link rel="stylesheet" type="text/css" href="assets/fonts/linea-fonts.css">
        <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="assets/css/rsmenu-main.css">
        <!-- Rs animations css -->
        <link rel="stylesheet" href="assets/css/rs-animations.css">
        <!-- nivo slider CSS -->
        <link rel="stylesheet" type="text/css" href="assets/inc/custom-slider/css/nivo-slider.css">
        <link rel="stylesheet" type="text/css" href="assets/inc/custom-slider/css/preview.css">
        <!-- rsmenu transitions css -->
        <link rel="stylesheet" href="assets/css/rsmenu-transitions.css">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="style.css"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
        <!-- modal css -->
        <link rel="stylesheet" type="text/css" href="assets/css/modal.css">
    </head>
    <body class="home-three">

        <!-- Preloader area start here -->
        <!--<div id="loader" class="loader">-->
        <!--    <div class="spinner"></div>-->
        <!--</div>-->
        <!--End preloader here -->

        <!--Full width header Start-->
            <?php include "header.php"; ?>
        <!--Full width header End-->

		<!-- Main content Start -->
        <div class="main-content">
            <!-- Slider Start -->
            <div id="rs-slider" class="rs-slider slider3">
                <div class="bend niceties">
                    <div id="nivoSlider" class="slides">
                        <img src="assets/images/slider/h3-sl1.jpg" alt="" title="#slide-1" />
                        <img src="assets/images/slider/h3-sl2.jpg" alt="" title="#slide-2" />
                    </div>
                    <!-- Slide 1 -->
                    <div id="slide-1" class="slider-direction">
                        <div class="container">
                            <div class="content-part text-center">
                                <div class="slider-des">
                                    <div class="sl-subtitle">Discover your business</div>
                                    <h1 class="sl-title white-color">We Promote Your <br>Business</h1>
                                     
                                </div>
                                <div class="slider-bottom">
                                    <!-- If user is logged in hide login button  -->
                                    <?php if(isset($_SESSION['useremail'])){
                                        echo "<ul>";
                                        echo "<li><a href='contact.php' class='readon'>Contact Us</a></li>";
                                        echo "</ul>";
                                    }
                                    else{
                                        echo "<ul>";
                                        echo "<li><a href='account.php' class='readon'>Log In</a></li>";
                                        echo "<li><a href='account.php' class='readon'>Sign Up</a></li>";
                                        echo "</ul>";    
                                    }?>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div id="slide-2" class="slider-direction">
                        <div class="container">
                            <div class="content-part text-center">
                                <div class="slider-des">
                                    <div class="sl-subtitle">Need more strategy</div>
                                    <h1 class="sl-title white-color">We Help To Guide <br> Your Business</h1>
                                </div>
                                <div class="slider-bottom">
                                    <!-- If user is logged in hide login button  -->
                                    <!-- If user is logged in hide login button  -->
                                    <?php if(isset($_SESSION['useremail'])){
                                        $umail = $_SESSION['uemail'];
                                        echo "<ul>";
                                        echo "<li><a href='contact.php' class='readon'>Contact Us</a></li>";
                                        //echo $_SESSION['user_email_address'];  
                                        echo "</ul>";
                                    }
                                    else{
                                        echo "<ul>";
                                        echo "<li><a href='account.php' class='readon'>Log In</a></li>";
                                        echo "<li><a href='account.php' class='readon'>Sign Up</a></li>";
                                        echo "</ul>";    
                                    }?>
                                    
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider End -->

            <!-- Services Section Start -->
            <div class="rs-services style3 pt-100 pb-100 md-pt-72 md-pb-80">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-5 pr-70 md-mb-50">
                            <div class="sec-title">
                                <div class="sub-title right-line primary">Services</div>
                                <h2 class="title">What's Services We Are Offering to Our Customers</h2>
                                <p class="desc mb-36">Reobiz hinc sapientem eam, has novum putent anatai sit definiebas concludaturque, cum ad sanctus intro ocurreret. Wisi eruditi democritum est an, porro linked noluisse ut pri, ne tantas essent .</p>
                                <a class="readon" href="services.php">View All Services</a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-md-6 mb-30">
                                    <div class="service-wrap mb-30">
                                        <div class="icon-part">
                                            <img src="assets/images/services/icons/modify/1.png" alt="">
                                        </div>
                                        <h5 class="title"><a href="services.php">Business Analysis</a></h5>
                                        <div class="desc">We always provide people a complete solution focused of any business.</div>
                                    </div>
                                    <div class="service-wrap">
                                        <div class="icon-part">
                                            <img src="assets/images/services/icons/modify/7.png" alt="">
                                        </div>
                                        <h5 class="title"><a href="services.php">Cloud Computing</a></h5>
                                        <div class="desc">We always provide people a complete solution focused of any business.</div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-50 sm-mt-0">
                                    <div class="service-wrap mb-30">
                                        <div class="icon-part">
                                            <img src="assets/images/services/icons/modify/2.png" alt="">
                                        </div>
                                        <h5 class="title"><a href="services.php">Reports Analysis</a></h5>
                                        <div class="desc">We always provide people a complete solution focused of any business.</div>
                                    </div>
                                    <div class="service-wrap">
                                        <div class="icon-part">
                                            <img src="assets/images/services/icons/modify/8.png" alt="">
                                        </div>
                                        <h5 class="title"><a href="services.php">Cryptocurrency</a></h5>
                                        <div class="desc">We always provide people a complete solution focused of any business.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Section End -->

            <!-- About Section Start -->
            <div id="rs-about" class="rs-about style1 gray-bg pt-100 pb-100 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-6 md-mb-50">
                            <img src="assets/images/about/about3.png" alt="">
                        </div>
                        <div class="col-lg-6 pl-40 pr-60">
                            <div class="sec-title">
                                <div class="sub-title primary right-line">About Us</div>
                                <h2 class="title mb-33">Welcome to World Best Business Company</h2>
                                <p class="fw-700">Creation timelines for the standard lorem ipsum passage vary, with some citing the 15th century and others the 20th.</p>
                                <p class="desc mb-36">Id hinc sapientem eam, has novum putent an. Ei sit definiebas concludaturque, cum ad sanctus ocurreret. Wisi eruditi democritum est an, porro noluisse ut pri, ne tantas essent corpora vel. Ponderum recusabo vim te. Elitr verear praesent has ne.</p>
                                <a class="readon" href="services.php">Discover more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br><br><br>
            <!-- About Section End -->

            <!-- Why Choose Us Section Start -->
            <div class="rs-whychooseus style1 bg8 pt-100 pb-100 md-pt-72 md-pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 pr-50 md-mb-50 md-pr-15">
                            <div class="sec-title mb-40">
                                <div class="sub-title primary right-line">Choose Us</div>
                                <h2 class="title mb-0">Why Choose Us</h2>
                            </div>
                            <div class="row gutter-16">
                                <div class="col-md-6 mb-16 sm-mb-30">
                                    <div class="item-wrap">
                                        <div class="icon-part">
                                            <a href="#"><img src="assets/images/whychooseus/1.png" alt=""></a>
                                        </div>
                                        <h5 class="title"><a href="#">Solution Focused</a></h5>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-16 sm-mb-30">
                                    <div class="item-wrap">
                                        <div class="icon-part">
                                            <a href="#"><img src="assets/images/whychooseus/2.png" alt=""></a>
                                        </div>
                                        <h5 class="title"><a href="#">Customer Oriented</a></h5>
                                    </div>
                                </div>
                                <div class="col-md-6 sm-mb-30">
                                    <div class="item-wrap">
                                        <div class="icon-part">
                                            <a href="#"><img src="assets/images/whychooseus/3.png" alt=""></a>
                                        </div>
                                        <h5 class="title"><a href="#">99.99% Success</a></h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="item-wrap">
                                        <div class="icon-part">
                                            <a href="#"><img src="assets/images/whychooseus/4.png" alt=""></a>
                                        </div>
                                        <h5 class="title"><a href="#">Decision Maker</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="video-wrap md-pt-200 md-pb-200">
                                <div class="video-btn primary text-center">
                                    <a class="popup-videos" href="https://www.youtube.com/watch?v=YLN1Argi7ik">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br><br><br>
            <!-- Why Choose Us Section End -->
            <!-- Project Section Start -->
            <div class="rs-whychooseus style1 bg8 pt-100 pb-100 md-pt-72 md-pb-80">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="video-wrap md-pt-200 md-pb-200">
                                <div class="video-btn primary text-center">
                                    <a class="popup-videos" href="https://www.youtube.com/watch?v=YLN1Argi7ik">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pr-50 md-mb-50 md-pr-15">
                            <div class="sec-title mb-40">
                                <div class="sub-title primary right-line">Projects</div>
                                <h2 class="title mb-0">Top Picks</h2><br>
                                <div class="desc">Reobiz hinc sapientem eam, has novum putent anatai sit definiebas concludaturque, cum ad sanctus intro ocurreret. Wisi eruditi democritum est an, porro linked noluisse tantas essent .</div>
                            </div>
                            <div class="row gutter-16">
                                
                                <!--PHP FETCH TOP 4 PICKS-->
                                <?php
                                
                                include "connectiondb.inc.php";

                                $sql="SELECT * from freetips order by id desc limit 4;";
                                $result = mysqli_query($conn, $sql);  
                                
                                if(mysqli_num_rows($result)>0)
                                {
                                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                                    {
                                

                                echo "<div class='col-md-6 mb-16 sm-mb-30'>";
                                    echo "<div class='item-wrap'>";
                                        echo "<h5 class='title'><a>".$row['Stock_Name']."</a></h5>";
                                        echo "<text>".$row['BuySell']." at ₹ ".$row['Entry_Price']." </text>";
                                    echo "</div>";
                                echo "</div>";
                                
                                }}?>
                                <div class="btn-part mt-60 ml-40">
                                    <?php if(isset($_SESSION['useremail'])){
                                        echo "<a class='readon' href='Freetipswall/freetips.php'>View All Picks</a>";
                                    }
                                    else {
                                        echo "<a class='readon' href='account.php'>View All Picks</a>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br>
            <!-- Project Section End -->           
            
            <!-- Background wrap Start -->
            <div class="bg9">
                <!-- Testimonial Section Start -->
                <div class="rs-testimonial style1 gray-bg pt-92 md-pt-72">
                    <div class="container">
                        <div class="sec-title text-center mb-54 md-mb-39">
                            <div class="sub-title primary">Customers Reviews</div>
                            <h2 class="title mb-0">Testimonials</h2>
                        </div>
                        <div class="white-bg">
                            <div class="row">
                                <div class="col-lg-6 pr-0 md-pl-pr-15"><div class="bg-part md-pt-200 md-pb-200"></div></div>
                                <div class="col-lg-6 slider-part">
                                    <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="1" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-lg-device="1" data-md-device-nav="false" data-md-device-dots="true">
                                        <div class="testi-item">
                                            <div class="content-part text-center">
                                                <div class="icon-part">
                                                    <i class="fa fa-quote-left"></i>
                                                </div>
                                                <div class="desc">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                                            </div>
                                            <div class="posted-by text-center">
                                                <div class="avatar">
                                                    <img src="assets/images/testimonial/avatar/1.jpg" alt="">
                                                </div>
                                                <h5 class="name">Lisa Fedro</h5>
                                                <span class="designation">CEO, Keen IT Solution</span>
                                            </div>
                                        </div>
                                        <div class="testi-item">
                                            <div class="content-part text-center">
                                                <div class="icon-part">
                                                    <i class="fa fa-quote-left"></i>
                                                </div>
                                                <div class="desc">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                                                
                                            </div>
                                            <div class="posted-by text-center">
                                                <div class="avatar">
                                                    <img src="assets/images/testimonial/avatar/2.jpg" alt="">
                                                </div>
                                                <h5 class="name">Mike Hotten</h5>
                                                <span class="designation">CEO, Brick Consulting</span>
                                            </div>
                                        </div>
                                        <div class="testi-item">
                                            <div class="content-part text-center">
                                                <div class="icon-part">
                                                    <i class="fa fa-quote-left"></i>
                                                </div>
                                                <div class="desc">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                                            </div>
                                            <div class="posted-by text-center">
                                                <div class="avatar">
                                                    <img src="assets/images/testimonial/avatar/3.jpg" alt="">
                                                </div>
                                                <h5 class="name">Israt Jahan</h5>
                                                <span class="designation">CEO, Brick Consulting</span>
                                            </div>
                                        </div>
                                        <div class="testi-item">
                                            <div class="content-part text-center">
                                                <div class="icon-part">
                                                    <i class="fa fa-quote-left"></i>
                                                </div>
                                                <div class="desc">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                                            </div>
                                            <div class="posted-by text-center">
                                                <div class="avatar">
                                                    <img src="assets/images/testimonial/avatar/4.jpg" alt="">
                                                </div>
                                                <h5 class="name">Jorina Bibi</h5>
                                                <span class="designation">CEO, Brick Consulting</span>
                                            </div>
                                        </div>
                                        <div class="testi-item">
                                            <div class="content-part text-center">
                                                <div class="icon-part">
                                                    <i class="fa fa-quote-left"></i>
                                                </div>
                                                <div class="desc">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                                            </div>
                                            <div class="posted-by text-center">
                                                <div class="avatar">
                                                    <img src="assets/images/testimonial/avatar/5.jpg" alt="">
                                                </div>
                                                <h5 class="name">Rafian Sagar</h5>
                                                <span class="designation">CEO, Brick Consulting</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Section End -->

                <!-- Partner Section Start -->

                <!-- Partner Section End -->
            </div>
            <!-- Background wrap End -->

            <!-- Blog Section Start -->
            <div id="rs-blog" class="rs-blog style1 modify2 pt-98 pb-72 md-pt-72 md-pb-52">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-4 pr-45 mt--33 md-mt-0 md-mb-50">
                            <div class="sec-title">
                                <span class="sub-title primary right-line">News</span>
                                <h2 class="title mb-13">Latest Updates & News Over World</h2>
                                <p class="desc mb-36">Reobiz hinc sapientem eam, has novum putent anatai sit definiebas concludaturque, cum ad sanctus intro ocurreret. Wisi eruditi democritum est an, porro linked noluisse tantas essent .</p>
                                <a class="readon" href="#">Latest News</a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="2" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="2" data-lg-device="2" data-md-device-nav="false" data-md-device-dots="false">
                                <div class="blog-wrap">
                                    <div class="img-part">
                                        <img src="assets/images/blog/1.jpg" alt="">
                                        <div class="fly-btn">
                                            <a href="blog-single.html"><i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                    <div class="content-part">
                                        <a class="categories" href="blog-single.html">Strategy</a>
                                        <h3 class="title"><a href="blog-single.html">Covid-19 threatens the next generation of smartphones</a></h3>
                                        <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by...</p>
                                        <div class="blog-meta">
                                            <div class="user-data">
                                                <img src="assets/images/blog/avatar/1.png" alt="">
                                                <span>admin</span>
                                            </div>
                                            <div class="date">
                                                <i class="fa fa-clock-o"></i> 06 Sep 2019
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-wrap">
                                    <div class="img-part">
                                        <img src="assets/images/blog/2.jpg" alt="">
                                        <div class="fly-btn">
                                            <a href="blog-single.html"><i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                    <div class="content-part">
                                        <a class="categories" href="blog-single.html">Management</a>
                                        <h3 class="title"><a href="blog-single.html">Soundtrack filma Lady Exclusive Music</a></h3>
                                        <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by...</p>
                                        <div class="blog-meta">
                                            <div class="user-data">
                                                <img src="assets/images/blog/avatar/1.png" alt="">
                                                <span>admin</span>
                                            </div>
                                            <div class="date">
                                                <i class="fa fa-clock-o"></i> 06 Sep 2019  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-wrap">
                                    <div class="img-part">
                                        <img src="assets/images/blog/3.jpg" alt="">
                                        <div class="fly-btn">
                                            <a href="blog-single.html"><i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                    <div class="content-part">
                                        <a class="categories" href="blog-single.html">Consulting</a>
                                        <h3 class="title"><a href="blog-single.html">Winged moved stars, fruit creature seed night.</a></h3>
                                        <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by...</p>
                                        <div class="blog-meta">
                                            <div class="user-data">
                                                <img src="assets/images/blog/avatar/1.png" alt="">
                                                <span>admin</span>
                                            </div>
                                            <div class="date">
                                                <i class="fa fa-clock-o"></i> 06 Sep 2019
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-wrap">
                                    <div class="img-part">
                                        <img src="assets/images/blog/4.jpg" alt="">
                                        <div class="fly-btn">
                                            <a href="blog-single.html"><i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                    <div class="content-part">
                                        <a class="categories" href="blog-single.html">Development</a>
                                        <h3 class="title"><a href="blog-single.html">Given void great you’re good appear have i also fifth</a></h3>
                                        <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by...</p>
                                        <div class="blog-meta">
                                            <div class="user-data">
                                                <img src="assets/images/blog/avatar/1.png" alt="">
                                                <span>admin</span>
                                            </div>
                                            <div class="date">
                                                <i class="fa fa-clock-o"></i> 06 Sep 2019
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-wrap">
                                    <div class="img-part">
                                        <img src="assets/images/blog/5.jpg" alt="">
                                        <div class="fly-btn">
                                            <a href="blog-single.html"><i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                    <div class="content-part">
                                        <a class="categories" href="blog-single.html">Creative</a>
                                        <h3 class="title"><a href="blog-single.html">Lights winged seasons fish abundantly evening.</a></h3>
                                        <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by...</p>
                                        <div class="blog-meta">
                                            <div class="user-data">
                                                <img src="assets/images/blog/avatar/1.png" alt="">
                                                <span>admin</span>
                                            </div>
                                            <div class="date">
                                                <i class="fa fa-clock-o"></i> 06 Sep 2019
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-wrap">
                                    <div class="img-part">
                                        <img src="assets/images/blog/6.jpg" alt="">
                                        <div class="fly-btn">
                                            <a href="blog-single.html"><i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                    <div class="content-part">
                                        <a class="categories" href="blog-single.html">Finance</a>
                                        <h3 class="title"><a href="blog-single.html">Team You Want to Work With mistakes runners</a></h3>
                                        <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by...</p>
                                        <div class="blog-meta">
                                            <div class="user-data">
                                                <img src="assets/images/blog/avatar/1.png" alt="">
                                                <span>admin</span>
                                            </div>
                                            <div class="date">
                                                <i class="fa fa-clock-o"></i> 06 Sep 2019
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-wrap">
                                    <div class="img-part">
                                        <img src="assets/images/blog/3.jpg" alt="">
                                        <div class="fly-btn">
                                            <a href="blog-single.html"><i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                    <div class="content-part">
                                        <a class="categories" href="blog-single.html">Consulting</a>
                                        <h3 class="title"><a href="blog-single.html">Winged moved stars, fruit creature seed night.</a></h3>
                                        <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by...</p>
                                        <div class="blog-meta">
                                            <div class="user-data">
                                                <img src="assets/images/blog/avatar/1.png" alt="">
                                                <span>admin</span>
                                            </div>
                                            <div class="date">
                                                <i class="fa fa-clock-o"></i> 06 Sep 2019
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Section End -->

            <!-- Contact Section Start -->
            <div class="rs-contact style1 gray-bg pt-100 pb-100 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="white-bg">
                        <div class="row">
                            <div class="col-lg-8 form-part">
                                <div class="sec-title mb-35">
                                    <div class="sub-title primary">CONTACT US</div>
                                    <h2 class="title mb-0">Get In Touch</h2>
                                </div>
                                <div id="form-messages"></div>
                                <form id="contact-form" class="contact-form" method="post" action="https://rstheme.com/products/html/reobiz/mailer.php">
                                    <div class="row">
                                        <div class="col-md-6 mb-30">
                                            <div class="common-control">
                                                <input type="text" name="name" placeholder="Name" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-30">
                                            <div class="common-control">
                                                <input type="email" name="email" placeholder="Email" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-30">
                                            <div class="common-control">
                                                <input type="text" name="phone" placeholder="Phone Number" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-30">
                                            <div class="common-control">
                                                <input type="text" name="website" placeholder="Your Website" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-30">
                                            <div class="common-control">
                                                <textarea name="message" placeholder="Your Message Here" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="submit-btn">
                                                <button type="submit" class="readon">Submit Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4 pl-0 md-pl-pr-15">
                                <div class="contact-info">
                                    <h3 class="title">Contact Info</h3>
                                    <div class="info-wrap mb-20">
                                        <div class="icon-part">
                                            <i class="flaticon-location"></i>
                                        </div>
                                        <div class="content-part">
                                            <h4>Office Address</h4>
                                            127 Double Street, Dublin, United Kingdom.
                                        </div>
                                    </div>
                                    <div class="info-wrap mb-20">
                                        <div class="icon-part">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="content-part">
                                            <h4>Telephone</h4>
                                            <p>P: <a href="tel:+1235558888">(+123) 555 8888</a></p>
                                            <p>P: <a href="tel:+1235558899">(+123) 555 8899</a></p>
                                        </div>
                                    </div>
                                    <div class="info-wrap mb-20">
                                        <div class="icon-part">
                                            <i class="flaticon-email"></i>
                                        </div>
                                        <div class="content-part">
                                            <h4>Mail Us</h4>
                                            <p>E: <a href="mailto:support@rstheme.com">support@rstheme.com</a></p>
                                            <p>E: <a href="mailto:info@codesless.com">info@codesless.com</a></p>
                                        </div>
                                    </div>
                                    <div class="info-wrap">
                                        <div class="icon-part">
                                            <i class="flaticon-clock"></i>
                                        </div>
                                        <div class="content-part">
                                            <h4>Opening Hours</h4>
                                            <p>Mon-Fri: 10:00-18:00</p>
                                            <p>Sat-Sun: 10:00-14:00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Section End -->
        </div> 
        <!-- Main content End -->

        <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer">
            <div class="container">
                <div class="footer-newsletter">
                    <div class="row y-middle">
                        <div class="col-md-6 sm-mb-26">
                            <h3 class="title white-color mb-0">Newsletter Subscribe</h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <form class="newsletter-form">
                                <input type="email" name="email" placeholder="Your email address" required="">
                                <button type="submit"><i class="fa fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="footer-content pt-62 pb-79 md-pb-64 sm-pt-48">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 footer-widget md-mb-39">
                            <div class="about-widget pr-15">
                                <div class="logo-part">
                                    <a href="index.html"><img src="assets/images/logo.png" alt="Footer Logo"></a>
                                </div>
                                <p class="desc">We denounce with righteous indignation in and dislike men who are so beguiled and to demo realized by the charms of pleasure moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound.</p>
                                <div class="btn-part">
                                    <a class="readon" href="about.html">Discover More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 md-mb-32 footer-widget">
                            <h4 class="widget-title">Contact Info</h4>
                            <ul class="address-widget pr-40">
                                <li>
                                    <i class="flaticon-location"></i>
                                    <div class="desc">374 William S Canning Blvd, Fall River MA 2721, USA</div>
                                </li>
                                <li>
                                    <i class="flaticon-call"></i>
                                    <div class="desc">
                                        <a href="tel:+8801739753105">(+880)173-9753105</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-email"></i>
                                    <div class="desc">
                                        <a href="mailto:support@rstheme.com">support@rstheme.com</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-clock"></i>
                                    <div class="desc">
                                        10:00 - 17:00
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 footer-widget">
                            <h4 class="widget-title">Latest News</h4>
                            <div class="footer-post">
                                <div class="post-wrap mb-15">
                                    <div class="post-img">
                                        <a href="blog-single.html"><img src="assets/images/blog/small/1.jpg" alt=""></a>
                                    </div>
                                    <div class="post-desc">
                                        <a href="blog-single.html">Covid-19 threatens the next generation of smartphones</a>
                                        <div class="date-post">
                                            <i class="fa fa-calendar"></i>
                                            September 6, 2019
                                        </div>
                                    </div>
                                </div>
                                <div class="post-wrap mb-15">
                                    <div class="post-img">
                                        <a href="blog-single.html"><img src="assets/images/blog/small/2.jpg" alt=""></a>
                                    </div>
                                    <div class="post-desc">
                                        <a href="blog-single.html">Soundtrack filma Lady Exclusive Music</a>
                                        <div class="date-post">
                                            <i class="fa fa-calendar"></i>
                                            April 15, 2019
                                        </div>
                                    </div>
                                </div>
                                <div class="post-wrap">
                                    <div class="post-img">
                                        <a href="blog-single.html"><img src="assets/images/blog/small/3.jpg" alt=""></a>
                                    </div>
                                    <div class="post-desc">
                                        <a href="blog-single.html">Winged moved stars, fruit creature seed night.</a>
                                        <div class="date-post">
                                            <i class="fa fa-calendar"></i>
                                            October 9, 2019
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row y-middle">
                        <div class="col-lg-6 col-md-8 sm-mb-21">
                            <div class="copyright">
                                <p>© Copyright 2021 Reobiz. All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 text-right sm-text-center">
                            <ul class="footer-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text" required="">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

        <!-- modernizr js -->
        <script src="assets/js/modernizr-2.8.3.min.js"></script>
        <!-- jquery latest version -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Menu js -->
        <script src="assets/js/rsmenu-main.js"></script> 
        <!-- op nav js -->
        <script src="assets/js/jquery.nav.js"></script>
        <!-- owl.carousel js -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Slick js -->
        <script src="assets/js/slick.min.js"></script>
        <!-- isotope.pkgd.min js -->
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <!-- wow js -->
        <script src="assets/js/wow.min.js"></script>
        <!-- aos js -->
        <script src="assets/js/aos.js"></script>
        <!-- Skill bar js -->
        <script src="assets/js/skill.bars.jquery.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>        
         <!-- counter top js -->
        <script src="assets/js/waypoints.min.js"></script>
        <!-- video js -->
        <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
        <!-- magnific popup js -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Nivo slider js -->
        <script src="assets/inc/custom-slider/js/jquery.nivo.slider.js"></script>
        <!-- plugins js -->
        <script src="assets/js/plugins.js"></script>
        <!-- contact form js -->
        <script src="assets/js/contact.form.js"></script>
        <!-- main js -->
        <script src="assets/js/main.js"></script>
        <!-- main js -->
        <script src="assets/js/modal.js"></script>
    </body>

<!-- Mirrored from rstheme.com/products/html/reobiz/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 May 2021 15:30:25 GMT -->
</html>