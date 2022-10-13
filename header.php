<?php
    include "startsession.php";
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
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
    
    <style>
        .cart_div {
	
	top:10px;
    left:10px;
	position:relative;
	}
        
    </style>
    <body class="home-three">

        <!-- Preloader area start here -->
        <!-- <div id="loader" class="loader">
            <div class="spinner"></div>
        </div> -->
        <!--End preloader here -->

        <!--Full width header Start-->
        <div class="full-width-header">
            <!-- Toolbar Start -->
            <div class="toolbar-area hidden-md">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="toolbar-contact">
                                <ul>
                                    <li><i class="flaticon-email"></i><a href="mailto:perfecthit@writesoft.co.in">perfecthit@writesoft.co.in</a></li>
                                    <li><i class="flaticon-call"></i><a href="tel:+123456789">(+123) 456789</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="toolbar-sl-share">
                                <ul>
                                    <li class="opening"> <i class="flaticon-clock"></i> Mon - Fri: 9:00 am - 06.00pm / Closed on Weekends</li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Toolbar End -->
            
            <!--Header Start-->
            <header id="rs-header" class="rs-header">
                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="logo-area">
                                    <a href="index.php"><img src="assets/images/phlogo.jpg" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-9 text-right">
                                <div class="rs-menu-area">
                                    <div class="main-menu">
                                        <div class="mobile-menu">
                                            <a class="rs-menu-toggle">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                        </div>
                                        <nav class="rs-menu pr-65">
                                            <ul class="nav-menu">
                                                <li class="rs-mega-menu mega-rs menu-item-has-children"> <a href="pricing.php">Pricing</a>
                                                    <!-- <ul class="mega-menu"> 
                                                        <li class="mega-menu-container">
                                                            <div class="mega-menu-innner">
                                                                <div class="single-megamenu">
                                                                    <ul class="sub-menu">
                                                                        <li class="menu-title">Home Multipage</li>
                                                                        <li><a href="index.html">Business Main</a> </li>
                                                                        <li><a href="index2.html">Business 3</a> </li>
                                                                        <li class="active"><a href="index3.html">Consulting 2</a> </li>
                                                                        <li><a href="index4.html">Consulting 1</a> </li>
                                                                        <li><a href="index5.html">Business 2</a> </li>
                                                                        <li><a href="index6.html">Insurance</a> </li>
                                                                        <li><a href="index7.html">Saas</a> </li>
                                                                        <li><a href="index8.html">Human Resource</a> </li>
                                                                        <li><a href="index9.html">Digital Agency</a> </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="single-megamenu">
                                                                    <ul class="sub-menu">
                                                                        <li class="menu-title">Home Multipage</li>
                                                                        <li><a href="index10.html">Law Firm</a></li>
                                                                        <li><a href="index11.html">Consulting 3</a></li>
                                                                        <li><a href="index12.html">Digital Agency(SEO)</a></li>
                                                                        <li><a href="index13.html">Digital Agency</a></li>
                                                                        <li><a href="index14.html">Corporate Business</a></li>
                                                                        <li><a href="index15.html">App Landing</a></li>
                                                                        <li><a href="index16.html">It Solutions</a></li>
                                                                        <li><a href="index17.html">Marketing Agency</a></li>
                                                                        <li class="last-item"><a href="index18.html">Corporate Business 2</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="single-megamenu">
                                                                 <ul class="sub-menu last-sub-menu">
                                                                     <li class="menu-title">Home Onepage</li>
                                                                     <li><a href="onepage1.html">Onepage 1</a> </li>
                                                                     <li><a href="onepage2.html">Onepage 2</a> </li>
                                                                     <li><a href="onepage3.html">Onepage 3</a> </li>
                                                                     <li><a href="onepage4.html">Onepage 4</a> </li>
                                                                     <li><a href="onepage5.html">Onepage 5</a> </li>
                                                                     <li><a href="onepage6.html">Onepage 6</a> </li>                        
                                                                     <li><a href="onepage8.html">Onepage 8</a> </li>
                                                                     <li><a href="onepage9.html">Onepage 9</a> </li>
                                                                     <li><a href="onepage10.html">Onepage 10</a> </li>
                                                                 </ul>
                                                             </div>
                                                             <div class="single-megamenu">
                                                                 <ul class="sub-menu last-sub-menu">
                                                                     <li class="menu-title">Home Onepage</li>
                                                                     <li><a href="onepage11.html">Onepage 11</a> </li>
                                                                     <li><a href="onepage12.html">Onepage 12</a> </li>
                                                                     <li><a href="onepage13.html">Onepage 13</a> </li>
                                                                     <li><a href="onepage14.html">Onepage 14</a> </li>
                                                                     <li><a href="onepage15.html">Onepage 15</a> </li>
                                                                     <li><a href="onepage16.html">Onepage 16</a> </li>
                                                                     <li><a href="onepage17.html">Onepage 17</a> </li>
                                                                     <li><a href="#">Coming Soon</a> </li>
                                                                     <li class="last-item"><a href="#">Coming Soon</a> </li>
                                                                 </ul>
                                                             </div>
                                                            </div>
                                                        </li>
                                                    </ul> //.mega-menu -->
                                                </li>

                                                    
                                                    <?php if(isset($_SESSION['useremail'])){
                                                 echo "<li class='menu-item-has-children'>";
                                                    echo "<a href='freetipswall.php'>Free Tips Wall</a>";}
                                                    else {
                                                        echo "<li class='menu-item-has-children'>";
                                                    echo "<a href='account.php'>Free Tips Wall</a>";}  
                                                    ?>
                                                    <!-- <ul class="sub-menu">
                                                        <li><a href="about.html">About Us</a></li>
                                                        <li class="menu-item-has-children">
                                                            <a href="#">Services</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="services.html">Services 1</a> </li>
                                                                <li class="last-item"><a href="services2.html">Services 2</a> </li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="services-single.html">Services Single</a></li>
                                                        <li class="menu-item-has-children">
                                                            <a href="#">Our Peoples</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="team.html">Team Grid Style1</a> </li>
                                                                <li class="last-item"><a href="team2.html">Team Grid Style2</a> </li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="price-tables.html">Price Tables</a></li>
                                                        <li class="last-item"><a href="faq.html">Faq</a></li>
                                                    </ul> -->
                                                </li>
                                               
                                                <li class="menu-item-has-children">
                                                    <a href="services.php">Services</a>
                                                    <!-- <ul class="sub-menu">
                                                        <li><a href="portfolio.html">Portfolio One</a></li>
                                                        <li><a href="portfolio2.html">Portfolio Two</a></li>
                                                        <li><a href="portfolio3.html">Portfolio Three</a></li>
                                                        <li><a href="portfolio4.html">Portfolio Four</a></li>
                                                        <li><a href="portfolio5.html">Portfolio Five</a></li>
                                                        <li><a href="portfolio6.html">Portfolio Six</a></li>
                                                        <li class="last-item menu-item-has-children">
                                                            <a href="#">Portfolio Single</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="portfolio-standard.html">Standard Style</a> </li>
                                                                <li><a href="portfolio-slider.html">Slider Style</a> </li>
                                                                <li class="last-item"><a href="portfolio-gallery.html">Gallery Style</a> </li>
                                                            </ul>
                                                        </li>
                                                    </ul> -->
                                                </li>
                             
                                                <li class="menu-item-has-children">
                                                    <a href="blog.php">Blog</a>
                                                    <!-- <ul class="sub-menu">
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li class="last-item"><a href="blog-single.html">Blog Single</a></li>
                                                    </ul> -->
                                                </li>

                                                <li class="menu-item-has-children">
                                                    <a href="about.php">About Us</a>
                                                    <!-- <ul class="sub-menu">
                                                        <li><a href="shop.html">Shop</a></li>
                                                        <li><a href="shop-single.html">Shop Single</a></li>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li class="last-item"><a href="account.html">My Account</a></li>
                                                    </ul> -->
                                                </li>

                                                <li class="menu-item-has-children">
                                                    <a href="contact.php">Contact Us</a>
                                                    <!-- <ul class="sub-menu">
                                                        <li><a href="contact.html">Contact 1</a></li>
                                                        <li class="last-item"><a href="contact2.html">Contact 2</a></li>
                                                    </ul> -->
                                                </li>
                                                                
                                                 <?php if(isset($_SESSION['useremail'])){
                                                    echo "<li class='menu-item-has-children'>";
                                                    echo "<a href='#'>Account</a>";
                                                    
                                                    echo "<ul class='sub-menu'>";
                                                        echo "<li><a href='profile.php'>My Profile</a></li>";
                                                        echo "<li><a href='cart.php'>Orders</a></li>";
                                                        echo "<li><a href='my_plan.php'>My Plans</a></li>";
                                                        echo "<li><a href='#'>Notifications</a></li>";
                                                        echo "<li class='last-item'><a href='logout.php'>LOGOUT</a></li>";
                                                    echo "</ul>";
                                                echo "</li>";
                                                }?>
                                                
                                           
                                                   <?php if(isset($_SESSION['useremail'])){
                                                    echo "<li class='menu-item-has-children'>";
                                                   echo"<a href='cart.php'><i class='fa fa-shopping-cart'style='font-size:28px;color:blue' ></i></a>";
                                                 
                                                echo "</li>";
                                                }?>
                                                   
                                                                                          
                                            
                                           
                                        </ul> <!-- //.nav-menu -->
                                        </nav>
                                        
                                    </div> <!-- //.main-menu -->
                                    <div class="expand-btn-inner">
                                        <ul>
                                            <!-- <li class="search-parent">
                                                <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#">
                                                    <i class="flaticon-account"></i>
                                                </a>
                                            </li> -->
                                            
                                            
                                        <?php if(isset($_SESSION['useremail'])){
                                           echo '<li>
                                                <a id="nav-expander" class="humburger nav-expander" href="#">
                                                    <span class="dot1"></span>
                                                    <span class="dot2"></span>
                                                    <span class="dot3"></span>
                                                    <span class="dot4"></span>
                                                    <span class="dot5"></span>
                                                    <span class="dot6"></span>
                                                    <span class="dot7"></span>
                                                    <span class="dot8"></span>
                                                    <span class="dot9"></span>
                                                </a>
                                            </li>';
                                        } ?>    
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->

                <!-- Canvas Menu start -->
                <nav class="right_menu_togle hidden-md">
                    <div class="close-btn">
                        <span id="nav-close" class="humburger">
                            <span class="dot1"></span>
                            <span class="dot2"></span>
                            <span class="dot3"></span>
                            <span class="dot4"></span>
                            <span class="dot5"></span>
                            <span class="dot6"></span>
                            <span class="dot7"></span>
                            <span class="dot8"></span>
                            <span class="dot9"></span>
                        </span>
                    </div>
                    <div class="canvas-logo">
                        <a href="index.html"><img src="assets/images/logo-dark.png" alt="logo"></a>
                    </div>
                    <div class="offcanvas-text">
                        <p>Consectetur adipiscing elit. Duis at dictum risus, non suscip it arcu. Quisque aliquam posuere tortor aliquam posuere tortor develop database.</p>
                    </div>
                    <div class="canvas-contact">
                        <ul class="contact">
                            <li><i class="flaticon-location"></i> 374 William S Canning Blvd, Fall River MA 2721, USA</li>
                            <li><i class="flaticon-call"></i><a href="tel:+880155-69569">(+880)155-69569</a></li>
                            <li><i class="flaticon-email"></i><a href="mailto:support@rstheme.com">support@rstheme.com</a></li>
                            <li><i class="flaticon-clock"></i>10:00 - 17:00</li>
                        </ul>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </header>
            <!--Header End-->
        </div>
        <!--Full width header End-->


</body>
</html>