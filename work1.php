<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from rstheme.com/products/html/reobiz/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 May 2021 15:44:04 GMT -->
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Services – Reobiz – Consulting Business HTML Template</title>
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
        
        <link rel="stylesheet" href="style.css" ><!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    </head>
    <style>
      
    
.card:hover{

transform: translateY(-20px);


box-shadow: 0 0 10px blue;

}
    </style>
    <body>

        
        <!--End preloader here -->

        <!--Full width header Start-->
        <?php include "header.php"; ?>
        <!--Full width header End-->
        
         <div class="main-content">
            <!-- Breadcrumbs Section Start -->
            <div class="rs-breadcrumbs bg-2">
                <div class="container">
                    <div class="content-part text-center">
                        <h1 class="breadcrumbs-title white-color mb-0">WORKSHOP</h1>
                    </div>
                </div>
            </div>
            </div>
            
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
                $sql = "SELECT * FROM peicepage WHERE price_id=$id;";  
                $result = mysqli_query($conn, $sql);
                $row = $result->fetch_assoc();

            ?>
             <div id="rs-services" class="rs-services style1 modify2 pt-100 pb-84 md-pt-80 md-pb-64">
                <div class="container">
                    <div class="row gutter-16">
                        
                        <div class="col-lg-4 col-sm-6 mb-16">
                            <div class="service-wrap">
                                <div class="icon-part">
                                    <img src="assets/images/services/icons/modify/2.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h5 class="title"><a href="services-single.html"><?php echo $row['c_name'];?></a></h5>
                                    <div class="desc mb-30 mt-30"><?php echo $row['description'];?></div>
                                     <h5 class="loc-pr  "><?php echo $row['price'];?>  </h5>
                                    <a href="#" class="btn btn-primary">Get Started </a>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        
