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

    <!-- Free Tips Wall Table -->

      <!-- PHP FETCH ALL FREE TIPS -->

      <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <center><h4 class="card-title"><big><u>Available Coupons</u></big> </h4></center>
                    <div class="table-responsive pt-3">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>
                               ID
                            </th>
                            <th>
                              Coupon code
                            </th>
                            <th>
                              Creation Date
                            </th>
                            <th>
                             Discount price
                            </th>
                            <th>
                              Expire Date
                            </th>
                            <th>
                              Services
                            </th>
                            <th>
                              userid
                            </th>
                            <th>
                              Edit Coupon
                            </th>
                            <th>
                              Delete Coupon
                            </th>
                            
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                          include "connectiondb.inc.php";

                          $sql="SELECT * from coupon;";
                          $result = mysqli_query($conn, $sql);  
                          
                          if(mysqli_num_rows($result)>0)
                          {
                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                            {?>
                        
                          <tr>
                            <td>
                              <?php echo $row["coupon_id"];?>   
                            </td>
                            <td style="overflow-x: scroll;max-width:200px;">
                              <?php echo $row["coupon_code"];?>
                            </td>
                            <td>
                              <?php echo $row["creation_date"];?>
                            </td>
                            <td>
                              <?php echo $row["discount_price"];?>
                            </td>
                            <td>
                            <?php echo $row["expire_date"];?>
                            </td>
        
                            <td>
                                <?php echo $row["services"];?>
                            </td>
                            <td>
                                <?php echo $row["user_id"];?>
                            </td>
                            <td>
                                <button name="blogsubmit" onclick="window.location.href = 'updatecoupon.php?id=<?php echo $row['coupon_id'];?>';" class="btn btn-success btn-rounded btn-fw">Edit Coupon</button>    
                            </td>
                            <td>
                                <button name="blogsubmit" onclick="window.location.href = 'deletecoupon.php?id=<?php echo $row['coupon_id'];?>';" class="btn btn-danger btn-rounded btn-fw">Delete Coupon</button>
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
                <center><h4 class="card-title"><big><u>Add a Coupon</u></big> </h4></center>
                  <form class="form-sample" action="" method="POST" enctype="multipart/form-data">
                    <p class="card-description">
                      <!--Coupon Details-->
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Coupon Code</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="couponcode" placeholder="Enter the Coupon Code" required/>
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">User</label>
                          <div class="col-sm-9">
                         <!--<input type="text" class="form-control" name="ex_date" placeholder="Enter the Expire Date" required/>-->
                         
                         <?php
                         include "connectiondb.inc.php";
                         $qry = "select login_id from login;";
                         $rs = mysqli_query($conn, $qry);
                         if($rs != 0){
                        echo '<select id="userid" class="form-control" name="userid">';
                        echo '<option selected>Select user id</option>';    
                         
                         $num_res = mysqli_num_rows($rs);
                        for($i=0; $i<$num_res; $i++){
                            $row = mysqli_fetch_array($rs);
                            $id = $row[login_id];
                            echo "<option value='".$id."'>".$id."</option>";
                        }
                        echo "<option value='generic'>Generic</option>";
                        echo '</select>';
                         }            
                         ?>
                         
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Discount Price</label>
                          <div class="col-sm-9">
                           <input type="text" class="form-control" name="discount" placeholder="Enter the Discount Price" required/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Expire Date</label>
                          <div class="col-sm-9">
                         <!--<input type="text" class="form-control" name="ex_date" placeholder="Enter the Expire Date" required/>-->
                         <select id="months" class="form-control" name="months">
                             <option selected>Select months</option>
                             <option value="1">1 month</option>
                             <option value="2">2 months</option>
                             <option value="3">3 months</option>
                             <option value="4">4 months</option>
                             <option value="5">5 months</option>
                             <option value="6">6 months</option>
                         </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Services</label>
                          <div class="col-sm-9">
                              
                        <?php
                         include "connectiondb.inc.php";
                         $qry = "select mentorship_topic from mentorship;";
                         $rs = mysqli_query($conn, $qry);
                         if($rs != 0){
                        echo '<select id="services" class="form-control" name="services">';
                        echo '<option selected>Select service</option>';    
                         
                         $num_res = mysqli_num_rows($rs);
                        for($i=0; $i<$num_res; $i++){
                            $row = mysqli_fetch_array($rs);
                            $name = $row[mentorship_topic];
                            echo "<option value='".$name."'>".$name."</option>";
                        }
                    }
                        
                        $sql = "select course_name from workshop;";
                         $rs1 = mysqli_query($conn, $sql);
                         if($rs1 != 0){
                        //echo '<select id="services" class="form-control" name="services">';
                        //echo '<option selected>Select service</option>';    
                         
                             $num_res = mysqli_num_rows($rs1);
                            for($i=0; $i<$num_res; $i++){
                                $row1 = mysqli_fetch_array($rs1);
                                $name1 = $row1[course_name];
                                echo "<option value='".$name1."'>".$name1."</option>";
                            }
                         }            
                         ?>
                             <option value="workshop">Workshops</option>
                             <option value="mentorship">Mentorship</option>
                             <option value="paidtips">Paid Tips</option>
                             <option value="generic">Generic</option>
                         </select>
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group row">
                          <!--<label class="col-sm-3 col-form-label">Creation Date</label>-->
                          <div class="col-sm-9">
                            <input type="hidden" class="form-control" name="cre_date" value="<?php echo date('Y-m-d'); ?>" required />
                          </div>
                        </div>
                      </div>
              </div>
              
              <center><button type="submit" name="couponsubmit" class="btn btn-primary btn-rounded btn-fw">Submit</button></center>
            </form>
          </div>
        </div>
        
<?php
  session_start();
  if(!isset($_SESSION["adminemail"])){
    header("Location: login.php");
  }
  
    include "connectiondb.inc.php";


    if(isset($_POST['couponsubmit'])){
        $code = $_POST['couponcode'];
        $sql = "select * from coupon where coupon_code = $code";
        $rs =  mysqli_query($conn, $sql);
        if(mysqli_num_rows($rs) > 0)
        {
           echo '<script>alert("Already added Coupon code");</script>';
           exit();
        }
        else{
        
        
        $sdate = $_POST['cre_date'];
        $discount = $_POST['discount'];
        $month = $_POST['months'];
        $userid = $_POST['userid'];
        $services = $_POST['services'];
        $ex_date = date('Y-m-d', strtotime($date. ' + ' .$month. ' month'));
        echo $ex_date;

        $qry="INSERT INTO coupon(coupon_code,creation_date,discount_price,expire_date, services, user_id) VALUES ('".$code."','".$sdate."','".$discount."','".$ex_date."', '".$services."', '".$userid."')";
        $rs = mysqli_query($conn, $qry);
        if($rs){
            echo "Successfull";
        }
        else{
            die("Unsuccessfull".mysqli_error($conn));
        }
        header("Location: coupon.php");
        exit();
    }

}


?>
        
        
        
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


      