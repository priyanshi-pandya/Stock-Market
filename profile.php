<?php
session_start();
if(!isset($_SESSION["useremail"])){
    header("Location: account.php");
}
?>
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
<style>
        

.card:hover{

transform: translateY(-20px);


box-shadow: 0 0 10px blue;

}
.cart{
    align:left;
    right:80%;
}
</style>        
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
                    <div class="main-content">
                        <!-- Breadcrumbs Section Start -->
                        <div class="rs-breadcrumbs bg-2">
                            <div class="container">
                                <div class="content-part text-center">
                                    <h1 class="breadcrumbs-title white-color mb-0">Profile</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    session_start();
                    $_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
                     if(!isset($_SESSION['login_id'])){
                            $_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
                            header("Location: account.php");
                            exit();
                        }
                        
                        include "connectiondb.inc.php";
                        $email =  $_SESSION["useremail"];
                        $sql="SELECT login_id from login where email = '$email'";
                        $result = mysqli_query($conn, $sql);  
                        foreach($result as $row){
                            $loginid = $row["login_id"];
                        }
                    ?>
                    

         <?php           
         $qry = "select * from login where email = '$email'";
         $rs = mysqli_query($conn, $qry); 
         if(mysqli_num_rows($rs)>0)
        {
            $row = mysqli_fetch_assoc($rs);
            {
                            
         ?>
         <div class="container"><center>
        <div class="sec-title mb-20">
                <h2 class="title mt-5 ml-5">EDIT PROFILE</h2>
        
         
        <div class="panel panel-info" style="background-color:aqua; width:700px">
            <div style="background-color:lightgrey; width:700px; height:50px; padding-left:30px; padding-top:10px; text-align:left" class="panel-heading">
              <h3 class="panel-title"><?php echo $row['name']; ?></h2>
            </div>
               <!--<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="upload/<?php echo $row1['profilepic'];?>" class="img-circle img-responsive" /> </div>-->
                <form method="post" action="edit_profile.php">
                <div class=" col-md-9 col-lg-9 " style="text-align:center"> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name" value="<?php echo $row['name'];?>"></td>
                      </tr>
                      <tr>
                        <td>Password</td>
                        <td><input type="Password" name="pwd" value="<?php echo $row['password'];?>"></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" value="<?php echo $row['email'];?>"></td>
                      </tr>
                      
                      <tr>
                        <td></td>
                        <td><input type="hidden" name="uid" value="<?php echo $row['login_id'];?>"></td>
                      </tr>
                      
                    </tbody>
                  </table>
                <input type="submit" name="submit" value="Edit">

                </div>
              </div>
              </form>
            </div>
         </center>
         </div>
         </div>
         <?php 
            }}
         ?>

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
                            <h4 class="widget-title">Latest Posts</h4>
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
                                <p>?? Copyright 2021 Reobiz. All Rights Reserved.</p>
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