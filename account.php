<?php

//Include Configuration File
include("config.php");

$login_button = '';


if(isset($_GET["code"]))
{
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
 if(!isset($token['error']))
 {
  $google_client->setAccessToken($token['access_token']);
  $_SESSION['access_token'] = $token['access_token'];
  $google_service = new Google_Service_Oauth2($google_client);
  $data = $google_service->userinfo->get();

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }
  
  // INSERT GOOGLE USER IN DATABASE 
  
    include("connectiondb.inc.php");  
    $uemail = $_SESSION['user_email_address'];
    $google_email=$_SESSION['user_email_address'];
    $password1=$_SESSION['user_email_address'];
    $login_type="Google";
    
    $sql="SELECT * from login WHERE email='$google_email' AND login_type='Google';";
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);
    
        if($count==0)
        {
            $login_type="Google";
            $isql="INSERT INTO login(login_id,email,password,login_type) VALUES (DEFAULT,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
        
            if(!mysqli_stmt_prepare($stmt,$isql)){
                echo "SQL ERROR";
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt,"sss",$google_email,$password1,$login_type);
                mysqli_stmt_execute($stmt);
                
                
                header("Location: index.php");
            }
        }
        
        else if($count==1){
            $sql = "SELECT * FROM login WHERE email = '$google_email' AND login_type = 'Google';";  
            $result = mysqli_query($conn, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result); 
            if($count == 1){  
             // CREATING A USER SESSION
                $_SESSION["useremail"]=$google_email;
                header("Location: index.php");
                }  
                else{  
                    header("Location: account.php?error=Invaliddetials");
                } 
        }
        else{
            header("Location: account.php?error=Existing_User_Error");
        }
 }
}


if(!isset($_SESSION['access_token']))
{
    $login_button = $google_client->createAuthUrl();
}
// else{
//     $login_button = $google_client->createAuthUrl();//"Loginpage/logindb.php";
// }

?>



