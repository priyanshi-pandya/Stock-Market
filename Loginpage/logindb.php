<?php
    
    session_start();
    
    
    if(isset($_SESSION['useremail'])){
        header("Location: ../account.php?error=AlreadyLogged");
        exit();
    }
    
    // Including the connection file
    include "connectiondb.inc.php";

    // Check the Fetched Username and password
    
    function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
    
    function isMobileDevice() {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }

    if(isset($_POST['lsubmitbutton'])){

        $email= $_POST['l_email'];
        $password= $_POST['l_pass'];

        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($conn, $email);  
        $password = mysqli_real_escape_string($conn, $password); 
    
        $sql = "SELECT * FROM login WHERE email = '$email' AND password = '$password';";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($row['a_deleted'] == 1){
            header("Location: ../account.php?error=Deactivateduser"); 
            exit();
        }
        if($count == 1){  
            // CREATING A USER SESSION
            
            
                $loginid=$row['login_id'];
                if(isset($_COOKIE['isactive'])){
                        $sql = "UPDATE user_device_details SET is_active = 0,logout_time='$date' WHERE user_id = '$loginid' AND logout_time is NULL";
                        $result = mysqli_query($conn, $sql); 
                        setcookie("isactive", "", time() - 3600);
                } 
                        
                        //check if other user is active or not
                $query = "select * from `user_device_details` where `user_id` = '$loginid' and is_active = 1";
                $run =  mysqli_query($conn, $query);
                $count_active = mysqli_num_rows($run);
                        
                if($count_active==0){
                         setcookie("isactive", $loginid);
                        
                         $_SESSION["useremail"]=$email;
                         $_SESSION["login_id"]=$row['login_id'];
                         $ipadd=get_client_ip();
                                $isactive=1;
                        
                        if(isMobileDevice()){
                            $devicename="Mobile";
                        }
                        else {
                            $devicename="PC/Laptop";
                        }
                    
                        $ip_address=getenv("REMOTE_ADDR");
                        
                        date_default_timezone_set("Asia/Kolkata");
                        $curr = date('Y-m-d H-i-s');
                        echo $loginid.'<br>';
                        echo $ipadd.'<br>';
                        echo $devicename.'<br>';
                        echo $curr.'<br>';
                        echo $ip_address.'<br>';
                        
                        $sql1 = "INSERT INTO `user_device_details` (`id`, `user_id`, `ip_address`, `device_name`, `is_active`, `login_time`, `logout_time`) VALUES (NULL, '$loginid', '$ip_address', '$devicename', '1', '$curr', NULL);";
                        $result1 = mysqli_query($conn, $sql1);
            
                        if(isset($_SESSION['current_page'])){
                            header("Location: ".$_SESSION['current_page']);
                        }
                         else {
                            header("Location: ../index.php");
                         }   
             
             
            }
            else{
                header("Location: ../account.php?error=activeuser");
            }

        }  
        else{  
            header("Location: ../account.php?error=Invaliddetials"); 
        }     
    }






?>