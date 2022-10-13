<?php
     include "connectiondb.inc.php";
    if(isset($_POST['chceking_sub_btn'])){
        $login_id = $_POST['login_id'];
        if(isset($_COOKIE['userid'])){
            setcookie("userid", "", time() - 3600);
        }
        setcookie('userid',$login_id);
        echo $return = "Record done ".$_COOKIE['userid'];
    }
    
    
    if(isset($_POST['sub_data'])){
        $id = $_COOKIE['userid'];
        $months = $_POST['months'];
        $mentors = $_POST['mentors'];
        $remark = $_POST['other'];
        
        $sql="UPDATE `login` SET `ispaid` = 1 WHERE `login_id` = $id;";
        $result = mysqli_query($conn, $sql);
        
        $time = strtotime(date("Y-m-d H:i:s",time()));
        $final = date("Y-m-d H:i:s", strtotime("+".$months." month", $time));
        
        $sql = "INSERT INTO `sub_mentorship` (`sub_num`, `name`, `login_id`, `date`, `expiry`, `remark`) VALUES (NULL, '$mentors', '$id', current_timestamp(), '$final', '$remark')";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: user1.php");   
        }else{
            echo $return = "error done";
        }
    }
    
    if(isset($_POST['sub_work'])){
        $id = $_COOKIE['userid'];
        $months = $_POST['months'];
        $workshop = $_POST['works'];
        $remark = $_POST['other'];
        
        $sql="UPDATE `login` SET `ispaid` = 1 WHERE `login_id` = $id;";
        $result = mysqli_query($conn, $sql);
        
        
        $sql4="SELECT * from `sub_workshop` where login_id='".$id."' AND name='".$workshop."';";
        $result4 = mysqli_query($conn, $sql);   
                                                                      
          if(mysqli_num_rows($result4)>0)
          {
              while($row = mysqli_fetch_assoc($result4)){
                $name=$row['name'];
                echo $name;
                $id=$row['login_id'];
                $date=$row['date'];
                $exp=$row['expiry'];
                $remark=$row['remark'];
                $sub_id = $row['sub_id'];
                $final = date('Y-m-d', strtotime($exp . "+".$month." "." months"));
                $final1 = $final;
             }
          }
        $sql1 = "UPDATE `sub_workshop` SET `expiry`='".$final."' WHERE login_id='".$id."' AND sub_id='".$sub_id."'";
        $result1 = mysqli_query($conn, $sql1);
        if($result1){
            echo "success";
        }
        else{
            die("Error".die($conn));
        }
        
         $sql = "INSERT INTO `sub2_workshop` (`name`, `login_id`, `date`, `expiry`, `remark`, `sub_id`) VALUES ('$name', '$id', current_timestamp(), '$final1', '$remark', '$sub_id');";
        
        $result = mysqli_query($conn, $sql);
        if($result){
            // header("Location: user1.php");   
            // exit();
        }else{
        //    echo $return = "error done";
        }
        
    }
    
    if(isset($_POST['sub_paid'])){
        $id = $_COOKIE['userid'];
        $months = $_POST['months'];
        $remark = $_POST['other'];
        
        $sql="UPDATE `login` SET `ispaid` = 1 WHERE `login_id` = $id;";
        $result = mysqli_query($conn, $sql);
        
        
        $time = strtotime(date("Y-m-d H:i:s",time()));
        $final = date("Y-m-d H:i:s", strtotime("+".$months." month", $time));
        
        $sql = "INSERT INTO `sub_paidtip` (`sub_mem`, `login_id`, `date`, `expiry`, `remark`) VALUES (NULL, '$id', current_timestamp(), '$final', '$remark')";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: user1.php");   
        }else{
            echo $return = "error done";
        }
    }
    
?>
