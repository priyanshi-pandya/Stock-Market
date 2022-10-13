<?php
    include "connectiondb.inc.php";
    session_start();
     $services = $_POST['service'];
    echo $service;
    if(isset($_POST['submit'])){
     $userid = $_SESSION['login_id'];
     $c_name = $_POST['coupon_name'];
    $total = $_POST['total'];
    $services = $_POST['service'];
    echo $services;
    //echo $total;
    $date1 = date("Y-m-d");
    $qry = "SELECT * FROM `coupon` WHERE coupon_code='".$c_name."'";

    $rs = mysqli_query($conn,$qry);
    $no = mysqli_num_rows($rs);
    
    
    
    
    //$userid = $_SESSION['login_id'];
    //$cname = $_POST['coupon_name'];
    
    // if(isset($_POST['submit'])){
    //   $userid = $_SESSION['login_id'];
    //   $c_name = $_POST['coupon_name'];
    //   //echo $cname;
    //      $date1 = date("Y-m-d");
    //      $qry = "SELECT * FROM `coupon` WHERE coupon_code='".$c_name."'";
    //      //echo "YO";
    //      $rs = mysqli_query($conn,$qry);
    //      $no = mysqli_num_rows($rs);
         
         if(mysqli_num_rows($rs) > 0)
         {
             
            $row = mysqli_fetch_assoc($rs);
            $service = $_POST['service'];
            if($row['services'] == "generic" && $row['expiry_date'] <= $date1){
                $total = $total - $row['discount_price'];
                
            }
            else if($row['services'] == "all workshop" && $row['user_id'] == $userid  && $row['expiry_date'] <= $date1){
                $total = $total - $row['discount_price'];
                
            }
            else if($row['services'] == "all mentorship" && $row['user_id'] == $userid && $row['expiry_date'] <= $date1){
                $total = $total - $row['discount_price'];
                
            }
            else if($row['services'] == "paid tips" && $row['user_id'] == $userid && $row['expiry_date'] <= $date1){
                $total = $total - $row['discount_price'];
                
            }
            else{
                echo '<script>alert("You are not valid for this code!");</script>';
            }
                                                            
        }
        else{
            echo '<script>alert("Coupon Code Not Valid!");</script>';
        }
    //    header("Location: cart.php?total=$total");
      //  exit();
        
    }
 

?>