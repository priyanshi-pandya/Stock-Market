<?php
    session_start();
    if(!isset($_SESSION["adminemail"])){
        header("Location: login.php");
    }
    include "connectiondb.inc.php";

    
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
  <style>
   .center{
    margin: auto;
    width: 60%;
    padding: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.hideform {
    display: none;
}
</style>
</submit>
</head>
<body>
    <?php 
      include "sidebar.php";
    ?>

    <!-- USER Table -->

      <!-- PHP FETCH ALL unpaid user -->

      <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <center><h4 class="card-title"><big><u>UNPAID USERS</u></big> </h4></center>
                    <div class="table-responsive pt-3">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>
                              User ID
                            </th>
                            <th>
                              User Name
                            </th>
                            <th>
                              Registered Date
                            </th>
                            <th>
                              Email
                            </th>
                            <th>
                              Phone no.
                            </th>
                            <th>
                              Other
                            </th>
                            <th>
                              Paid Sub.
                            </th>
                            <th>
                              Deactivate
                            </th>
                            
                          </tr>
                        </thead>
                        <tbody>
                            
                        
                        <?php
                          include "connectiondb.inc.php";

                          $sql="SELECT * from login where ispaid = 0";
                          $result = mysqli_query($conn, $sql);  
                          
                          if(mysqli_num_rows($result)>0)
                          {
                            foreach($result as $row)
                            {
                                
                            ?>
                        
                          <tr>
                            <td class="login_id2"><?php echo $row["login_id"];?></td>
                            <td><?php echo $row["name"];?></td>
                            <td><?php echo $row["date"];?></td>
                            <td><?php echo $row["email"];?></td>
                            <td><?php echo $row["phone"];?></td>
                            <td><?php echo $row["login_type"];?></td>
                            <td>
                            <button type="button"  class="btn btn-success subbtn btn-rounded btn-fw">Add Subscription</button>
                            </td>
                            <td>
                            <button name="deleteuser" onclick="window.location.href='deleteuser.php?id=<?php echo $row['login_id'];?>';" class="btn btn-danger btn-rounded btn-fw">Deactivate User</button>
                            </td>
                            <?php }}?>
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
              </div>

<!--modal pop up for the subscription-->

<div class="modal fade" id="submodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h3 class="modal-title" id="exampleModalLabel">Add Subscription</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <a class="btn btn-primary mb-2" data-toggle="collapse" href="#mentor" role="button" aria-expanded="false" aria-controls="mentor">
        <h4>Subscribe for Mentorship</h4></a>
        <div class="collapse" id="mentor">
          <form action="createcookie.php" class="mb-2" method="POST" >
                <select class="form-control mb-2 mt-2" name="mentors" id="cars">
                    <?php $sql1="SELECT * from mentorship";
                          $result1 = mysqli_query($conn, $sql1);
                           if(mysqli_num_rows($result1)>0)
                          {
                            foreach($result1 as $row1)
                            {?>
                      <option value="<?php echo $row1['mentorship_topic']?>"><?php echo $row1['mentorship_topic']?></option>
                      <?php } }?>
                </select>
                <select class="form-control mb-2 mt-2" name="months" id="cars">
                      <option value="2">2</option>
                      <option value="4">4</option>
                      <option value="6">6</option>
                      <option value="8">8</option>
                </select>
                <input type="text" class="form-control mb-2 mt-2" name="other" placeholder="Remarks">
                <div class="text-center">
                  <button type="submit" name="sub_data" class="btn btn-success subbtn btn-rounded btn-fw">Subscribe</button>
                </div>
          </form>
        </div>

  

        <a class="btn btn-primary mb-2" data-toggle="collapse" href="#paidtips" role="button" aria-expanded="false" aria-controls="paidtips">
        <h4>Subscribe for Workshop</h4></a>
        <div class="collapse" id="paidtips">
        
          <form action="createcookie.php" class="mb-2" method="POST">
                <select class="form-control mb-2 mt-2" name="works" id="cars">
                    <?php $sql1="SELECT * from workshop";
                          $result1 = mysqli_query($conn, $sql1);
                           if(mysqli_num_rows($result1)>0)
                          {
                            foreach($result1 as $row1)
                            {?>
                          ?>
                        <option value="<?php echo $row1['course_name']?>"><?php echo $row1['course_name']?></option>
                     <?php } }?>
                </select>
                <select class="form-control mb-2 mt-2" name="months" id="cars">
                      <option value="2">2</option>
                      <option value="4">4</option>
                      <option value="6">6</option>
                      <option value="8">8</option>
                </select>
                <input type="text" class="form-control mb-2 mt-2" name="other" placeholder="Remarks">
                <div class="text-center">
                  <button type="submit" name="sub_work" class="btn btn-success subbtn btn-rounded btn-fw">Subscribe</button>
                </div>  
          </form>
        </div>

        <a class="btn btn-primary mb-2" data-toggle="collapse" href="#workshop" role="button" aria-expanded="false" aria-controls="workshop">
        <h4>Subscribe for Paid Tips</h4></a>
        <div class="collapse" id="workshop">
          <form action="createcookie.php" method="POST" class="mb-2">
                <select class="form-control mb-2 mt-2" name="months" id="cars">
                      <option value="2">2</option>
                      <option value="4">4</option>
                      <option value="6">6</option>
                      <option value="8">8</option>
                </select>
                <input type="text" class="form-control mb-2 mt-2" name="other" placeholder="Remarks">
                <div class="text-center">
                  <input type="submit" name="sub_paid" class="btn btn-success subbtn btn-rounded btn-fw" value="Subscribe">
                </div>
          </form>
        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>              

<!-- end unpaid user -->

<!-- start paid user -->

        <!--paidtips users div start from here-->
                        <div class="col-12 grid-margin">
                                      <div class="card">
                                        <div class="card-body">
                                        <center><h4 class="card-title"><big><u>PAID USERS</u></big> </h4></center>
                                        
                                                            <!--paidtips user starts here-->
                                                            <h5 class="card-title mt-5 mb-5"><big><u>PAIDTIPS SUBSCRIBER</u></big> </h5>
                                                            <div class="table-responsive pt-3">
                                                                    
                                                                    <?php
                                                                      include "connectiondb.inc.php";
                                            
                                                                      $sql="SELECT DISTINCT login_id from `sub_paidtip` where a_deleted=0;";
                                                                      $result = mysqli_query($conn, $sql);  
                                                                    
                                                                      if(mysqli_num_rows($result)>0)
                                                                      {
                                                                        echo'
                                                                        <table class="table table-bordered">
                                                                    <thead>
                                                                      <tr>
                                                                        <th>
                                                                          User ID
                                                                        </th>
                                                                        <th>
                                                                          User Name
                                                                        </th>
                                                                        <th>
                                                                          Registered Date
                                                                        </th>
                                                                        <th>
                                                                          Email
                                                                        </th>
                                                                        <th>
                                                                          Phone no.
                                                                        </th>
                                                                        <th>
                                                                          Other
                                                                        </th>
                                                                        <th>
                                                                            Revenue
                                                                        </th>
                                                                        <th>
                                                                          Subscription
                                                                        </th>
                                                                        <th>
                                                                          Extend Subscription
                                                                        </th>
                                                                        <th>
                                                                          Block Subscription
                                                                        </th>
                                                                        
                                                                      </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    
                                                                        ';  
                                                                    $tot = 0;   
                                                                    $p2_price=0;
                                                                    $paid_price=0;
                                                                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                                                                    {
                                                                     $userid = $row['login_id'];
                                                                     $qry1="SELECT * FROM `sub_paidtip` WHERE login_id=$userid";
                                                                     $rs0 = mysqli_query($conn, $qry1);
                                                                     if(mysqli_num_rows($rs0) > 0){
                                                                         $row6 = mysqli_fetch_assoc($rs0);
                                                                         $price_paidtips = "select price from peicepage where c_name='Paid tips'";
                                                                         $result6 = mysqli_query($conn, $price_paidtips);  
                                                                         $row6 = mysqli_fetch_assoc($result6);
                                                                        $paid_price = $row6['price'];
                                                                         
                                                                     }
                                                                    
                                                                    
                                                                     $userid = $row['login_id'];
                                                                     $qry15="SELECT * FROM `sub2_paidtip` WHERE login_id=$userid and name='paidtip'";
                                                                     $rs15 = mysqli_query($conn, $qry15);
                                                                     if(mysqli_num_rows($rs15) > 0){
                                                                         while($row15 = mysqli_fetch_assoc($rs15)){
                                                                         $p2_paidtips = "select price from peicepage where c_name='Paid tips'";
                                                                         $result15 = mysqli_query($conn, $p2_paidtips);  
                                                                         $row15 = mysqli_fetch_assoc($result15);
                                                                        $p2_price += $row15['price'];
                                                                     }
                                                                    }
                                                                
                                                                     $tot = $paid_price+$p2_price;
                                                                     
                                                                    
                                                                     $sum1 = "select sum(mentorship.mentorship_price) as m_sum from mentorship inner join sub_mentorship where login_id = $userid and mentorship.mentorship_topic = sub_mentorship.name";
                                                                     $rs1 = mysqli_query($conn, $sum1);
                                                                     $row7 = mysqli_fetch_assoc($rs1);
                                                                     $mntr_price = $row7['m_sum'];
                                                                    
                                                                     $sum2 = "select sum(mentorship.mentorship_price) as m2_sum from mentorship inner join sub2_mentorship where login_id = $userid and mentorship.mentorship_topic = sub2_mentorship.name";
                                                                     $rs2 = mysqli_query($conn, $sum2);
                                                                      $row8 = mysqli_fetch_assoc($rs2);
                                                                     $mntr2_price = $row8['m2_sum'];
                                                                    
                                                                     $sum3 = "select sum(workshop.course_price) as w_sum from workshop inner join sub_workshop where login_id = $userid and workshop.course_name = sub_workshop.name";
                                                                     $rs3 = mysqli_query($conn, $sum3);
                                                                      $row9 = mysqli_fetch_assoc($rs3);
                                                                     $wrkshp_price = $row9['w_sum'];
                                                                     
                                                                     $sum4 = "select sum(workshop.course_price) as w2_sum from workshop inner join sub2_workshop where login_id = $userid and workshop.course_name = sub2_workshop.name";
                                                                     $rs4 = mysqli_query($conn, $sum4);
                                                                     $row10 = mysqli_fetch_assoc($rs4);
                                                                     $wrkshp2_price = $row10['w2_sum'];
                                                                     
                                                                     $total_price = $tot+$mntr_price+$mntr2_price+$wrkshp_price+$wrkshp2_price;
                                                                     
                                                                     $sql1="SELECT * from `login` where login_id = $userid";
                                                                     $result1 = mysqli_query($conn, $sql1);
                                                                     while($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)){
                                                                         
                                                                    ?>
                                                                    
                                                                      <tr>
                                                                        <td class="log_det"><?php echo $row1["login_id"];?></td>
                                                                        <td><?php echo $row1["name"];?></td>
                                                                        <td><?php echo $row1["date"];?></td>
                                                                        <td><?php echo $row1["email"];?></td>
                                                                        <td><?php echo $row1["phone"];?></td>
                                                                        <td><?php echo $row1["login_type"];?></td>
                                                                        <td><?php echo $total_price;  ?></td>
                                                                        <td>
                                                                        <button name="blogsubmit"  class="btn viewbtn btn-success btn-rounded btn-fw"> View Subscriptions</button>
                                                                        </td>
                                                                        <td>
                                                                        <button name="blogsubmit"  class="btn extbtn btn-primary btn-rounded btn-fw">Add Subscriptions</button>
                                                                        </td>
                                                                        <td>
                                                                        <button name="blogsubmit" onclick="window.location.href='blockuser.php?id=<?php  echo $row1['login_id'];?>';"  class="btn btn-danger btn-rounded btn-fw">Block Subscriptions</button>
                                                                        </td>
                                                                    </tbody>
                                                                    <?php }}}?>
                                                                    </table>
                                                                </div>
                                                                 <!--paidtips user ends here-->
                                                                 
                                                                 <!--workshop user starts here-->
                                                            <h5 class="card-title mt-5 mb-5"><big><u>WORKSHOP SUBSCRIBERS</u></big> </h5>
                                                            <div class="table-responsive pt-3">
                                                                    
                                                                    <?php
                                                                      include "connectiondb.inc.php";

                                                                      $sql2="SELECT DISTINCT login_id from `sub_workshop` where a_deleted=0;";
                                                                      $result2 = mysqli_query($conn, $sql2);  
                                                                      if(mysqli_num_rows($result2)>0)
                                                                      {
                                                                        echo'
                                                                        <table class="table table-bordered">
                                                                    <thead>
                                                                      <tr>
                                                                        <th>
                                                                          User ID
                                                                        </th>
                                                                        <th>
                                                                          User Name
                                                                        </th>
                                                                        <th>
                                                                          Registered Date
                                                                        </th>
                                                                        <th>
                                                                          Email
                                                                        </th>
                                                                        <th>
                                                                          Phone no.
                                                                        </th>
                                                                        <th>
                                                                          Other
                                                                        </th>
                                                                        <th>
                                                                          Revenue
                                                                        </th>
                                                                        <th>
                                                                          Subscription
                                                                        </th>
                                                                        <th>
                                                                          Extend Subscription
                                                                        </th>
                                                                        <th>
                                                                          Block Subscription
                                                                        </th>
                                                                        
                                                                      </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        ';  
                                                                    
                                                                    
                                                                    $tot=0;
                                                                    while($row21 = mysqli_fetch_array($result2, MYSQLI_ASSOC))
                                                                    {
                                                                     $userid = $row21['login_id'];
                                                                     $qry21="SELECT * FROM `sub_paidtip` WHERE login_id=$userid";
                                                                     $rs21 = mysqli_query($conn, $qry21);
                                                                     $paid_price=0;
                                                                     if(mysqli_num_rows($rs21) >= 1){
                                                                         while($row22 = mysqli_fetch_assoc($rs21)){
                                                                         $price_paidtips = "select price from peicepage where c_name='Paid tips'";
                                                                         $result21 = mysqli_query($conn, $price_paidtips);  
                                                                         $row22 = mysqli_fetch_assoc($result21);
                                                                        $paid_price = $row22['price'];
                                                                         } 
                                                                     }
                                                                    
                                                                    
                                                                     $userid = $row21['login_id'];
                                                                     $qry22="SELECT * FROM `sub2_paidtip` WHERE login_id=$userid and name='paidtip'";
                                                                     $rs22 = mysqli_query($conn, $qry22);
                                                                     if(mysqli_num_rows($rs22) > 0){
                                                                         $p3_price=0;
                                                                         while($row22 = mysqli_fetch_assoc($rs22)){
                                                                         $p3_paidtips = "select price from peicepage where c_name='Paid tips'";
                                                                         $result22 = mysqli_query($conn, $p3_paidtips);  
                                                                         $row22 = mysqli_fetch_assoc($result22);
                                                                        $p3_price += $row22['price'];
                                                                     }
                                                                    }
                                                                
                                                                     $tot = $paid_price+$p3_price;
                                                                     
                                                                     
                                                                     $sum2 = "select sum(mentorship.mentorship_price) as m_sum from mentorship inner join sub_mentorship where login_id = $userid and mentorship.mentorship_topic = sub_mentorship.name";
                                                                     $rs2 = mysqli_query($conn, $sum2);
                                                                     $row8 = mysqli_fetch_assoc($rs2);
                                                                     $mntr3_price = $row8['m_sum'];
                                                                    
                                                                     $sum3 = "select sum(mentorship.mentorship_price) as m2_sum from mentorship inner join sub2_mentorship where login_id = $userid and mentorship.mentorship_topic = sub2_mentorship.name";
                                                                     $rs3 = mysqli_query($conn, $sum3);
                                                                      $row9 = mysqli_fetch_assoc($rs3);
                                                                     $mntr4_price = $row9['m2_sum'];
                                                                    
                                                                     $sum4 = "select sum(workshop.course_price) as w_sum from workshop inner join sub_workshop where login_id = $userid and workshop.course_name = sub_workshop.name";
                                                                     $rs4 = mysqli_query($conn, $sum4);
                                                                      $row10 = mysqli_fetch_assoc($rs4);
                                                                     $wrkshp3_price = $row10['w_sum'];
                                                                     
                                                                     $sum5 = "select sum(workshop.course_price) as w2_sum from workshop inner join sub2_workshop where login_id = $userid and workshop.course_name = sub2_workshop.name";
                                                                     $rs5 = mysqli_query($conn, $sum5);
                                                                     $row11 = mysqli_fetch_assoc($rs5);
                                                                     $wrkshp4_price = $row11['w2_sum'];
                                                                     
                                                                     $total_price = $tot+$mntr3_price+$mntr4_price+$wrkshp3_price+$wrkshp4_price;
                                                                     
                                                                     $sql3="SELECT * from `login` where login_id = $userid";
                                                                     $result3 = mysqli_query($conn, $sql3);
                                                                      while($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)){
                                                                         //$logid = $row3['login_id'];
                                                                    ?>
                                                                    
                                                                    
                                                                      <tr>
                                                                        <td class="log_det"><?php echo $row3["login_id"];?></td>
                                                                        <td><?php echo $row3["name"];?></td>
                                                                        <td><?php echo $row3["date"];?></td>
                                                                        <td><?php echo $row3["email"];?></td>
                                                                        <td><?php echo $row3["phone"];?></td>
                                                                        <td><?php echo $row3["login_type"];?></td>
                                                                        <td><?php echo $total_price; ?>
                                                                        </td>
                                                                        <td>
                                                                        <button name="blogsubmit"  class="btn viewbtn  btn-success btn-rounded btn-fw"> View Subscriptions</button>
                                                                        </td>
                                                                        <td>
                                                                        <button name="blogsubmit" class="btn extbtn btn-primary btn-rounded btn-fw">Add Subscriptions</button>
                                                                        </td>
                                                                        <td>
                                                                        <button name="blogsubmit" onclick="window.location.href='blockuser.php?id=<?php  echo $row3['login_id'];?>';" class="btn blkbtn btn-danger btn-rounded btn-fw">Block Subscriptions</button>
                                                                        </td>
                                                                    </tbody>
                                                                    <?php }}} ?>
                                                                    </table>
                                                                </div>
                                                                <!--workshop user ends here-->
                                                                
                                                                <!--Mentorship user start here-->
                                                                <h5 class="card-title mt-5 mb-5"><big><u>MENTORSHIP SUBSCRIBERS</u></big> </h5>
                                                            <div class="table-responsive pt-3">
                                                                    
                                                                    <?php
                                                                      include "connectiondb.inc.php";
                                            
                                                                      $sql4="SELECT DISTINCT login_id from sub_mentorship where a_deleted=0";
                                                                      $result4 = mysqli_query($conn, $sql4);  
                                                                      
                                                                      if(mysqli_num_rows($result4)>0)
                                                                      {
                                                                        echo'
                                                                        <table class="table table-bordered">
                                                                    <thead>
                                                                      <tr>
                                                                        <th>
                                                                          User ID
                                                                        </th>
                                                                        <th>
                                                                          User Name
                                                                        </th>
                                                                        <th>
                                                                          Registered Date
                                                                        </th>
                                                                        <th>
                                                                          Email
                                                                        </th>
                                                                        <th>
                                                                          Phone no.
                                                                        </th>
                                                                        <th>
                                                                          Other
                                                                        </th>
                                                                        <th>
                                                                            Revenue
                                                                        </th>
                                                                        <th>
                                                                          Subscription
                                                                        </th>
                                                                        <th>
                                                                          Extend Subscription
                                                                        </th>
                                                                        <th>
                                                                          Block Subscription
                                                                        </th>
                                                                        
                                                                      </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        ';  
                                                                    $tot = 0;  
                                                                    while($row8 = mysqli_fetch_array($result4, MYSQLI_ASSOC))
                                                                    {
                                                                     $userid = $row8['login_id'];
                                                                     $qry8="SELECT * FROM `sub_paidtip` WHERE login_id=$userid";
                                                                     $rs8 = mysqli_query($conn, $qry8);
                                                                     $paid5_price=0;
                                                                     if(mysqli_num_rows($rs8) > 0){
                                                                         $row8 = mysqli_fetch_assoc($rs8);
                                                                         $price_paidtips = "select price from peicepage where c_name='Paid tips'";
                                                                         $result8 = mysqli_query($conn, $price_paidtips);  
                                                                         $row9 = mysqli_fetch_assoc($result8);
                                                                        $paid5_price = $row9['price'];
                                                                     }
                                                                    
                                                                    
                                                                     $qry16="SELECT * FROM `sub2_paidtip` WHERE login_id=$userid and name='paidtip'";
                                                                     $rs16 = mysqli_query($conn, $qry16);
                                                                      $p4_price=0;
                                                                     if(mysqli_num_rows($rs16) > 0){
                                                                         while($row16 = mysqli_fetch_assoc($rs16)){
                                                                         $p2_paidtips = "select price from peicepage where c_name='Paid tips'";
                                                                         $result16 = mysqli_query($conn, $p2_paidtips);  
                                                                         $row16 = mysqli_fetch_assoc($result16);
                                                                        $p4_price += $row16['price'];
                                                                     }
                                                                    }
                                                                
                                                                     $tot = $paid5_price+$p4_price;
                                                             
                                                                     
                                                                
                                                                     $sum1 = "select sum(mentorship.mentorship_price) as m_sum from mentorship inner join sub_mentorship where login_id = $userid and mentorship.mentorship_topic = sub_mentorship.name";
                                                                     $rs1 = mysqli_query($conn, $sum1);
                                                                     $row7 = mysqli_fetch_assoc($rs1);
                                                                     $mntr_price = $row7['m_sum'];
                                                                    
                                                                     $sum2 = "select sum(mentorship.mentorship_price) as m2_sum from mentorship inner join sub2_mentorship where login_id = $userid and mentorship.mentorship_topic = sub2_mentorship.name";
                                                                     $rs2 = mysqli_query($conn, $sum2);
                                                                      $row8 = mysqli_fetch_assoc($rs2);
                                                                     $mntr2_price = $row8['m2_sum'];
                                                                    
                                                                     $sum3 = "select sum(workshop.course_price) as w_sum from workshop inner join sub_workshop where login_id = $userid and workshop.course_name = sub_workshop.name";
                                                                     $rs3 = mysqli_query($conn, $sum3);
                                                                      $row9 = mysqli_fetch_assoc($rs3);
                                                                     $wrkshp_price = $row9['w_sum'];
                                                                     
                                                                     $sum4 = "select sum(workshop.course_price) as w2_sum from workshop inner join sub2_workshop where login_id = $userid and workshop.course_name = sub2_workshop.name";
                                                                     $rs4 = mysqli_query($conn, $sum4);
                                                                     $row10 = mysqli_fetch_assoc($rs4);
                                                                     $wrkshp2_price = $row10['w2_sum'];
                                                                     
                                                                     $total_price = $tot+$mntr_price+$mntr2_price+$wrkshp_price+$wrkshp2_price;
                                                                     
                                                                     
                                                                     
                                                                     $sql5="SELECT * from `login` where login_id = $userid";
                                                                     $result5 = mysqli_query($conn, $sql5);
                                                                     while($row6 = mysqli_fetch_array($result5, MYSQLI_ASSOC)){
                                                                    ?>
                                                                      <tr>
                                                                        <td class="log_det"><?php echo $row6["login_id"];?></td>
                                                                        <td><?php echo $row6["name"];?></td>
                                                                        <td><?php echo $row6["date"];?></td>
                                                                        <td><?php echo $row6["email"];?></td>
                                                                        <td><?php echo $row6["phone"];?></td>
                                                                        <td><?php echo $row6["login_type"];?></td>
                                                                        <td><?php  echo $total_price; ?></td>
                                                                        <td>
                                                                        <button name="blogsubmit"  class="btn viewbtn btn-success btn-rounded btn-fw">View Subscriptions</button>
                                                                        </td>
                                                                        <td>
                                                                        <button name="blogsubmit"  class="btn extbtn btn-primary btn-rounded btn-fw">Add Subscriptions</button>
                                                                        </td>
                                                                        <td>
                                                                        <button name="blogsubmit"  onclick="window.location.href='blockuser.php?id=<?php  echo $row6['login_id'];?>';" class="btn blkbtn btn-danger btn-rounded btn-fw">Block Subscriptions</button>
                                                                        </td>
                                                                    </tbody>
                                                                    <?php }}}?>
                                                                    </table>
                                                                </div>
                                                                 <!--Mentorship user ends here-->
                                                                 
                                                                 
                                                                <!-- blocked user -->
                                                                <h5 class="card-title mt-5 mb-5"><big><u>BLOCKED SUBSCRIBERS</u></big> </h5>
                                                            <div class="table-responsive pt-3">
                                                                    
                                                                    <?php
                                                                      include "connectiondb.inc.php";
                                            
                                                                     $sql7="SELECT DISTINCT login_id FROM sub_mentorship WHERE a_deleted=1 UNION SELECT DISTINCT login_id FROM sub_workshop WHERE a_deleted=1 UNION SELECT DISTINCT login_id FROM sub_paidtip WHERE a_deleted=1";
                                                                     $result7 = mysqli_query($conn, $sql7);
                                                                      if(mysqli_num_rows($result7)>0)
                                                                      {
                                                                        ?>
                                                                        <table class="table table-bordered">
                                                                    <thead>
                                                                      <tr>
                                                                        <th>
                                                                          User ID
                                                                        </th>
                                                                        <th>
                                                                          User Name
                                                                        </th>
                                                                        <th>
                                                                          Registered Date
                                                                        </th>
                                                                        <th>
                                                                          Email
                                                                        </th>
                                                                        <th>
                                                                          Phone no.
                                                                        </th>
                                                                        <th>
                                                                          Other
                                                                        </th>
                                                                        <th>
                                                                          Revenue
                                                                        </th>
                                                                        <th>
                                                                          Subscription
                                                                        </th>
                                                                        <th>
                                                                          Unblock Subscription
                                                                        </th>
                                                                        
                                                                      </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php
              
                                                                    $tot = 0;  
                                                                    while($row8 = mysqli_fetch_array($result7, MYSQLI_ASSOC))
                                                                    {
                                                                     $userid = $row8['login_id'];
                                                                     $qry8="SELECT * FROM `sub_paidtip` WHERE login_id=$userid";
                                                                     $rs8 = mysqli_query($conn, $qry8);
                                                                     $paid5_price=0;
                                                                     if(mysqli_num_rows($rs8) > 0){
                                                                         $row8 = mysqli_fetch_assoc($rs8);
                                                                         $price_paidtips = "select price from peicepage where c_name='Paid tips'";
                                                                         $result8 = mysqli_query($conn, $price_paidtips);  
                                                                         $row9 = mysqli_fetch_assoc($result8);
                                                                        $paid5_price = $row9['price'];
                                                                     }
                                                                    
                                                                    
                                                                     $qry16="SELECT * FROM `sub2_paidtip` WHERE login_id=$userid and name='paidtip'";
                                                                     $rs16 = mysqli_query($conn, $qry16);
                                                                      $p4_price=0;
                                                                     if(mysqli_num_rows($rs16) > 0){
                                                                         while($row16 = mysqli_fetch_assoc($rs16)){
                                                                         $p2_paidtips = "select price from peicepage where c_name='Paid tips'";
                                                                         $result16 = mysqli_query($conn, $p2_paidtips);  
                                                                         $row16 = mysqli_fetch_assoc($result16);
                                                                        $p4_price += $row16['price'];
                                                                     }
                                                                    }
                                                                
                                                                     $tot = $paid5_price+$p4_price;
                                                             
                                                                     
                                                                
                                                                     $sum1 = "select sum(mentorship.mentorship_price) as m_sum from mentorship inner join sub_mentorship where login_id = $userid and mentorship.mentorship_topic = sub_mentorship.name";
                                                                     $rs1 = mysqli_query($conn, $sum1);
                                                                     $row7 = mysqli_fetch_assoc($rs1);
                                                                     $mntr_price = $row7['m_sum'];
                                                                    
                                                                     $sum2 = "select sum(mentorship.mentorship_price) as m2_sum from mentorship inner join sub2_mentorship where login_id = $userid and mentorship.mentorship_topic = sub2_mentorship.name";
                                                                     $rs2 = mysqli_query($conn, $sum2);
                                                                      $row8 = mysqli_fetch_assoc($rs2);
                                                                     $mntr2_price = $row8['m2_sum'];
                                                                    
                                                                     $sum3 = "select sum(workshop.course_price) as w_sum from workshop inner join sub_workshop where login_id = $userid and workshop.course_name = sub_workshop.name";
                                                                     $rs3 = mysqli_query($conn, $sum3);
                                                                      $row9 = mysqli_fetch_assoc($rs3);
                                                                     $wrkshp_price = $row9['w_sum'];
                                                                     
                                                                     $sum4 = "select sum(workshop.course_price) as w2_sum from workshop inner join sub2_workshop where login_id = $userid and workshop.course_name = sub2_workshop.name";
                                                                     $rs4 = mysqli_query($conn, $sum4);
                                                                     $row10 = mysqli_fetch_assoc($rs4);
                                                                     $wrkshp2_price = $row10['w2_sum'];
                                                                     
                                                                     $total_price = $tot+$mntr_price+$mntr2_price+$wrkshp_price+$wrkshp2_price;
                                                                     
                                                                     $sql5="SELECT * from `login` where login_id = $userid";
                                                                     $result5 = mysqli_query($conn, $sql5);
                                                                     while($row8 = mysqli_fetch_array($result5, MYSQLI_ASSOC)){
                                                                    ?>
                                                                     <tr>
                                                                        <td class="log_det"><?php echo $row8["login_id"];?></td>
                                                                        <td><?php echo $row8["name"];?></td>
                                                                        <td><?php echo $row8["date"];?></td>
                                                                        <td><?php echo $row8["email"];?></td>
                                                                        <td><?php echo $row8["phone"];?></td>
                                                                        <td><?php echo $row8["login_type"];?></td>
                                                                        <td><?php echo $total_price;?></td>
                                                                        <td>
                                                                        <button name="blogsubmit"  class="btn viewbtn btn-success btn-rounded btn-fw">View Subscriptions</button>
                                                                        </td>
                                                                        <td>
                                                                        <button name="blogsubmit"  onclick="window.location.href='unblock.php?id=<?php echo $row8['login_id'];  ?>';" class="btn btn-danger btn-rounded btn-fw">Unblock Subscriptions</button>
                                                                        </td>                   
                                                                    </tbody>
                                                                    <?php }}} ?>
                                                                    </table>
                                                                </div>
                                                                
                                                                
                                                                <h5 class="card-title mt-5 mb-5"><big><u>DEACTIVATED SUBSCRIBERS</u></big> </h5>
                                                            <div class="table-responsive pt-3">
                                                                    
                                                                    <?php
                                                                      include "connectiondb.inc.php";
                                                                      
                                                                    ?>
                                                                        <table class="table table-bordered">
                                                                    <thead>
                                                                      <tr>
                                                                        <th>
                                                                          User ID
                                                                        </th>
                                                                        <th>
                                                                          User Name
                                                                        </th>
                                                                        <th>
                                                                          Registered Date
                                                                        </th>
                                                                        <th>
                                                                          Email
                                                                        </th>
                                                                        <th>
                                                                          Phone no.
                                                                        </th>
                                                                        <th>
                                                                          Other
                                                                        </th>
                                                                        <th>
                                                                          Subscription
                                                                        </th>
                                                                        <th>
                                                                          Activate Subscriber
                                                                        </th>
                                                                        
                                                                      </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                       
                                                                <?php          
                                                                    
                                                                     $sql9="SELECT * from `login` where a_deleted = 1";
                                                                     $result9 = mysqli_query($conn, $sql9);
                                                                     while($row9 = mysqli_fetch_array($result9, MYSQLI_ASSOC)){
                                                                    
                                                                    ?>
                                                                      <tr>
                                                                        <td class="log_det"><?php echo $row9["login_id"];?></td>
                                                                        <td><?php echo $row9["name"];?></td>
                                                                        <td><?php echo $row9["date"];?></td>
                                                                        <td><?php echo $row9["email"];?></td>
                                                                        <td><?php echo $row9["phone"];?></td>
                                                                        <td><?php echo $row9["login_type"];?></td>
                                                                        <td>
                                                                        <button name="blogsubmit"  class="btn viewbtn btn-success btn-rounded btn-fw">View Subscriptions</button>
                                                                        </td>
                                                                        <td>
                                                                        <button name="blogsubmit"  onclick="window.location.href='activate.php?id=<?php echo $row9['login_id'];  ?>';" class="btn btn-danger btn-rounded btn-fw">Activate Subscriber</button>
                                                                        </td>                   
                                                                    </tbody>
                                                                    <?php } ?>
                                                                    </table>
                                                                </div>
                                                                
                                                                
                                                                 
                                  </div>
                                </div>
    <!--paidtips users div start from here-->
    
    
    <!--Start -- modal for view of subscriptions-->
            <div class="modal" tabindex="-1" id="view-sub" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">ALL Subscriprions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body fordata">
                      
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
    <!--End -- modal for view of subscriptions-->    

