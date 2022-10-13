<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from rstheme.com/products/html/reobiz/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 May 2021 15:44:41 GMT -->
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Blog Single – Reobiz – Consulting Business HTML Template</title>
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
    <?php
        include "header.php";
    ?>
        
            
            <!--Header Start-->
            
        <!--Full width header End-->
        <hr>
		<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Section Start -->
            
            <!-- Breadcrumbs Section End -->
            <!-- GET CURRENT BLOG DETAILS -->

            <?php
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                }
                else{
                    $id=1;
                }

                include "connectiondb.inc.php";
                $sql = "SELECT * FROM blog WHERE blog_id=$id;";  
                $result = mysqli_query($conn, $sql);
                $row = $result->fetch_assoc();

            ?>


            <!-- Blog Section Start -->
            <div class="rs-blog inner single pt-10 pb-100 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="blog-part">
                                <div class="blog-img">
                                    <a ><img src="<?php echo $row['blog_header_image']; ?>" alt="Blog Image"></a>
                                </div>
                                <div class="article-content shadow mb-60">
                                    <ul class="blog-meta mb-22">
                                        <li><i class="fa fa-calendar-check-o"></i><?php echo $row['blog_creation_date']; ?></li>
                                        <li><i class="fa fa-user-o"></i> <?php echo $row['blog_creator_name']; ?></li>
                                        <li><i class="fa fa-book"></i> <a href="#"><?php echo $row['blog_category']; ?></a></li>
                                        <!-- <li><i class="fa fa-comments-o"></i> 10</li> -->
                                    </ul>
                                    <h2><?php echo $row['blog_title']; ?></h2>
                                    <p class="desc mb-35"><?php echo $row['blog_intro']; ?></p>

                                    <p class="markup-text mb-35"><?php echo $row['blog_highlight_content']; ?></p>

                                    <p class="desc"><?php echo $row['blog_main_content']; ?></p>

                                    <!-- <h2>Economy may face double recession</h2> -->

                                    <!-- <p class="desc">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment. Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p> -->

                                    <!-- <div class="mb-26"><img src="assets/images/blog/4.jpg" alt="Single Articles"></div> -->

                                    <!-- <p class="desc mb-23">Phosfluorescently engage worldwide methodologies with web-enabled technology. Interactively coordinate proactive e-commerce via process-centric “outside the box” thinking. Completely pursue scalable customer service through sustainable potentialities. Collaboratively administrate turnkey channels whereas virtual e-tailers. Objectively seize scalable metrics whereas proactive e-services. Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources.</p> -->

                                    <!-- <ul class="listing-style2 modify ml-20 mb-28">
                                        <li>New Construction Benefit of Service</li>
                                        <li>Renovations Benefit of Service</li>
                                        <li>Historic Renovations and Restorations</li>
                                        <li>Additions Benefit of Service</li>
                                        <li>Rebuilding from fire or water damage</li>
                                    </ul> -->

                                    <!-- <h3 class="mb-17">Experts Always Ready to Maximizing Products</h3> -->
                                    
                                    <!-- <p class="desc">Proactively fabricate one-to-one materials via effective e-business. Completely synergize scalable e-commerce rather than high standards in e-services. Assertively iterate resource maximizing products after leading-edge intellectual capital. Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p> -->

                                    <!-- <h4 class="mb-17">Get Start Your Next Project</h4> -->

                                    <!-- <p class="desc mb-0">Interactively procrastinate high-payoff content without backward-compatible data. Quickly cultivate optimal processes and tactical architectures. Completely iterate covalent strategic theme areas via accurate e-markets. Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications. Quickly drive clicks-and-mortar catalysts for change before vertical architectures.</p> -->
                                </div>
                                <!-- <div class="article-nav">
                                    <ul>
                                        <li class="next">
                                            <a href="#">
                                                <span class="next-link">Next <i class="flaticon-next"></i></span>
                                                <span class="link-text">Soundtrack Filma Lady Exclusive Music</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div> -->
                                <div class="bs-contact-form pt-45">
                                    <h3 class="title">Leave a Reply</h3>
                                    <p>Your email address will not be published. Required fields are marked *</p>
                                    <div id="form-messages"></div>
                                    <form id="contact-form" method="post" action="https://rstheme.com/products/html/reobiz/mailer.php">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-field">
                                                    <label>Name *</label>
                                                    <input type="text" id="name" name="name" required="">
                                                </div>                              
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-field">
                                                    <label>Email *</label>
                                                    <input type="email" id="email" name="email" required="">
                                                </div>                              
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-field mb-30">
                                                    <label>Comment</label>
                                                    <textarea rows="7" id="message" name="message"></textarea>
                                                </div>
                                                <div class="form-button mt-30">
                                                    <button type="submit" class="readon radius">Post Comment</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
                                       <h3 class="title mb-20">Recent Post</h3>
                                    </div>
                                    <!-- PHP FETCH RECENT POST -->
                                    <?php 
                                        $sql = "SELECT * FROM blog LIMIT 6;";  
                                        $result = mysqli_query($conn, $sql);
                                        while($row = $result->fetch_assoc()){
                                    
                                    echo "<div class='single-post mb-20'>";
                                    echo "<div class='post-image'>";
                                    echo "<a ><img src='{$row['blog_header_image']}' alt='post image'></a>";
                                    echo "</div>";
                                    echo "<div class='post-desc'>";
                                    echo "<div class='post-title'>";
                                    echo "<h5 class='margin-0'><a href='blog-single.php?id={$row['blog_id']}'>{$row['blog_title']}</a></h5>";
                                    echo "</div>";
                                    echo "<ul>";
                                    echo "<li><i class='fa fa-calendar'></i>{$row['blog_creation_date']}</li>";
                                    echo "</ul>";
                                    echo "</div>";
                                    echo "</div>";

                                    }?>
                                    <!-- PHP FETCH RECENT POST -->
                                </div>

                                <div class="sidebar-categories sidebar-grid shadow">
                                    <div class="sidebar-title">
                                       <h3 class="title mb-20">Categories</h3>
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
            <!-- Blog Section End -->
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

<!-- Mirrored from rstheme.com/products/html/reobiz/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 May 2021 15:44:41 GMT -->
</html>


