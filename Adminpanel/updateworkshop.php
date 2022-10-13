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
          $sql="SELECT * from workshop WHERE course_id=$id";
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
        <form class="form-sample" action="editworkshop.php" method="POST" enctype="multipart/form-data">
        <p class="card-description">
            Coupon Details
        </p>
        <div class="row">
            <div class="col-md-6">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Course Name</label>
                <div class="col-sm-9">
                <textarea type="text" class="form-control" name="name" style="height:100px;" placeholder="Enter the Course Name" required ><?php echo $row['course_name']; ?></textarea>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Course Date</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="c_date" value="<?php echo $row['course_date']; ?>" placeholder="Enter the Creation Date" required/>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Description</label>  
                <div class="col-sm-9">
                
                 <textarea type="text" class="form-control" name="des" style="height:300px;"   placeholder="Enter the Description " required > <?php echo $row['description'];?></textarea>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Course Price</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="price" value="<?php echo $row['course_price']; ?>" placeholder="Enter the Course Price" required/>
                </div>
            </div>
            </div>
           
        </div>
            <input type="text" style="display:none" value="<?php echo $_GET['id']; ?>" name="workid" />
        </div>
        <center><button type="submit" name="wsubmit" class="btn btn-primary btn-rounded btn-fw">Submit</button></center>
        </form>
    </div>
    </div>
</div>