<!-- end paid user -->



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
  <!-- container-scroller --><!-- plugins:js -->
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

<!-- script for pop up modal -->

<script>
$(document).ready(function(){
  $('.subbtn').on('click',function(){
      
      var log_id = $(this).closest('tr').find('.login_id2').text();
        $.ajax({
          type:"POST",
          url:"createcookie.php",
          data:{
              'chceking_sub_btn':true,
              'login_id':log_id
          },
          success: function(response){
              $('#submodel').modal('show');
          }
        });
  });
  
//   $('.addbtn').on('click',function(){
      
//       var log_id1 = $(this).closest('tr').find('.log_det').text();
//         $.ajax({
//           type:"POST",
//           url:"createcookie.php",
//           data:{
//               'chceking_sub_btn':true,
//               'login_id':log_id1
//           },
//           success: function(response){
//               $('#submodel').modal('show');
//           }
//         });
//   });
  
  
  $('.viewbtn').on('click',function(){
        var log_id1 = $(this).closest('tr').find('.log_det').text();
        $.ajax({
          type:"POST",
          url:"getdata.php",
          data:{
              'view_data_btn':true,
              'login_id':log_id1
          },
          success: function(response){
              console.log(response);
              $('.fordata').html(response);
              $('#view-sub').modal('show');
          }
        });
  });
  
  
  $('.extbtn').on('click',function(){
      var log_id = $(this).closest('tr').find('.log_det').text();
      //var sub_id = $(this).closest('tr').find('.login_id3').text();
        $.ajax({
          type:"POST",
          url:"createcookie.php",
          data:{
              'chceking_sub_btn':true,
              'login_id':log_id
          },
          success: function(response){
              $('#submodel').modal('show');
          }
        });
  });
  
  
  
  
//   $('.extbtn').on('click',function(){
//         var log_id1 = $(this).closest('tr').find('.log_det').text();
//         $.ajax({
//           type:"POST",
//           url:"getform.php",
//           data:{
//               'view_data_btn':true,
//               'login_id':log_id1
//           },
//           success: function(response){
//               console.log(response);
//               $('.fordata').html(response);
//               $('#view-sub').modal('show');
//           }
//         });
//   });

});
</script>


</body>

</html>

