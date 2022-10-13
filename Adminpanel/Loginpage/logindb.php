<?php

    // Including the connection file
    include "connectiondb.inc.php";

    // Check the Fetched Username and password


    if(isset($_POST['lsubmitbutton'])){

        $email= $_POST['l_email'];
        $password= $_POST['l_pass'];

        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($conn, $email);  
        $password = mysqli_real_escape_string($conn, $password); 
    
        $sql = "SELECT * FROM adminlogin WHERE username = '$email' AND password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            // CREATING A USER SESSION
            session_start();
            $_SESSION["adminemail"]=$email;

            header("Location: ../index.php");
        }  
        else{  
            header("Location: ../login.php?error=Invaliddetials"); 
        }     
    }






?>