<?php

    include("../connectiondb.inc.php");

    if(isset($_POST['setnewpassword'])){

        $email= $_POST['encryptedemail'];

        $pass1= $_POST['pass1'];
        $pass2= $_POST['pass2'];
        //  DECRYPT EMAIL

        $ciphering = "AES-128-CTR";
        $options = 0;
        $decryption_iv = '1234567891011121';
        $decryption_key = "PerfectHit";
        $decryption=openssl_decrypt ($email, $ciphering, 
                $decryption_key, $options, $decryption_iv);
        
        $encemail=$decryption;

        if(($pass1==$pass2)&&(strlen($pass1)>6)){
            
            $isql="UPDATE login SET password='$pass1' WHERE email='$encemail';";
            $result=mysqli_query($conn,$isql);
            header("Location: ../../account.php?error=PasswordChanged");
        }
        else{
            header("Location: newpassword.php?passerror=InvalidPassword&e=$email");
        }
    }

?>