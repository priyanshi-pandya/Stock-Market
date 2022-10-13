<?php
     include "connectiondb.inc.php";
    
    if(isset($_POST['submit'])){
        $log_id = $_POST['logid'];
        $month = $_POST['months'];
        $sql="SELECT * from `sub_workshop` where login_id='".$log_id."';";
        $result = mysqli_query($conn, $sql);   
                                                                      
          if(mysqli_num_rows($result)>0)
          {
              while($row = mysqli_fetch_assoc($result)){
                $name=$row['name'];
                $id=$row['login_id'];
                $date=$row['date'];
                $exp=$row['expiry'];
                $remark=$row['remark'];
                $sub_id = $row['sub_id'];
                $final = date('Y-m-d', strtotime($exp . "+".$month." "." months"));
                $final1 = $final;
             }
          }
        $sql1 = "UPDATE `sub_workshop` SET `expiry`='".$final."' WHERE login_id='".$log_id."' AND sub_id='".$sub_id."'";
        $result1 = mysqli_query($conn, $sql1);
        if($result1){
           // echo "success";
        }
        else{
            //die("Error".die($conn));
        }
        
         $sql = "INSERT INTO `sub2_workshop` (`name`, `login_id`, `date`, `expiry`, `remark`, `sub_id`) VALUES ('$name', '$id', current_timestamp(), '$final1', '$remark', '$sub_id');";
        
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: user1.php");   
            exit();
        }else{
            echo $return = "error done";
        }
    }
    
?>