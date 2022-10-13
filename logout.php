<?php

    include "connectiondb.inc.php";
    session_start();
    
    $usermail=$_SESSION['useremail'];
    date_default_timezone_set("Asia/Calcutta");
    $login_id=$_SESSION['login_id'];
    $isactive=0;
    
    date_default_timezone_set("Asia/Kolkata");
            
    $date=date("Y-m-d h:i:sa");
    
    echo $login_id; 
    
    $sql = "UPDATE user_device_details SET is_active = 0,logout_time='$date' WHERE user_id = '$login_id' AND logout_time is NULL";
    
    $result = mysqli_query($conn, $sql); 
     

    // PUSH DETAILS IN HISTORY
    
    //$sql = "SELECT login_id,ip_address,device_name,is_active,login_time,logout_time FROM login WHERE email='$usermail';";  
    //$result = mysqli_query($conn, $sql); 
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    //$userid=$row['login_id'];
    //$ip_address=$row['ip_address'];;
    //$device_name=$row['device_name'];;
    //$is_active=$row['is_active'];;
    //$login_time=$row['login_time'];;
    //$logout_time=$row['logout_time'];;
    
    
    //$isql="INSERT INTO user_device_details(id,user_id,ip_address,device_name,is_active,login_time,logout_time) VALUES(DEFAULT,$userid,'$ip_address','$device_name',$is_active,'$login_time','$logout_time');";
    //$result = mysqli_query($conn, $isql);
    
    // PUSH DETAILS IN HISTORY
    setcookie("isactive", "", time() - 3600);
    session_destroy();
    
    
    header("Location: account.php");
    
?>