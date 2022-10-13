<?php 
    include("../connectiondb.inc.php");
    session_start();

    function sendmail(){
        $num_str = sprintf("%06d", mt_rand(1, 999999));
        global $email,$conn;

        $isql="UPDATE login SET otp_check='$num_str' WHERE email='$email';";
        $result=mysqli_query($conn,$isql);


        $from = "perfecthit@writesoft.co.in";
        $to = $email;

        $subject = "PHP CHECK MAIL SENDING";
        $message = $num_str;
        $headers= "From:".$from;

        mail($to,$subject,$message,$headers);

        $simple_string = $email;
        $ciphering = "AES-128-CTR";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $encryption_iv = '1234567891011121';
        $encryption_key = "PerfectHit";
        
        // Use openssl_encrypt() function to encrypt the data
        $encryption = openssl_encrypt($simple_string, $ciphering,
                    $encryption_key, $options, $encryption_iv);

        header("Location: forgot.php?action=True&e=$encryption");

    }




    if(isset($_POST['submitbutton'])){

        $email= $_POST['l_email'];

        //to prevent from mysqli injection  
        $email = stripcslashes($email);
        $email = mysqli_real_escape_string($conn, $email);  
    
        $sql = "SELECT * FROM login WHERE email = '$email';";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){
            sendmail();
        }  
        else{  
            header("Location: forgot.php?error=InvalidEmail");
        }     
    }


?>