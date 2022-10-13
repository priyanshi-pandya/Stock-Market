<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from rstheme.com/products/html/reobiz/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 May 2021 15:44:04 GMT -->
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
        <title>Services – Reobiz – Consulting Business HTML Template</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <style>
        
        
        
body {
  background: #3366ff ;
 background: -webkit-linear-gradient(to right,  #3366ff, #3366ff);
  background: linear-gradient(to right,  #3366ff, #3366ff);
  min-height: 100vh;
}
.head{
    font-weight:bold;
}
.card-img-top{
    width:20px;
    height:20px;
}
.order{
    color:white;
}
.cart{
    color:white;
}
.cbtn{
    width:100px;
    height:39px;
    font-size:25px;
}

    </style>

 <body>




<?php
session_start();
    
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
if(!isset($_SESSION['user_email_address'])){
    if(!isset($_SESSION['login_id'])){
        header("Location: account.php");
        exit();
    }
}



include "connectiondb.inc.php";
$userid = $_SESSION['login_id'];
$uname = $_SESSION['user_email_address'];
if(isset($_SESSION['user_email_address'])){
    $result2 = mysqli_query($conn,"SELECT * FROM login WHERE email='$uname'");
    $row2 = mysqli_fetch_assoc($result2);
        $userid = $row2['login_id'];
    }


$service = $_POST['service'];
if(isset($_POST['add'])){
    //$userid = $_SESSION['login_id'];
    $service = $_POST['service'];
    if($service == "workshop"){
        $id = $_POST['code'];
        $service = $_POST['service'];
        $des = $_POST['des'];
        $price = $_POST['cprice'];
        $name = $_POST['cname'];
        $qry = "INSERT INTO `cart`(`name_id`, `service`, `service_name`, `price`) VALUES ('".$userid."','".$service."','".$name."','".$price."')";
        $rs = mysqli_query($conn, $qry);
        if($rs)
        {
            // echo "Data inserted successfully";
        }
        else
        {
            die(mysqli_error($conn));
        }
    
    }
    else if($service){
        $id=$_POST["code"];
        $service = $_POST['service'];
        $des = $_POST['des'];
        $price = $_POST['mprice'];
        $name = $_POST['mname'];
        $qry = "INSERT INTO cart(name_id, service, service_name, price) values('".$userid."','".$service."','".$name."', '".$price."')";
        $rs = mysqli_query($conn, $qry);
        if($rs){
           // echo "Data inserted successfully";
        }
        else
        {
            //die("Not Inserted".mysqli_error($conn));
        }
    }
}

?>


        
        <!--End preloader here -->

        <!--Full width header Start-->
        <?php include "header.php"; ?>
        <!--Full width header End-->  
           <div class="main-content">
            <!-- Breadcrumbs Section Start -->
            <div class="rs-breadcrumbs bg-2">
                <div class="container">
                    <div class="content-part text-center">
                        <h1 class="breadcrumbs-title white-color mb-0">Cart Page</h1>
                    </div>
                </div>
            </div>

    <div class="px-4 px-lg-0">
  <!-- For demo purpose -->
  <div class="container text-white py-5 text-center">
    



 <?php


    //     if(empty($_SESSION["cart"])) {
    //     	$_SESSION["cart"] = $cartArray;
    //     	//$status = "<div class='box'>
    //     	echo '<script>alert("Product is added to your cart!")</script>';
    //         }else{
    //     	$array_keys = array_keys($_SESSION["cart"]);
    //     	if(in_array($code,$array_keys)) {
    //   		//$status = "<div class='box' style='color:red;'>
    //   		echo '<script>alert("Product is already added to your cart!")</script>';
        	
    //   		//Product is already added to your cart!</div>";	
    //     	} else {
    //     	$_SESSION["cart"] = array_merge($_SESSION["cart"],$cartArray);
    //       	//$status = "<div class='box'>Product is added to your cart!</div>";
    //       	echo '<script>alert("Product is added to your cart!")</script>';
    //     	}
   	// }
//   }
//}
?>


    
  </div>
  <!-- End -->

  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white shadow-sm mb-5 ">

          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-primary  cart">
                    <div class="p-2 px-3 text-uppercase">Course</div>
                  </th>
                  <!--<th scope="col" class="border-0 bg-primary cart">
                    <div class="py-2 text-uppercase">Price</div>
                  </th>-->
                  <th scope="col" class="border-0 bg-primary cart">
                    <div class="py-2 text-uppercase">Price</div>
                  </th>
                  <th scope="col" class="border-0 bg-primary cart">
                    <div class="py-2 text-uppercase">Remove</div>
                  </th>
                </tr>
              </thead>
              <tbody>
                  
    <?php
     $service = $_POST['service'];
          $code=$_POST['code'];
          $total = 0;
            $lid = $_SESSION['login_id'];
            $uname = $_SESSION['user_email_address'];
            if(isset($_SESSION['user_email_address'])){
                $result1 = mysqli_query($conn,"SELECT * FROM login WHERE email='$uname'");
                $row = mysqli_fetch_assoc($result1);
                $lid = $row['login_id'];
            }
            $result = mysqli_query($conn,"SELECT * FROM cart WHERE name_id=$lid");
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result)){
                    $name = $row['service_name'];
                    $code = $row['user_id'];
                    $price = $row['price'];     
    ?>
                  
                <tr>
                      <th scope="row">
                        <div class="p-2">
                          <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-2_qxjis2.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                          <div class="ml-3 d-inline-block align-middle">
                            <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block"><?php echo $name; ?></a></h5><span class="text-muted font-weight-normal font-italic"></span>
                          </div>
                        </div>
                        
                        <!--<td class="align-middle"><strong>$79.00</strong></td>-->
                        <td class="align-middle"><strong><?php echo $price; $total = $total+$price; ?></strong></td>
                        <td class="border-0 align-middle">  
                        
                        <a href="cart.php?delete=<?php echo $row['id']; ?>" class="text-dark"><i class="fa fa-trash"></i></a>
                        
                        <?php
                            $userid = $_SESSION['login_id'];
                            $uname = $_SESSION['user_email_address'];
                            if(isset($_SESSION['user_email_address'])){
                                $result1 = mysqli_query($conn,"SELECT * FROM login WHERE email='$uname'");
                                $row = mysqli_fetch_assoc($result1);
                                $userid = $row['login_id'];
                            }
                            $id = $_GET['delete'];
                            if(isset($_GET['delete'])){
                                $sql = "DELETE FROM `cart` WHERE name_id=$userid && id=$id";
                                
                                $rs = mysqli_query($conn, $sql);
                                if($rs){
                                    //echo "Delete successfull";
                                    header("location:cart.php");
                                }
                                else{
                                    //die("UNsuccessfull".mysqli_error($conn));
                                }
                            }
                        ?>
                        
                        
                        </td>
                    </th>
                </tr>
        
        
        
<?php  }} ?>                
                <tr>
                  <th scope="row">
                    <div class="p-2">
                      <!--<img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-2_qxjis2.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">-->
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">Total Cost</a></h5><span class="text-muted font-weight-normal font-italic"></span>
                      </div>
                    </div>
                    
                    <td class="align-middle"><strong>Rupees: <?php echo number_format($total,2); ?></strong></td>
                </th>    
                </tr>
                

              </tbody>
            </table>
          </div>
          
          <!-- End -->
        </div>
      </div>



      

