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
  <script src="ckeditor/ckeditor.js"></script>

</head>
<body>
    <?php 
      include "sidebar.php";
    ?>

    <!-- FETCH BLOG ID -->

    <?php
        if(isset($_GET['id'])){
          $id=$_GET['id'];
          include "connectiondb.inc.php";
          $sql="SELECT * from blog WHERE blog_id=$id;";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
          
        }
    ?>
      <!-- PHP FETCH ALL FREE TIPS -->

<div class="col-lg-12 grid-margin stretch-card">
                

<!-- ADD A BLOG -->


<div class="col-12 grid-margin">
    <div class="card">
    <div class="card-body">
    <center><h4 class="card-title"><big><u>Edit a Blog</u></big> </h4></center>
        <form class="form-sample" action="editblog.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Blog Title</label>
                <div class="col-sm-9">
                <textarea type="text" class="form-control" name="blogname" style="height:100px;" placeholder="Enter the Blog Title" required ><?php echo $row['blog_title']; ?></textarea>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Category</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="blogcategory" value="<?php echo $row['blog_category']; ?>" placeholder="Enter the Blog Category" required/>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
           <div class="col-md-12">
            <div class="form-group row">
                <label class="col-sm-12 col-form-label">Blog Main Content</label>
                <div class="col-sm-12">
                <textarea type="text" class="form-control" name="maincontent" style="height:300px;" placeholder="Enter the Blog Content" required ><?php echo $row['blog_main_content']; ?></textarea>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Upload Blog Header Image</label>
                <div class="col-sm-9">
                <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="customFile" name="file">
            <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
    </div>
</div>
        </div>
            <input type="text" style="display:none" value="<?php echo $_GET['id']; ?>" name="blogid" />
        </div>
        <center><button type="submit" name="blogsubmit" class="btn btn-primary btn-rounded btn-fw">Submit</button></center>
        </form>
    </div>
    </div>
</div>


<!-- ***********************************************EDIT A BLOG//////////////////////////////////////////////// -->












 <!-- ////////////////*********************************/////////////////////////////////********************* */ */ -->
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

 <script>
    CKEDITOR.replace('maincontent');
</script>
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
  <script>
// Add the following code if you want the name of the file appear on select
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
</script>
</body>

</html>