<!DOCTYPE html>
<html lang="zxx">
    
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>PerfectHit</title>
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- JQUERY LIVE VALIDATIONS -->
  <!-- USERNAME VALIDATION -->
  <script>
      $(document).ready(function(){
        $("#s_username").keyup(function(){
          $.ajax({

            url: 'Loginpage/validationpage.php',
            type: 'post',
            data: {s_username: $(this).val()},
            success: function(result){
              $("#result").html(result);
            }

          });
        });

      });
    </script>

    <!-- EMAIL VALIDATION -->
  <script>
        $(document).ready(function(){
          $("#s_email").keyup(function(){
            $.ajax({

              url: 'Loginpage/validationpage.php',
              type: 'post',
              data: {s_email: $(this).val()},
              success: function(result){
                $("#result").html(result);
              }

            });
          });

        });
    </script>
    <!-- PASSWORD VALIDATION -->

    <script>
        $(document).ready(function(){
          $("#s_password").keyup(function(){
            $.ajax({

              url: 'Loginpage/validationpage.php',
              type: 'post',
              data: {s_password: $(this).val()},
              success: function(result){
                $("#result").html(result);
              }

            });
          });

        });
    </script>
  <!-- ----------------------- -->
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
                    <div class="content-part text-center">
                        <h1 class="breadcrumbs-title white-color mb-0">My Account</h1>
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs Section End -->
            <?php
            if(isset($_GET['error']))
                                        {
                    if($_GET['error'] =="AlreadyLogged")
                        {
                            echo "<br><center>";
                            echo "<div class='isa_error'>";
                            echo "<h3 style='color:red;'>Already Logged In!</h3>";
                            echo "</div></center>";
                       }
                    
                    if( $_GET['error'] =="activeuser")
                        {
                            echo "<br><center>";
                            echo "<div class='isa_error'>";
                            echo "<h3 style='color:red; class='mt-3'>User Already Logged In other device! Please Log out from other device!</h3>";
                            echo "</div></center>";
                       }
                       
                       
                       if($_GET['error']=="Invaliddetials")
                        {
                            echo "<center><h3 style='color:red;' class='mt-3'>Invalid Username or Password !</h3></center>";
                        }
                        if($_GET['error']=="Deactivateduser")
                        {
                            echo "<center><h3 style='color:red;' class='mt-3'>You're decativated due to certain issues, reach out to pefecthitsolutions@gmail.com for the same!</h3></center>";
                        }
                        if($_GET['error']=="SignupSucessful")
                        {
                              echo "<center><h3 style='color:red;' class='mt-3'>SignUp Successful !</h3></center>";
                        }
                        if($_GET['error']=="PasswordChanged")
                        {
                              echo "<center><h3 style='color:red;' class='mt-3'>Password Changed Sucessfully !</h3></center>";
                        }
                        if($_GET['error']=="Password_Length_Error")
                        {
                              echo "<center><h3 style='color:red;' class='mt-3'>Password length should be atleast 6 characters !</h3></center>";
                        }
                        if($_GET['error']=="PasswordNotSame")
                        {
                              echo "<center><h3 style='color:red;' class='mt-3'>Password && Confirm Password should be same!</h3></center>";
                        }
                        if($_GET['error']=="Existing_User_Error")
                        {
                            echo "<center><h3 style='color:red;' class='mt-3'>User already exists !</h3></center>";
                        }
            }           
            ?>
            <!-- Account Login Start -->
            <div id="rs-my-account" class="rs-my-account pt-100 pb-100 md-pt-57 md-pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="regi-side">
                                <div class="sec-title">
                                    <h2 class="title">SIGN UP</h2>
                                </div>
                                <form class="register-form" id="register-form" method="POST" action="Loginpage/signupdb.php">
    
                                    <label class="input-label">Name <span class="req">*</span></label>
                                    <input class="custom-placeholder" id="s_username" type="text" name="s_name" placeholder="Enter your Name" required="">
                                    
                                    <label class="input-label">Email Address <span class="req">*</span></label>
                                    <input class="custom-placeholder" id="s_email" type="email" name="s_mail" placeholder="Enter your Email" required="">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="input-label">Password <span class="req">*</span></label>
                                            <input class="custom-placeholder" id="s_password" type="password" name="s_pass1" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="input-label">Confirm Password <span class="req">*</span></label>
                                            <input class="custom-placeholder" type="password" name="s_pass2" required="">
                                        </div>
                                    </div>


                                    <label>
                                        <input class="checkbox" type="checkbox" name="agreement" required=""> I agree the User Agreement and <a href="#">Terms &amp; Condition.</a>
                                    </label>

                                    <div class="submit-btn">
                                        <button class="readon" name="signupsubmit" type="submit">Create Account</button>
                                    </div><br>
                                    <center><label class="input-label" id="result" style="color:red;font-weight:400"></label></center>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-5 md-order-first md-mb-40">
                            <div class="login-side">
                                <div class="sec-title">
                                    <h2 class="title">LOG IN</h2>
                                </div>
                                <form class="login-form" action="Loginpage/logindb.php" method="POST">
                                    <label class="input-label">Email address <span>*</span></label>
                                    <input class="input-control" type="email" name="l_email" placeholder="Enter Email" required>
                                    <label class="input-label">Password <span>*</span></label>
                                    <input class="input-control" type="password" name="l_pass" placeholder="Enter Password" required>
                                    <div class="login-control">
                                        <ul>
                                            <li><button type="submit" name="lsubmitbutton" class="readon">Login</button></li>
                                            <li>
                                                <label class="checkbox">
                                                    <input type="checkbox" name="Remember"> Remember me
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    </form>
                                    <div class="container">
                                    <a class="psw-recover" href="#" data-target="#pwdModal" data-toggle="modal">Forgot Password?</a>
                                    </div>
                                    
                                    <div id="pwdModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h1 class="text-center">What's My Password?</h1>
                                            </div>
                                            
                                            
                                            <div class="modal-body">
                                                <div class="col-md-12">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                            <div class="card-text">
			<form action="Loginpage/forgotpassword/checkmail.php" method="POST">
				<div class="form-group">
					<label for="exampleInputEmail1">Enter your registered email address and we will send you a code to reset your password.</label>
					<input type="email" name="l_email" class="form-control form-control-sm" placeholder="Enter your email address">
				</div>
                <input class="btn btn-lg btn-primary btn-block" value="Send code" type="submit">

				<!-- <button type="submit" class="btn btn-primary btn-block" name="submitbutton">Send code</button> -->
			</form>
		</div>
                                                                
                                                                <!-- <p>If you have forgotten your password you can reset it here.</p> -->
                                                                <?php
                if(isset($_GET['error'])=="InvalidEmail")
                {
                    echo "<br>";
                    echo "<div class='isa_error'>";
                    echo "<i class='fa fa-times-circle'></i>";
                    echo "&nbsp Invalid Email !";
                    echo "</div>";
                }
        ?>
        <?php
        if(!isset($_GET['action'])=="True")
        {?>
	
        <?php } ?>
        <?php
                if(isset($_GET['action'])=="True")
                {?>
                <?php
                    if(isset($_GET['otperror'])=="WrongOTP")
                    {
                        echo "<br>";
                        echo "<div class='isa_error'>";
                        echo "<i class='fa fa-times-circle'></i>";
                        echo "&nbsp Wrong OTP !";
                        echo "</div>";
                    }
                ?>
                <div class="card-text">
                    <form action="checkotp.php" method="POST">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Enter the 6 digit code sent to your registered email.</label>
                        <input type="text" name="encryptedemail" value="<?php if(isset($_GET['e'])){echo $_GET['e']; }?>" style="display:none;">
                        <input type="number" class="form-control form-control-sm" name="user_otp" placeholder="Enter 6-digit Code" min="100000" max="999999" required>
				        </div>
				    <button type="submit" name="verifycode" class="btn btn-primary btn-block">Verify Code</button>
			        </form>
		        </div>
                <?php }?>
                                                                    <!-- <div class="panel-body">
                                                                        <fieldset>
                                                                            <div class="form-group">
                                                                                <input class="form-control input-lg" placeholder="E-mail Address" name="email" type="email">
                                                                            </div>
                                                                            <input class="btn btn-lg btn-primary btn-block" value="Send My Password" type="submit">
                                                                        </fieldset>
                                                                    </div> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                   
                                            </div>
                                            <div class="modal-footer">
                                                <div class="col-md-12">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true" style = "border-top: 0px;">Cancel</button>
                                               
                                                </div>	
                                            </div>
                                        </div>
                                        </div>
                                        </div>

                                
                                <?php
                                if(!$login_button == '')
                                {   
                                    echo '<div class="row" style="">';
                                        echo '<div class="col-md-3">';                                  
                                            echo '<a class="btn btn-outline-dark" href="'.$login_button.'" role="button" style="text-transform:none; width:300px;">';
                                              $_SESSION['uemail'] = $_SESSION['user_email_address'];
                                              echo '<img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />';
                                              echo 'Login with Google';
                                            echo '</a>';
                                        echo '</div>';
                                    echo '</div>';
                                   
                                }
                                
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Account Login End -->
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

        <script>
        
        </script>
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

<!-- Mirrored from rstheme.com/products/html/reobiz/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 May 2021 15:44:51 GMT -->
</html>