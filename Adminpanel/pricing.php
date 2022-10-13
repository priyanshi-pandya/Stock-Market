<?php
  session_start();
  if(!isset($_SESSION["adminemail"])){
    header("Location: login.php");
  }
?>

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
    
    
    <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <center><h4 class="card-title"><big><u>Services Detials</u></big> </h4></center>
                    <div class="table-responsive pt-3">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>
                               ID
                            </th>
                            <th>
                               Name 
                            </th>
                            <th>
                               Description
                            </th>
                            <th>
                              Price
                            </th>
                            <th>
                              Edit Price
                            </th>
                            <th>
                              Delete Price
                            </th>
                            
                          </tr>
                        </thead>
                        <tbody>
                             <?php
                          include "connectiondb.inc.php";

                          $sql="SELECT * from peicepage";
                          $result = mysqli_query($conn, $sql);  
                          
                          if(mysqli_num_rows($result)>0)
                          {
                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                            {?>
                        
                          <tr>
                            <td>
                              <?php echo $row["price_id"];?>  
                            </td>
                            <td style="overflow-x: scroll;max-width:500px;">
                              <?php echo $row["c_name"];?>
                            </td>
                            <td style="overflow-x: scroll;overflow-y: scroll;max-width:500px;">
                            <?php echo $row["description"];?>
                            </td>
                             <td>
                              <?php echo $row["price"];?>
                            </td>
                            <td>
                            <button name="pricesubmit" onclick="window.location.href = 'updatepricing.php?id=<?php echo $row['price_id'];?>';" class="btn btn-success btn-rounded btn-fw">Edit Pricing</button>
                            </td>
                            <td>
                            <button name="blogsubmit" onclick="window.location.href = 'deletepricing.php?id=<?php echo $row['price_id'];?>';" class="btn btn-danger btn-rounded btn-fw">Delete Pricing</button>
                            </td>
                            <?php }}?>
                             </tbody>
                        </table>
                    </div>
                  </div>
                </div>
              </div>

               <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                <center><h4 class="card-title"><big><u>Add a Services</u></big> </h4></center>
                  <form class="form-sample" action="addpricing.php" method="POST" enctype="multipart/form-data">
                    <p class="card-description">
                      Service Details
                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Name </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" placeholder="Enter the Name" required/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Price </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="pri" placeholder="Enter the Price" required/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"> Description</label>
                          <div class="col-sm-9">
                           <textarea type="text" class="form-control" name="des" style="height:300px;" placeholder="Enter the Description" required ></textarea>
                          </div>
                        </div>
                      </div>
                      
                      

              </div>
              
              </div>
              <center><button type="submit" name="psubmit" class="btn btn-primary btn-rounded btn-fw">Submit</button></center>
            </form>
          </div>
        </div>
             
      
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



<!-- ***********************************************EDIT A BLOG//////////////////////////////////////////////// -->









