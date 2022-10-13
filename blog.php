<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from rstheme.com/products/html/reobiz/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 May 2021 15:44:33 GMT -->
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Blog – Reobiz – Consulting Business HTML Template</title>
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
    </head>
    <body>

        <!-- Preloader area start here -->
        <div id="loader" class="loader">
            <div class="spinner"></div>
        </div>
        <!--End preloader here -->

        <!--Full width header Start-->
        <?php include "header.php"; ?>
        <!--Full width header End-->

		<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Section Start -->
            <div class="rs-breadcrumbs bg-8">
                <div class="container">
                    <div class="content-part text-center pt-160 pb-160">
                        <h1 class="breadcrumbs-title white-color mb-0">Blogs</h1>
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs Section End -->

            <div class="rs-blog inner pt-100 pb-100 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- FETCH BLOGS START -->
                        <?php
                                include "connectiondb.inc.php";
                                $sql = "SELECT * FROM blog;";  
                                $result = mysqli_query($conn, $sql);
                                while($row = $result->fetch_assoc())
                                {
                                
                                echo "<div class='blog-wrap shadow mb-70 xs-mb-50'>";
                                echo "<div class='image-part'>";
                                echo "<a><img src='{$row['blog_header_image']}' alt=''></a>";
                                echo "</div>";
                                echo "<div class='content-part'>";
                                echo "<h3 class='title mb-10'><a href='blog-single.html'>{$row['blog_title']}</a></h3>";
                                echo "<ul class='blog-meta mb-22'>";
                                echo "<li><i class='fa fa-calendar-check-o'></i> {$row['blog_creation_date']}</li>";
                                echo "<li><i class='fa fa-user-o'></i> {$row['blog_creator_name']}</li>";
                                echo "<li><i class='fa fa-book'></i> <a href='blog-single.html'>{$row['blog_category']}</a></li>";
                                echo "</ul>";
                                echo "<div class='btn-part'>";
                                echo "<a class='readon-arrow' href='blog-single.php?id={$row['blog_id']}'>Continue Reading</a>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                
                              }?>

                        <!-- FETCH BLOGS ENDS -->
                        </div>

                        <div class="col-lg-4 md-mb-50 pl-35 lg-pl-15 md-order-first">
                            <div id="sticky-sidebar" class="blog-sidebar">
                                <div class="sidebar-search sidebar-grid shadow mb-50">
                                    <form class="search-bar">
                                        <input type="text" placeholder="Search...">
                                        <span>
                                          <button type="submit"><i class="flaticon-search"></i></button> 
                                        </span>
                                    </form>
                                </div>

                                <div class="sidebar-popular-post sidebar-grid shadow mb-50">
                                    <div class="sidebar-title">
                                       <h3 class="title semi-bold mb-20">Recent Post</h3>
                                    </div>
                                    <!-- PHP FETCH RECENT POST -->
                                    <?php 
                                        $sql = "SELECT * FROM blog LIMIT 6;";  
                                        $result = mysqli_query($conn, $sql);
                                        while($row = $result->fetch_assoc()){
                                    
                                    echo "<div class='single-post mb-20'>";
                                    echo "<div class='post-image'>";
                                    echo "<a><img src='{$row['blog_header_image']}' alt='Blog Image'></a>";
                                    echo "</div>";
                                    echo "<div class='post-desc'>";
                                    echo "<div class='post-title'>";
                                    echo "<h5 class='margin-0'><a href='blog-single.php?id={$row['blog_id']}'>{$row['blog_title']}</a></h5>";
                                    echo "</div>";
                                    echo "<ul>";
                                    echo "<li><i class='fa fa-calendar'></i> {$row['blog_creation_date']}</li>";
                                    echo "</ul>";
                                    echo "</div>";
                                    echo "</div>";

                                    }?>
                                    <!-- PHP FETCH RECENT POST -->
                                    
                                </div>

                                <div class="sidebar-categories sidebar-grid shadow">
                                    <div class="sidebar-title">
                                       <h3 class="title semi-bold mb-20">Categories</h3>
                                    </div>
                                    <ul>                                    
                                        <li><a href="#">Consulting</a></li> 
                                        <li><a href="#">Creative</a></li> 
                                        <li><a href="#">Development</a></li> 
                                        <li><a href="#">Finance</a></li>
                                        <li><a href="#">Management</a></li>
                                        <li><a href="#">Strategy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="sticky-end"></div>
                </div>
            </div>
            <!-- Blog Section  End -->
        </div> 
        <!-- Main content End -->

        <!-- Footer Start -->
        <?php include "footer.php"; ?>
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
    </body>

<!-- Mirrored from rstheme.com/products/html/reobiz/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 May 2021 15:44:41 GMT -->
</html>