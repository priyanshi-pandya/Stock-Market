<?php

    include "connectiondb.inc.php";

    if(isset($_GET['id'])){
        $stock_id=$_GET['id'];
    }
    else{
        header("Location: freetipswall.php");
    }

    if(isset($_POST['exitpricesubmit'])){
      if(isset($_POST['exitprice'])){
          $ep=$_POST['exitprice'];

          $sql="SELECT * from freetips WHERE id='$stock_id'";
          $result = mysqli_query($conn, $sql); 
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

          $timeofresult=date('Y-m-d H:i:s');

          $npl = ($ep-$row['Entry_Price'])*$row['quantity'];
          
          $isql="UPDATE freetips SET exit_price='$ep',Result='CMP Hit',Time_of_result='$timeofresult',net_p_l=$npl WHERE id='$stock_id';";
          $result=mysqli_query($conn,$isql);
          
          header("Location: freetipswall.php");
        }
        else{
            header("Location: freetipswall.php");
        }
        
    }

?>


<form action="" method="post">

  <h1>Exit Price</h1>

  <fieldset>
    <legend><span class="number"></span>Exit Price</legend>
    <label for="name">Enter:</label>
    <input type="text" name="exitprice">

  
  <button type="submit" name="exitpricesubmit">Submit</button>

</form>