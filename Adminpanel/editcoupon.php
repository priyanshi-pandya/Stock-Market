<?php
    include "connectiondb.inc.php";


    if(isset($_POST['couponsubmit'])){

        $code=mysqli_real_escape_string($conn,$_POST['couponcode']);
        $cre_date= mysqli_real_escape_string($conn,$_POST['cre_date']);
        $dis= mysqli_real_escape_string($conn,$_POST['discount']);
        $ex_date= mysqli_real_escape_string($conn,$_POST['ex_date']);
         $codeid= mysqli_real_escape_string($conn,$_POST['codeid']);
        

        

        

        $isql="UPDATE coupon SET coupon_code=?,creation_date=?,discount_price=?,expire_date =? WHERE coupon_id=$codeid ";
        $stmt=mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$isql)){
            echo "SQL ERROR";
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"ssss",$code,$cre_date,$dis,$ex_date);
            mysqli_stmt_execute($stmt);
        }
        
        header("Location: coupon.php");
    }




?>