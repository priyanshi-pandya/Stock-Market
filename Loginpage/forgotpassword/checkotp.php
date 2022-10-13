<?php 
    include("../connectiondb.inc.php");

    if(isset($_POST['verifycode'])){

        $email= $_POST['encryptedemail'];
        $entered_otp= $_POST['user_otp'];
        //  DECRYPT EMAIL

        $ciphering = "AES-128-CTR";
        $options = 0;
        $decryption_iv = '1234567891011121';
        $decryption_key = "PerfectHit";
        $decryption=openssl_decrypt ($email, $ciphering, 
                $decryption_key, $options, $decryption_iv);
        
        $encemail=$decryption;

        // FETCH THE OTP
        $sql = "SELECT * FROM login WHERE email = '$encemail';";  
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        
        if($row["otp_check"]==$entered_otp){
            header("Location: newpassword.php?e=$email");
        }
        else{
            header("Location: forgot.php?otperror=WrongOTP&action=True&e=$email");
        }
    }

?>