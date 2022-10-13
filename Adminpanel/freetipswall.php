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
                    <center><h4 class="card-title"><big><u>Available Free Tips</u></big> </h4></center>
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
                              Buy / Sell
                            </th>
                            <th>
                              Quantity
                            </th>
                            <th>
                              Entry Price
                            </th>
                            <th>
                              Exit Price
                            </th>
                            <th>
                              Stop Loss
                            </th>
                            <th>
                              Target Price
                            </th>
                            <th>
                              Time of Entry
                            </th>
                            <th>
                              Result
                            </th>
                            <th>
                              Time of Result
                            </th>
                            <th>
                              Net Profit / Loss
                            </th>
                            <th>
                              Exit Target Hit
                            </th>
                            <th>
                              Exit Stoploss Hit
                            </th>
                            <th>
                              Exit CMP
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          include "connectiondb.inc.php";

                          $sql="SELECT * from freetips ;";
                          $result = mysqli_query($conn, $sql);  
                          
                          if(mysqli_num_rows($result)>0)
                          {
                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                            {?>
                        
                          <tr>
                            <td>
                              <?php echo $row["id"];?>  
                            </td>
                            <td>
                              <?php echo $row["Stock_Name"];?>
                            </td>
                            <td>
                              <?php echo $row["BuySell"];?>
                            </td>
                            <td>
                              <?php echo $row["quantity"];?>
                            </td>
                            <td>
                            <?php echo $row["Entry_Price"];?>
                            </td>
                            <td>
                            <?php if($row["exit_price"]<=0){
                              echo "-";
                            }
                            else{
                              echo $row["exit_price"];
                            };?>
                            </td>
                            <td>
                            <?php echo $row["Stoploss"];?>
                            </td>
                            <td>
                            <?php echo $row["Target"];?>
                            </td>
                            <td>
                            <?php echo $row["Time_of_entry"];?>
                            </td>
                            
                            <td>
                            <?php if($row["Result"]==NULL){
                              echo "Result Pending";
                            }
                            else{
                              echo $row["Result"];
                            };?>
                            </td>
                            <td>
                            <?php if($row["Time_of_result"]==NULL){
                              echo "Result Pending";
                            }
                            else{
                              echo $row["Time_of_result"];
                            };?>
                            </td>
                            <td>
                            <?php echo $row["net_p_l"];?>
                            </td>
                            <td>
                            <?php
                            if($row["Result"]==NULL){?>
                            <button type="button" class="btn btn-success" onclick="location.href='exit_target_hit.php?id=<?php echo $row['id'];?>'">Exit - Target Hit</button>
                            <?php }
                            else{
                              echo "<button type='button' class='btn btn-secondary'>Target Hit</button>";
                            }?>
                            </td>
                            <td>
                            <?php
                            if($row["Result"]==NULL){?>
                            <button type="button" class="btn btn-danger" onclick="location.href='exit_stoploss_hit.php?id=<?php echo $row['id'];?>'">Exit - Stoploss Hit</button>
                            <?php }
                            else{
                              echo "<button type='button' class='btn btn-secondary'>Stoploss Hit</button>";
                            }?>
                            </td>
                            <td>
                            <?php
                            if($row["Result"]==NULL){?>
                            <button type="button" class="btn btn-warning" onclick="location.href='exit_cmp.php?id=<?php echo $row['id'];?>'">Exit - CMP</button>
                            <?php }
                            else{
                              echo "<button type='button' class='btn btn-secondary'>CMP Hit</button>";
                            }?>
                            </td>
                          </tr>
                          <?php }}?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              
<!-- Available free tips End -->

<?php

  if(isset($_GET['error'])=="InputError"){
  echo "<div class='alert alert-danger' style='margin-left:50px;margin-right:50px;' role='alert'>";
  echo "<center>During BUY : Target Price must be greater than Entry Price and Stoploss Price must be less than Entry Price . <br>During SELL : Target Price must be greater than Entry Price and Stoploss Price must be greater than Entry Price</center>";
  echo "</div>";
  }
?>

<!-- ADD A FREE TIP -->

<div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                <center><h4 class="card-title"><big><u>Add a Free Tip</u></big> </h4></center>
                  <form class="form-sample" action="addfreetip.php" method="POST">
                    <p class="card-description">
                      Free Tip Details
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Stock Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="stockname" placeholder="Enter the Stock Name" required/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Quantity</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" min="1" name="stockquantity" placeholder="Enter the Stock Quantity" required/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Buy / Sell</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="buysell">
                              <option value="Buy">Buy</option>
                              <option value="Sell">Sell</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Entry Price</label>
                          <div class="col-sm-9">
                            <input type="number" min="1" class="form-control" name="entryprice" placeholder="Enter the Entry Price" required/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Target Price</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="targetprice" placeholder="Enter the Target Price" required/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Stoploss Price</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="stoplossprice" placeholder="Enter the Stoploss Price" required/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <center><button type="submit" name="tipsubmit" class="btn btn-primary btn-rounded btn-fw">Submit</button></center>
                  </form>
                </div>
              </div>
            </div>

<!-- ADD A FREE TIP ENDS -->
































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
</body>

</html>

