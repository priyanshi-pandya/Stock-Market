<?php
    include "connectiondb.inc.php";


    if(isset($_POST['wsubmit'])){

        $code=mysqli_real_escape_string($conn,$_POST['name']);
        $cre_date= mysqli_real_escape_string($conn,$_POST['c_date']);
        $dis= mysqli_real_escape_string($conn,$_POST['des']);
        $ex_date= mysqli_real_escape_string($conn,$_POST['price']);
         $codeid= mysqli_real_escape_string($conn,$_POST['workid']);
        

        

        

        $isql="UPDATE workshop SET course_name=?,course_date=?,description=?,course_price =? WHERE course_id=$codeid ";
        $stmt=mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$isql)){
            echo "SQL ERROR";
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"ssss",$code,$cre_date,$dis,$ex_date);
            mysqli_stmt_execute($stmt);
        }
        
        header("Location: workshop.php");
    }




?>