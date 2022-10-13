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
          $sql="SELECT * from mentorship WHERE mentorship_id=$id;";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
          
        }
    ?>
    
    
    <div class="col-lg-12 grid-margin stretch-card">
                

<!-- ADD A BLOG -->


<div class="col-12 grid-margin">
    <div class="card">
    <div class="card-body">
    <center><h4 class="card-title"><big><u>Edit a mentorship</u></big> </h4></center>
        <form class="form-sample" action="editmentor.php" method="POST" enctype="multipart/form-data">
        <p class="card-description">
            mentorshipd Details
        </p>
        <div class="row">
            <div class="col-md-6">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Mentorship Topic</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="topic" value="<?php echo $row['mentorship_topic']; ?>" placeholder="Enter the Course Nmae" required/>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Mentorship Date</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="men_date" value="<?php echo $row['mentorship_date']; ?>" placeholder="Enter the Mentroship Date" required/>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Description </label>
                <div class="col-sm-9">
                <textarea type="text" class="form-control" name="des" style="height:300px;"   placeholder="Enter the Description " required > <?php echo $row['description'];?></textarea>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Mentorship Price</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="price" value="<?php echo $row['mentorship_price']; ?>" placeholder="Enter the Mentroship Price" required/>
                </div>
            </div>
            </div>
           
            <input type="text" style="display:none" value="<?php echo $_GET['id']; ?>" name="mid" />
        </div>
        </div>
        <center><button type="submit" name="msubmit" class="btn btn-primary btn-rounded btn-fw">Submit</button></center>
        </form>
    </div>
    </div>
</div>


<!-- ***********************************************EDIT A BLOG//////////////////////////////////////////////// -->





