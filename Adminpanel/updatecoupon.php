<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Perfect Hit</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
    <?php 
      include "sidebar.php";
    ?>
    
     <?php
        if(isset($_GET['id'])){
          $id=$_GET['id'];
          include "connectiondb.inc.php";
          $sql="SELECT * from coupon WHERE coupon_id=$id;";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
          
        }
    ?>
    
    
    <div class="col-lg-12 grid-margin stretch-card">
                

<!-- ADD A BLOG -->


<div class="col-12 grid-margin">
    <div class="card">
    <div class="card-body">
    <center><h4 class="card-title"><big><u>Edit a Coupon</u></big> </h4></center>
        <form class="form-sample" action="editcoupon.php" method="POST" enctype="multipart/form-data">
        <p class="card-description">
            Coupon Details
        </p>
        <div class="row">
            <div class="col-md-6">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Coupon Code</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="couponcode" value="<?php echo $row['coupon_code']; ?>" placeholder="Enter the Coupon" required/>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Creation Date</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="cre_date" value="<?php echo $row['creation_date']; ?>" placeholder="Enter the Creation Date" required/>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Discount Price</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="discount" value="<?php echo $row['discount_price']; ?>" placeholder="Enter the Discount Price" required/>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Expire Date</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="ex_date" value="<?php echo $row['expire_date']; ?>" placeholder="Enter the Expire Price" required/>
                </div>
            </div>
            </div>
           
        </div>
            <input type="text" style="display:none" value="<?php echo $_GET['id']; ?>" name="codeid" />
        </div>
        <center><button type="submit" name="couponsubmit" class="btn btn-primary btn-rounded btn-fw">Submit</button></center>
        </form>
    </div>
    </div>
</div>


<!-- ***********************************************EDIT A BLOG//////////////////////////////////////////////// -->





