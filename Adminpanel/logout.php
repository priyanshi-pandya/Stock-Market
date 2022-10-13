<?php
    session_start();
    
    // PUSH DETAILS IN HISTORY
    session_destroy();
    
    //$sql = "UPDATE login SET ip_address='$ipadd',device_name='$devicename',is_active=$isactive,login_time='$date' WHERE email='$email';";
    //$result = mysqli_query($conn, $sql);
    
    header("Location: login.php");
    
?>