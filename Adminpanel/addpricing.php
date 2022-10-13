<?php
    include "connectiondb.inc.php";


    if(isset($_POST['psubmit'])){

        $code=mysqli_real_escape_string($conn,$_POST['name']);
        $price= mysqli_real_escape_string($conn,$_POST['pri']);
        $dis= mysqli_real_escape_string($conn,$_POST['des']);
       
        

        

        

        $isql="INSERT INTO peicepage(price_id,c_name,price,description) VALUES (DEFAULT,?,?,?);";
        $stmt=mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$isql)){
            echo "SQL ERROR";
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"sss",$code,$price,$dis);
            mysqli_stmt_execute($stmt);
        }
        
        header("Location: pricing.php");
    }




?>