<!---- try --> 
     <div id="rs-freequote" class="rs-freequote style3 pt-100 pb-100 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row md-col-padding">
                        <div class="col-lg-5 custom1 pr-0">
                            <div class="img-part"></div>
                        </div>
                        <div class="col-lg-7 custom2 pl-0">
                            <div id="form-messages"></div>
                            <!--<form id="contact-form" class="quote-form" method="post" action="https://rstheme.com/products/html/reobiz/mailer.php"></form>-->
                                <div class="sec-title mb-53">
                                   
                                    <h2 class="title white-color mb-0">Course Ordering</h2>
                                </div>
                                <div class=" py-5 p-4 bg-white shadow-sm">
                                        <div>
                                          <div class="bg-primary cart rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
                                          <div class="p-4">
                                            <p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
                                            <form action="" method="post">
                                                <div class="input-group mb-3">
                                                <input type="hidden" name="total" value="<?php echo $total; ?>">
                                                <input type="text" class="form-control" placeholder="Enter coupon code" name="coupon_name"  aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                <input type="submit" name="submit" value="Apply Coupon" class="btn md-primary-cart font-weight-bold order" />
                                              </div>
                                            </div>    
                                        </form>
                                        
                                        </div>
                                        <center><label class="input-label"  style="color:red;font-weight:400">              
                                        
                                           <?php             
                                            if(isset($_POST['submit'])){
                                              $userid = $_SESSION['login_id'];
                                              $uname = $_SESSION['user_email_address'];
                                                if(isset($_SESSION['user_email_address'])){
                                                    $result1 = mysqli_query($conn,"SELECT * FROM login WHERE email='$uname'");
                                                    $row = mysqli_fetch_assoc($result1);
                                                    $userid = $row['login_id'];
                                                }
                                              $c_name = $_POST['coupon_name'];
                                              $total = $_POST['total'];
                                              $tot = $_POST['total'];
                                                 $date1 = date("Y-m-d");
                                                 $qry = "SELECT * FROM `coupon` WHERE coupon_code='".$c_name."'";
                                                 $rs = mysqli_query($conn,$qry);
                                                 if(mysqli_num_rows($rs) > 0)
                                                {
                                                    $row = mysqli_fetch_assoc($rs);
                                                    $ser = $row['services'];
                                                    
                                                    $valid=$row['user_id'];
                                                    if($date1 >= $expire_date){
                                                        if($valid == "generic"){
                                                            $ser = $row['services'];
                                                            if($ser == "generic"){
                                                                $total = $total - $row['discount_price'];
                                                                 header("Location: cart.php?total=$total&dis=$dis&tot=$tot");
                                                            }
                                                            else{
                                                                $sql = "select * from cart where name_id=$userid";
                                                                $rs = mysqli_query($conn, $sql);
                                                                if(mysqli_num_rows($rs) > 0)
                                                                {
                                                                        $row1 = mysqli_fetch_assoc($rs);
                                                                        if($ser == $row1['service_name']){
                                                                            $dis=$row['discount_price'];
                                                                            $total = $total - $dis;
                                                                            header("Location: cart.php?total=$total&dis=$dis&tot=$tot");
                                                                        }
                                                                        else if($ser == "workshop"){
                                                                            $dis=$row['discount_price'];
                                                                            $total = $total - $dis;
                                                                            header("Location: cart.php?total=$total&dis=$dis&tot=$tot");                                  
                                                                        }
                                                                        else if($ser == "mentorship"){
                                                                            $dis=$row['discount_price'];
                                                                            $total = $total - $dis;
                                                                            header("Location: cart.php?total=$total&dis=$dis&tot=$tot");                                  
                                                                        }
                                                                        else if($ser == "paidtips"){
                                                                            $dis=$row['discount_price'];
                                                                            $total = $total - $dis;
                                                                            header("Location: cart.php?total=$total&dis=$dis&tot=$tot");                                  
                                                                        }
                                                                        else{
                                                                                 echo '<script>alert("You are not valid for this code!!!");</script>';                            
                                                                        }                
                                                                }
                                                            }
                                                            
                                                        }
                                                        else{
                                                            if($valid == $userid){
                                                                $ser = $row['services'];
                                                                $sql = "select * from cart where name_id=$userid";
                                                                $rs = mysqli_query($conn, $sql);
                                                                if(mysqli_num_rows($rs) > 0)
                                                                {
                                                                    //echo "edfewf";
                                                                    echo $ser;
                                                                    
                                                                    $row1 = mysqli_fetch_assoc($rs);
                                                                        
                                                                    echo $row1['service_name'];
                                                                    if($ser == "generic")
                                                                    {
                                                                        $dis=$row['discount_price'];
                                                                        $total = $total - $dis;
                                                                        header("Location: cart.php?total=$total&dis=$dis&tot=$tot");                              
                                                                    }
                                                                    else if($ser == 'workshop'){
                                                                        $dis=$row['discount_price'];
                                                                        $total = $total - $dis;
                                                                        header("Location: cart.php?total=$total&dis=$dis&tot=$tot");                              
                                                                    }
                                                                    else if($ser == "mentorship")
                                                                    {
                                                                        $dis=$row['discount_price'];
                                                                        $total = $total - $dis;
                                                                        header("Location: cart.php?total=$total&dis=$dis&tot=$tot");                              
                                                                    }
                                                                    else if($ser == "paidtips"){
                                                                            $dis = $row['discount_price'];
                                                                            $total = $total - $dis;
                                                                            header("Location: cart.php?total=$total&dis=$dis&tot=$tot");                                  
                                                                    }
                                                                    else if($ser == $row1['service_name']){
                                                                            $dis = $row['discount_price'];
                                                                            $total = $total - $dis;
                                                                            header("Location: cart.php?total=$total&dis=$dis&tot=$tot");                              
                                                                    }
                                                                    else{
                                                                            echo '<script>alert("You are not valid for this code!");</script>';
                                                                        }
                                                                    
                                                                     }
                                                            }
                                                            else{
                                                                echo '<script>alert("Invalid coupon code!");</script>';
                                                            }
                                                        }
                                                    }                                                                                                      }
                                                    else{
                                                        echo '<script>alert("Coupon code expired!");</script>';                            
                                                    }
                                                }
                                                
                                         ?>
                                        </label></center>
                                                                                  
                                          <div class="bg-primary cart rounded-pill px-4 py-3 text-uppercase font-weight-bold order">Order summary </div>
                                          <div class="p-4">
                                            <?php   $total=$_GET['total'];
                                                    $discount=$_GET['dis'];
                                                    $tot=$_GET['tot'];
                                             ?>
                                            <ul class="list-unstyled mb-4">
                                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal</strong><strong><?php echo $tot; ?></strong></li>
                                              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Discount </strong><strong><?php echo $discount; ?></strong></li>
                                              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                                                <h5 class="font-weight-bold"><?php echo number_format($total,2); 
                                                ?></h5>
                                              </li>
                                            </ul><a href="index.php" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>
                                          </div>
                                          
                                        </div>
                                      </div>
                                
                                    </div>
                                  </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
    








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
    </body>

<!-- Mirrored from rstheme.com/products/html/reobiz/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 May 2021 15:44:04 GMT -->
</html>
