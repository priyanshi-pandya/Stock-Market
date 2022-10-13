<?php
    include "connectiondb.inc.php";


    if(isset($_POST['workshopsubmit'])){

        $course=mysqli_real_escape_string($conn,$_POST['cname']);
       $date= mysqli_real_escape_string($conn,$_POST['cdate']);
        $description=mysqli_real_escape_string($conn ,$_POST['des']);
        $price=mysqli_real_escape_string($conn,$_POST['price']);
        
       
        
        $isql="INSERT INTO workshop(course_id,course_name,course_date,description,course_price) VALUES (DEFAULT,?,?,?,?);";
                $stmt=mysqli_stmt_init($conn);

                if(!mysqli_stmt_prepare($stmt,$isql)){
                    echo "SQL ERROR";
                    exit();
                }
                else{
                    mysqli_stmt_bind_param($stmt,"ssss",$course,$date,$description,$price);
                    mysqli_stmt_execute($stmt);
                }
        
        header("Location: workshop.php");
    }




?>